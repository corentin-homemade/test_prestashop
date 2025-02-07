<?php

namespace PrestaShop\Module\MyModule\Form;

use PrestaShopBundle\Form\Admin\Type\TranslatorAwareType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;


class MyModuleConfigurationFormType extends TranslatorAwareType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add('config_text', TextType::class, [
                'label' => $this->trans('Configuration text', 'Modules.Mymodule.Admin'),
                'help' => $this->trans('Maximum 32 characters', 'Modules.Mymodule.Admin'),
            ])

            ->add('show_in_menu', CheckboxType::class, [
                'label' => $this->trans('Show in Back Office menu', 'Modules.Mymodule.Admin'),
                'required' => false,
                'help' => $this->trans('Enable this option to add the module to the Back Office menu.', 'Modules.Mymodule.Admin'),
            ])

            ->add('language', ChoiceType::class, [
                'label' => $this->trans('Select Language', 'Modules.Mymodule.Admin'),
                'choices' => [
                    $this->trans('French', 'Modules.Mymodule.Admin') => 'fr',
                    $this->trans('English' , 'Modules.Mymodule.Admin') => 'en',
                ],
                'expanded' => true,
                'multiple' => false,
            ])

            ->add('theme', ChoiceType::class, [
                'label' => $this->trans('Select Theme', 'Modules.Mymodule.Admin'),
                'choices' => [
                    $this->trans('Dark Mode', 'Modules.Mymodule.Admin') => 'dark',
                    $this->trans('Light Mode' , 'Modules.Mymodule.Admin')=> 'light',
                ],
                'expanded' => true,
                'multiple' => false,
            ]);
    }
}
