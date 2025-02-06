<?php

declare(strict_types=1);

namespace PrestaShop\Module\MyModule\Controller\Admin;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Response;

class MyModuleController extends FrameworkBundleAdminController
{
    public function index(): Response
    {
        return $this->render('@Modules/mymodule/views/templates/admin/index.html.twig', [
            'layoutTitle' => $this->trans('My Home Module', 'Modules.Mymodule'),
        ]);
    }

    public function productListAction()
    {
        $products = \Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'product');

        return $this->render('@Modules/mymodule/views/templates/admin/product_list.html.twig', [
            'products' => $products,
        ]);
    }
}
