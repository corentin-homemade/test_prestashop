<?php


namespace PrestaShop\Module\MyModule\Controller\Admin;


use Module\MyModule\Grid\Definition\Factory\ProductGridDefinitionFactory;
use Module\MyModule\Grid\Filters\ProductFilters;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use PrestaShopBundle\Service\Grid\ResponseBuilder;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MyModuleController extends FrameworkBundleAdminController
{


    public function index(ProductFilters $filters)
    {
        $quoteGridFactory = $this->get('prestashop.modules.mymodule.grid.factory.products');
        $quoteGrid = $quoteGridFactory->getGrid($filters);

        return $this->render(
            '@Modules/mymodule/views/templates/admin/index.html.twig',
            [
                'enableSidebar' => true,
                'layoutTitle' => $this->trans('My Home Module with data grid products', 'Modules.Mymodule'),
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
