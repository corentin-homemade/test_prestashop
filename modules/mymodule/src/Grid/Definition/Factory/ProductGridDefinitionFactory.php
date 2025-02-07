<?php
declare(strict_types=1);

namespace Module\MyModule\Grid\Definition\Factory;

use PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollection;
use PrestaShop\PrestaShop\Core\Grid\Column\Type\Common\ActionColumn;
use PrestaShop\PrestaShop\Core\Grid\Column\Type\DataColumn;
use PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory;
use PrestaShop\PrestaShop\Core\Grid\Filter\Filter;
use PrestaShop\PrestaShop\Core\Grid\Filter\FilterCollection;
use PrestaShopBundle\Form\Admin\Type\NumberMinMaxFilterType;
use PrestaShopBundle\Form\Admin\Type\SearchAndResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProductGridDefinitionFactory extends AbstractGridDefinitionFactory
{
    const GRID_ID = 'product';

    /**
     * {@inheritdoc}
     */
    protected function getId()
    {
        return self::GRID_ID;
    }

    /**
     * {@inheritdoc}
     */
    protected function getName()
    {
        return $this->trans('Products of orders', [], 'Modules.Mymodule');
    }

    /**
     * {@inheritdoc}
     */
    protected function getColumns()
    {
        return (new ColumnCollection())
            ->add(
                (new DataColumn('id_order'))
                    ->setName($this->trans('N°order', [], 'Modules.Mymodule'))
                    ->setOptions([
                        'field' => 'id_order',
                    ])
            )
            ->add(
                (new DataColumn('id_product'))
                    ->setName($this->trans('N°product', [], 'Modules.Mymodule'))
                    ->setOptions([
                        'field' => 'id_product',
                    ])
            )
            ->add(
                (new DataColumn('product_name'))
                    ->setName($this->trans('Name', [], 'Modules.Mymodule'))
                    ->setOptions([
                        'field' => 'product_name',
                    ])
            )
            ->add(
                (new DataColumn('price_tax_excluded'))
                    ->setName($this->trans('Price', [], 'Modules.Mymodule'))
                    ->setOptions([
                        'field' => 'price_tax_excluded',
                    ])
            )
            ->add(
                (new DataColumn('reference'))
                    ->setName($this->trans('Reference', [], 'Modules.Mymodule'))
                    ->setOptions([
                        'field' => 'reference',
                    ])
            )
            ->add(
                (new DataColumn('active'))
                    ->setName($this->trans('Active', [], 'Modules.Mymodule'))
                    ->setOptions([
                        'field' => 'active',
                    ])
            )
            ->add(
                (new ActionColumn('actions'))
                    ->setName($this->trans('Actions', [], 'Modules.Mymodule'))
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function getFilters()
    {
        return (new FilterCollection())
            ->add(
                (new Filter('id_order', TextType::class))
                    ->setTypeOptions([
                        'required' => false,
                        'attr' => [
                            'placeholder' => $this->trans('N°order', [], 'Modules.Mymodule'),
                        ],
                    ])
                    ->setAssociatedColumn('id_order')
            )
            ->add(
                (new Filter('id_product', TextType::class))
                    ->setTypeOptions([
                        'required' => false,
                        'attr' => [
                            'placeholder' => $this->trans('N°product', [], 'Modules.Mymodule'),
                        ],
                    ])
                    ->setAssociatedColumn('id_product')
            )
            ->add(
                (new Filter('name', TextType::class))
                    ->setTypeOptions([
                        'required' => false,
                        'attr' => [
                            'placeholder' => $this->trans('Name', [], 'Modules.Mymodule'),
                        ],
                    ])
                    ->setAssociatedColumn('name')
            )
            ->add(
                (new Filter('price_tax_excluded', NumberMinMaxFilterType::class, [
                    'min_field_options' => [
                        'attr' => [
                            'placeholder' => $this->trans('Min', [], 'Modules.Mymodule'),
                        ],
                    ],
                    'max_field_options' => [
                        'attr' => [
                            'placeholder' => $this->trans('Max', [], 'Modules.Mymodule'),
                        ],
                    ],
                ]))
                    ->setTypeOptions([
                        'required' => false,
                        'attr' => [
                            'placeholder' => $this->trans('Price', [], 'Modules.Mymodule'),
                        ],
                    ])
                    ->setAssociatedColumn('price_tax_excluded')
            )
            ->add(
                (new Filter('reference', TextType::class))
                    ->setTypeOptions([
                        'required' => false,
                        'attr' => [
                            'placeholder' => $this->trans('Reference', [], 'Modules.Mymodule'),
                        ],
                    ])
                    ->setAssociatedColumn('reference')
            )
            ->add(
                (new Filter('active', TextType::class))
                    ->setTypeOptions([
                        'required' => false,
                        'attr' => [
                            'placeholder' => $this->trans('Active', [], 'Modules.Mymodule'),
                        ],
                    ])
                    ->setAssociatedColumn('active')
            )
            ->add(
                (new Filter('actions', SearchAndResetType::class))
                    ->setTypeOptions([
                        'reset_route' => 'admin_common_reset_search_by_filter_id',
                        'reset_route_params' => [
                            'filterId' => self::GRID_ID,
                        ],
                        'redirect_route' => 'my_module_index',
                    ])
                    ->setAssociatedColumn('actions')
            )
        ;
    }
}
