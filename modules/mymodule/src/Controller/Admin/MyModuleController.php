<?php

declare(strict_types=1);

namespace PrestaShop\Module\MyModule\Controller\Admin;


use PrestaShop\Module\MyModule\Grid\Definition\Factory\ProductGridDefinitionFactory;
use PrestaShop\Module\MyModule\Grid\Filters\ProductFilters;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Request;

class MyModuleController extends FrameworkBundleAdminController
{


    public function indexAction(ProductFilters $filters)
    {
        $quoteGridFactory = $this->get('mymodule.grid.factory.products');
        $quoteGrid = $quoteGridFactory->getGrid($filters);


        return $this->render(
            '@Modules/mymodule/views/templates/admin/index.html.twig',
            [
                'enableSidebar' => true,
                'layoutTitle' => $this->trans('My Home Module with data grid products', 'Modules.Mymodule'),
                'quoteGrid' => $quoteGrid,
            ]
        );
    }

    public function searchAction(Request $request)
    {
        $responseBuilder = $this->get('prestashop.bundle.grid.response_builder');

        return $responseBuilder->buildSearchResponse(
            $this->get('mymodule.grid.definition.factory.products'),
            $request,
            ProductGridDefinitionFactory::GRID_ID,
            'my_module_index'
        );
    }
}
