<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

declare(strict_types=1);

namespace Module\MyModule\Grid\Query;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;
use PrestaShop\PrestaShop\Adapter\Configuration;
use PrestaShop\PrestaShop\Core\Grid\Query\AbstractDoctrineQueryBuilder;
use PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicatorInterface;
use PrestaShop\PrestaShop\Core\Grid\Query\Filter\DoctrineFilterApplicatorInterface;
use PrestaShop\PrestaShop\Core\Grid\Query\Filter\SqlFilters;
use PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface;

/**
 * Defines all required sql statements to render products list.
 */
class ProductQueryBuilder extends AbstractDoctrineQueryBuilder
{
    /**
     * @var DoctrineSearchCriteriaApplicatorInterface
     */
    private $searchCriteriaApplicator;

    /**
     * @var int
     */
    private $contextLanguageId;

    /**
     * @var int
     */
    private $contextShopId;

    /**
     * @var bool
     */
    private $isStockSharingBetweenShopGroupEnabled;

    /**
     * @var int
     */
    private $contextShopGroupId;

    /**
     * @var DoctrineFilterApplicatorInterface
     */
    private $filterApplicator;

    /**
     * @var Configuration
     */
    private $configuration;

    public function __construct(
        Connection $connection,
        string $dbPrefix,
        DoctrineSearchCriteriaApplicatorInterface $searchCriteriaApplicator,
        int $contextLanguageId,
        int $contextShopId,
        int $contextShopGroupId,
        bool $isStockSharingBetweenShopGroupEnabled,
        DoctrineFilterApplicatorInterface $filterApplicator,
        Configuration $configuration
    ) {
        parent::__construct($connection, $dbPrefix);
        $this->searchCriteriaApplicator = $searchCriteriaApplicator;
        $this->contextLanguageId = $contextLanguageId;
        $this->contextShopId = $contextShopId;
        $this->isStockSharingBetweenShopGroupEnabled = $isStockSharingBetweenShopGroupEnabled;
        $this->contextShopGroupId = $contextShopGroupId;
        $this->filterApplicator = $filterApplicator;
        $this->configuration = $configuration;
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchQueryBuilder(SearchCriteriaInterface $searchCriteria): QueryBuilder
    {
        $qb = $this->getQueryBuilder($searchCriteria->getFilters());
        $qb
            ->select('od.id_order,od.product_quantity_in_stock')
            ->addSelect('p.`id_product`, p.`reference`')
            ->addSelect('ps.`price` AS `price_tax_excluded`, ps.`active`')
            ->addSelect('pl.`name`, pl.`link_rewrite`')
            ->addSelect('cl.`name` AS `category`')
            ->addSelect('img_shop.`id_image`')
            ->addSelect('p.`id_tax_rules_group`')
        ;

        if ($this->configuration->getBoolean('PS_STOCK_MANAGEMENT')) {
            $qb->addSelect('sa.`quantity`');
        }

        $this->searchCriteriaApplicator
            ->applyPagination($searchCriteria, $qb)
            ->applySorting($searchCriteria, $qb)
        ;

        return $qb;
    }

    /**
     * {@inheritdoc}
     */
    public function getCountQueryBuilder(SearchCriteriaInterface $searchCriteria): QueryBuilder
    {
        $qb = $this->getQueryBuilder($searchCriteria->getFilters());
        $qb->select('COUNT(p.`id_product`)');

        return $qb;
    }

    /**
     * Gets query builder.
     *
     * @param array $filterValues
     *
     * @return QueryBuilder
     */
    private function getQueryBuilder(array $filterValues): QueryBuilder
    {
        $qb = $this->connection
            ->createQueryBuilder()
            ->from($this->dbPrefix . 'order_detail', 'od')
            ->innerJoin(
                'od',
                $this->dbPrefix . 'product',
                'p',
                'od.`id_product` = p.`id_product` AND ps.`id_shop` = :id_shop'
            )
            ->innerJoin(
                'p',
                $this->dbPrefix . 'product_shop',
                'ps',
                'ps.`id_product` = p.`id_product` AND ps.`id_shop` = :id_shop'
            )
            ->leftJoin(
                'p',
                $this->dbPrefix . 'product_lang',
                'pl',
                'pl.`id_product` = p.`id_product` AND pl.`id_lang` = :id_lang AND pl.`id_shop` = :id_shop'
            )
            ->leftJoin(
                'ps',
                $this->dbPrefix . 'category_lang',
                'cl',
                'cl.`id_category` = ps.`id_category_default` AND cl.`id_lang` = :id_lang AND cl.`id_shop` = :id_shop'
            )
            ->leftJoin(
                'ps',
                $this->dbPrefix . 'image_shop',
                'img_shop',
                'img_shop.`id_product` = ps.`id_product` AND img_shop.`cover` = 1 AND img_shop.`id_shop` = :id_shop'
            )
            ->andWhere('p.`state`=1')
        ;

        $isStockManagementEnabled = $this->configuration->getBoolean('PS_STOCK_MANAGEMENT');

        if ($isStockManagementEnabled) {
            $stockOnCondition =
                'sa.`id_product` = p.`id_product`
                    AND sa.`id_product_attribute` = 0
                ';

            if ($this->isStockSharingBetweenShopGroupEnabled) {
                $stockOnCondition .= '
                     AND sa.`id_shop` = 0 AND sa.`id_shop_group` = :id_shop_group
                ';
            } else {
                $stockOnCondition .= '
                     AND sa.`id_shop` = :id_shop AND sa.`id_shop_group` = 0
                ';
            }

            $qb->leftJoin(
                'p',
                $this->dbPrefix . 'stock_available',
                'sa',
                $stockOnCondition
            );

            $qb->setParameter('id_shop_group', $this->contextShopGroupId);
        }


        $sqlFilters = new SqlFilters();
        $sqlFilters
            ->addFilter(
                'id_order',
                'od.`id_order`',
                SqlFilters::WHERE_STRICT
            );
        $sqlFilters
            ->addFilter(
                'id_product',
                'p.`id_product`',
                SqlFilters::WHERE_STRICT
            );
        if (version_compare(_PS_VERSION_, '8.0', '>=')) {
            $sqlFilters
                ->addFilter(
                    'price_tax_excluded',
                    'ps.`price`',
                    SqlFilters::MIN_MAX
                );
        }
        $this->filterApplicator->apply($qb, $sqlFilters, $filterValues);

        $qb->setParameter('id_shop', $this->contextShopId);
        $qb->setParameter('id_lang', $this->contextLanguageId);

        foreach ($filterValues as $filterName => $filter) {
            if ('active' === $filterName) {
                $qb->andWhere('ps.`active` = :active');
                $qb->setParameter('active', $filter);

                continue;
            }



            if ('id_order' === $filterName) {
                $qb->andWhere('od.`id_order` = :id_order');
                $qb->setParameter('id_order', $filter);
                continue;
            }



            if ('id_product' === $filterName) {
                $qb->andWhere('p.`id_product` = :id_product');
                $qb->setParameter('id_product', $filter);
                continue;
            }

            if ('name' === $filterName) {
                $qb->andWhere('pl.`name` LIKE :name');
                $qb->setParameter('name', '%' . $filter . '%');

                continue;
            }

            if ('reference' === $filterName) {
                $qb->andWhere('p.`reference` LIKE :reference');
                $qb->setParameter('reference', '%' . $filter . '%');

                continue;
            }

            if (version_compare(_PS_VERSION_, '8.0', '<')) {
                if ('price_tax_excluded' === $filterName) {
                    if (isset($filter['min_field'])) {
                        $qb->andWhere('ps.`price` >= :price_min');
                        $qb->setParameter('price_min', $filter['min_field']);
                    }
                    if (isset($filter['max_field'])) {
                        $qb->andWhere('ps.`price` <= :price_max');
                        $qb->setParameter('price_max', $filter['max_field']);
                    }
                }
            }
        }

        return $qb;
    }
}
