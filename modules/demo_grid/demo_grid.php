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

if (!defined('_PS_VERSION_')) {
    exit;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

class Demo_Grid extends Module
{
    public function __construct()
    {
        $this->name = 'demo_grid';
        $this->tab = 'front_office_features';
        $this->author = 'PrestaShop';
        $this->version = '1.0.0';
        $this->ps_versions_compliancy = ['min' => '1.7.7', 'max' => _PS_VERSION_];
        $this->bootstrap = true;


        parent::__construct();

        $this->displayName = $this->l('Demo grid');
        $this->description = $this->l('Demonstration of Grid in PrestaShop');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Modules.Demo_grid.Admin');
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }


        $tab = new Tab();
        $tab->class_name = 'IndexController';
        $tab->id_parent = (int) Tab::getIdFromClassName('IMPROVE');
        $tab->module = $this->name;
        $tab->route_name = 'demo_grid_index';
        $tab->active = true;
        $languages = Language::getLanguages();
        $tab->name = [];
        foreach ($languages as $lang) {
            $tab->name[$lang['id_lang']] = $this->trans('Demo Grid', [], 'Modules.Demo_grid.Admin');
        }


        return (
            $tab->add()
            && parent::install()

        );
    }


    public function uninstall()
    {

        $id_tab = (int) Tab::getIdFromClassName('IndexController');
        $tab = new Tab($id_tab);

        return (
            $tab->delete()
            && parent::uninstall()

        );
    }



    public function getContent()
    {
        $route = $this->get('router')->generate('demo_grid_index');
        Tools::redirectAdmin($route);
    }




}
