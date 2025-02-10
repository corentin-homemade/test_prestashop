<?php

declare(strict_types=1);

namespace PrestaShop\Module\MyModule\Controller\Admin;


use PrestaShop\Module\MyModule\Grid\Definition\Factory\ProductGridDefinitionFactory;
use PrestaShop\Module\MyModule\Grid\Filters\ProductFilters;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use PrestaShopBundle\Service\Grid\ResponseBuilder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MyModuleController extends FrameworkBundleAdminController
{

    /**
     * List quotes
     *
     * @param ProductFilters $filters
     *
     * @return Response
     */

    public function indexAction(ProductFilters $filters)
    {
        $quoteGridFactory = $this->get('mymodule.grid.factory.products');
        $quoteGrid = $quoteGridFactory->getGrid($filters);


        return $this->render(
            '@Modules/mymodule/views/templates/admin/index.html.twig',
            [
                'enableSidebar' => true,
                'layoutTitle' => $this->trans('The welcome to my module with the table of product orders', 'Modules.Mymodule'),
                'quoteGrid' => $this->presentGrid($quoteGrid),
            ]
        );
    }


    /**
     * Provides filters functionality.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */

    public function searchAction(Request $request)
    {
        /** @var ResponseBuilder $responseBuilder */
        $responseBuilder = $this->get('prestashop.bundle.grid.response_builder');

        return $responseBuilder->buildSearchResponse(
            $this->get('mymodule.grid.definition.factory.products'),
            $request,
            ProductGridDefinitionFactory::GRID_ID,
            'my_module_index'
        );
    }
}
