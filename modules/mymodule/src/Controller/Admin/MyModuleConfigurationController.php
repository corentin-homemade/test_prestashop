<?php

namespace PrestaShop\Module\MyModule\Controller\Admin;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Request;

use Language;

class MyModuleConfigurationController extends FrameworkBundleAdminController
{


    public function indexActionForm(Request $request)
    {
        $formHandler = $this->get('prestashop.module.mymodule.form.handler');
        $form = $formHandler->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $errors = $formHandler->save($form->getData());
            $module = \Module::getInstanceByName('mymodule');
            if ($module) {
                $module->updateTabVisibility();
            }



            $language = $form->getData()['language'];
            $languageId = Language::getIdByIso($language);
            $context = $this->getContext();
            $context->language = new Language($languageId);




            if (empty($errors)) {
                $this->addFlash('success', $this->trans('Edit successful.', 'Modules.Mymodule.Admin'));
                return $this->redirectToRoute('my_module_index' ,['lang' => $language]);
            }
            $this->flashErrors($errors);
        }

        return $this->render('@Modules/mymodule/views/templates/admin/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }



}
