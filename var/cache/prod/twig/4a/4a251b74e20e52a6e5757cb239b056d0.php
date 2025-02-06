<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__52730f04e74b790aeedd55b44b1851a1 */
class __TwigTemplate_6bd93f5c27fe793ae0c3716b8084e337 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Gestionnaire de modules • test_prestashop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'e2c8d4c2468b5e0dbc3d44156967381d';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '342d5eea0df934fd95e41592a7fb5b9a';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin072diftbpptadtgmjez/index.php/improve/modules/manage?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM';
    var admin_notification_get_link = '/admin072diftbpptadtgmjez/index.php/common/notifications?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM';
    var admin_notification_push_link = adminNotificationPushLink = '/admin072diftbpptadtgmjez/index.php/common/notifications/ack?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM';
    var";
        // line 41
        echo " tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/admin072diftbpptadtgmjez/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin072diftbpptadtgmjez/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin072diftbpptadtgmjez/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.c13a0d59.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin072diftbpptadtgmjez/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin072diftbpptadtgmjez\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/";
        // line 72
        echo "admin072diftbpptadtgmjez\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/admin072diftbpptadtgmjez/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin072diftbpptadtgmjez/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/admin072diftbpptadtgmjez/themes/new-theme/public/create_product.bundle.js\"></script>
<script t";
        // line 90
        echo "ype=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin072diftbpptadtgmjez/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/connection-toolbar.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php?controller=AdminGamification&token=b1fd43d2bce40e617fd205d71d77fb77\";
            var current_id_tab = 40;
        </script><script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin072diftbpptadtgmjez/index.php/common/notifications?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = '";
        // line 121
        echo "fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script>

";
        // line 126
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/admin072diftbpptadtgmjez/index.php\"  data-token=\"HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin072diftbpptadtgmjez/index.php/modules/pseditionbasic/homepage?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php/sell/orders?token=864ce83e28290d8683c7b8af13895b32\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0e48d5bd147dd9e2c2d6361aebc67b91\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php/improve/modules/manage?token=864ce83e28290d8683c7b8af13895b32\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2af2574d9bade61a579976ccfa480f16\"
         ";
        // line 161
        echo "        data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php/sell/catalog/products-v2/create?token=864ce83e28290d8683c7b8af13895b32\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php/sell/catalog/categories/new?token=864ce83e28290d8683c7b8af13895b32\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"126\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminQuickAccesses&token=2eade280220a3cc343b61caebcdf1af7\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminQuickAccesses&token=2eade280220a3cc343b61caebcdf1af7\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin072diftbpptadtgmjez/index.php?controller=A";
        // line 200
        echo "dminSearch&amp;token=4946c2ace2b9a62a013981a57228a933\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" dat";
        // line 217
        echo "a-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php/sell/orders?token=864ce83e28290d8683c7b8af13895b32\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0e48d5bd147dd9e2c2d6361aebc67b91\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php/improve/modules/manage?token=864ce83e28290d8683c7b8af13895b32\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2af2574d9bade61a579976ccfa480f16\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item ";
        // line 253
        echo "quick-row-link\"
       href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php/sell/catalog/products-v2/create?token=864ce83e28290d8683c7b8af13895b32\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php/sell/catalog/categories/new?token=864ce83e28290d8683c7b8af13895b32\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"172\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminQuickAccesses&token=2eade280220a3cc343b61caebcdf1af7\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Modules - Liste\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Supprimer de l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminQuickAccesses&token=2eade280220a3cc343b61caebcdf1af7\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class";
        // line 297
        echo "=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/admin072diftbpptadtgmjez/index.php/configure/shop/maintenance/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://test_prestashop.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id";
        // line 337
        echo "=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=944bb636ac9cedb6a55ef0b7ed4a72d6\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
 ";
        // line 386
        echo "           <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://test_prestashop.com/img/pr/default.jpg\" alt=\"Corentin\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Corentin</span>
      </div>

      <a class=\"dropdown";
        // line 436
        echo "-item employee-link profile-link\" href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/employees/1/edit?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=test_prestashop.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin072diftbpptadtgmjez/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-fr&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=dow";
        // line 456
        echo "nload8_1&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminLogin&amp;logout=1&amp;token=0172b1cc4bb3ef795914b0ca30d46137\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/employees/toggle-navigation?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin072diftbpptadtgmjez/index.php/modules/pseditionbasic/homepage?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"140\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/modules/pseditionbasic/homepage?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAv";
        // line 498
        echo "k2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminDashboard&amp;token=3c61ac455879d63adcc272809ae899f6\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin072dift";
        // line 538
        echo "bpptadtgmjez/index.php/sell/orders/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/orders/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/orders/invoices/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin";
        // line 568
        echo "072diftbpptadtgmjez/index.php/sell/orders/credit-slips/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/orders/delivery-slips/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminCarts&amp;token=944bb636ac9cedb6a55ef0b7ed4a72d6\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/sell/catalog/products?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                     ";
        // line 600
        echo "               <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/catalog/products?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/catalog/categories?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/catalog/monitoring/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
         ";
        // line 630
        echo "                     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminAttributesGroups&amp;token=8615605c58a18ea1aec00d071722a86a\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/catalog/brands/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/attachments/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminCartRules&amp;token=2af2";
        // line 657
        echo "574d9bade61a579976ccfa480f16\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/stocks/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/sell/customers/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
         ";
        // line 690
        echo "                       <a href=\"/admin072diftbpptadtgmjez/index.php/sell/customers/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/addresses/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminCustomerThreads&amp;token=15aa441be0dc2f62671e0b4bcdf1d7fe\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                             ";
        // line 720
        echo " 
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminCustomerThreads&amp;token=15aa441be0dc2f62671e0b4bcdf1d7fe\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/sell/customer-service/order-messages/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminReturn&amp;token=bf52cd28835cecb66a7c336c347d7838\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/modules/metrics/l";
        // line 750
        echo "egacy/stats?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/modules/metrics/legacy/stats?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/modules/metrics?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li clas";
        // line 784
        echo "s=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/modules/mbo/modules/catalog/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/modules/mbo/modules/catalog/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"lin";
        // line 814
        echo "k-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/modules/manage?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=fe8efb82cd956df4df7f80ab6aa30295\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=fe8efb82cd956df4";
        // line 840
        echo "df7f80ab6aa30295\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/modules/mbo/themes/catalog/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"131\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/modules/improve/design/themes?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/design/mail_theme/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" d";
        // line 871
        echo "ata-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/design/cms-pages/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/design/modules/positions/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminImages&amp;token=d56baa0a6f640d6e6017819ce7d37cb2\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/modules/link-widget/list?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
";
        // line 901
        echo "                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminCarriers&amp;token=76c89ed3c42014790daac146e57821a8\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminCarriers&amp;token=76c89ed3c42014790daac146e57821a8\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/shipping/preferences/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" cla";
        // line 929
        echo "ss=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/improve/payment/payment_methods?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/payment/payment_methods?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
     ";
        // line 962
        echo "                           <a href=\"/admin072diftbpptadtgmjez/index.php/improve/payment/preferences?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/improve/international/localization/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/international/localization/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
  ";
        // line 993
        echo "                                                          
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/international/zones/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/international/taxes/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/improve/international/translations/settings?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"137\" id=\"subtab-Marketing\">
                    <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminPsface";
        // line 1022
        echo "bookModule&amp;token=36e23ffb1328b0bd8c9a81968fb2819c\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-137\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"138\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminPsfacebookModule&amp;token=36e23ffb1328b0bd8c9a81968fb2819c\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=7e604354c91271f16a7cbefc9c0c2ede\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                 ";
        // line 1052
        echo "     
                  
                  <li class=\"link-levelone\" data-submenu=\"188\" id=\"subtab-MyModuleController\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/modules/mymodule/home?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Mon Module
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"142\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/modules/pseditionbasic/settings?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                   ";
        // line 1090
        echo "                           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/configure/shop/preferences/preferences?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/shop/preferences/preferences?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/shop/order-preferences/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Commandes
                  ";
        // line 1118
        echo "              </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/shop/product-preferences/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/shop/customer-preferences/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/shop/contacts/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href";
        // line 1149
        echo "=\"/admin072diftbpptadtgmjez/index.php/configure/shop/seo-urls/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminSearchConf&amp;token=e5887c29815783c742dbfcc21c72350b\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/system-information/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                       ";
        // line 1179
        echo "       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/system-information/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/performance/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/administration/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/emails/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> E-mail
               ";
        // line 1207
        echo "                 </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/import/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/employees/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/sql-requests/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin072d";
        // line 1238
        echo "iftbpptadtgmjez/index.php/configure/advanced/logs/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/webservice-keys/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/feature-flags/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin072diftbpptadtgmjez/index.php/configure/advanced/security/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"link\"> Security
                                </a>
                     ";
        // line 1264
        echo "         </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"129\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminKlaviyoPsConfig&amp;token=ea6d077653f8dae1da25f31e934aeb1a\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"163\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"https://test_prestashop.com/admin072diftbpptadtgmjez/index.php?controller=AdminPsAssistantSettings&amp;token=4bb7991cf659d15cc3a194db2d4393ce\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                     ";
        // line 1297
        echo "                   </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin072diftbpptadtgmjez/index.php/improve/modules/manage?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin072diftbpptadtgmjez/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Dfr/Aide?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                           ";
        // line 1349
        echo "         </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/improve/modules/manage?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/improve/modules/alerts?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                               ";
        // line 1375
        echo " <li class=\"nav-item\">
                    <a href=\"/admin072diftbpptadtgmjez/index.php/improve/modules/updates?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
     ";
        // line 1393
        echo "                         <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin072diftbpptadtgmjez/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Dfr/Aide?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        <script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"fr\",\"iso_code\":\"fr\",\"shop_version\":\"8.1.7\",\"shop_url\":\"https:\\/\\/test_prestashop.com\",\"shop_uuid\":\"be643eb2-ecfc-4ae5-bf95-9436dbd08e82\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHBzOi8vdGVzdF9wcmVzdGFzaG9wLmNvbSIsInNob3BfdXVpZCI6ImJlNjQzZWIyLWVjZmMtNGFlNS1iZjk1LTk0MzZkYmQwOGU4MiJ9.onUH6uqJsheRyEUfurDaoHUmoh7Z3uIqcia9vcI6HJw\",\"mbo_version\":\"4.12.0\",\"mbo_reset_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\",\"user_id\":\"1\",\"admin_token\":\"HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\",\"refresh_url\":\"https:\\/\\/test_prestashop.com\\/admin072d";
        // line 1422
        echo "iftbpptadtgmjez\\/index.php?controller=apiSecurityPsMbo&token=907c32966430f09cb43de3d7d0798a85\",\"installed_modules\":[{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_googleanalytics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_googleanalytics?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_categoryproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.7\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categoryproducts?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.8.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"https:\\/\\/test_prestas";
        echo "hop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_supplierlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_supplierlist?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"klaviyopsautomation\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.8.1\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/klaviyopsautomation?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"gamification\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.1\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.1\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statsbestmanufacturers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.4\",\"conf";
        echo "ig_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"psxdesign\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.7\",\"config_url\":null},{\"id\":0,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_featuredproducts";
        echo "\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.16.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.38.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_brandlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.3\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_brandlist?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"demo_grid\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/demo_grid?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_edition_basic\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.17\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_edition_basic?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.74.10\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobi";
        echo "le_enabled\",\"version\":\"2.0.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"8.4.2.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_viewedproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_viewedproduct?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.12.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_distributionapiclient\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"psassistant\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.1\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psassistant?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enab";
        echo "led\",\"version\":\"7.0.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.4\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_bestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_bestsellers?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"psshipping\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psshipping?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"mymodule\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/mymodule?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.8\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_specials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"http";
        echo "s:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_specials?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkpayment?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.7\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_t";
        echo "oken=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailalerts?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.9\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/config";
        echo "ure\\/ps_sharebuttons?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"enabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"ps_newproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_newproducts?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"},{\"id\":0,\"name\":\"autoupgrade\",\"status\":\"uninstalled\",\"version\":\"6.3.0\",\"config_url\":null}],\"upgradable_modules\":[\"ps_themecusto\",\"statsdata\",\"blockwishlist\",\"ps_imageslider\",\"ps_facetedsearch\",\"contactform\",\"ps_contactinfo\",\"ps_categorytree\",\"ps_emailalerts\"],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_manager_updates_tab_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/improve\\/modules\\/updates?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\",\"module_catalog_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/modules\\/mbo\\/modules\\/catalog\\/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\",\"theme_catalog_url\":\"https:\\/\\/test_prestashop.com\\/admin072diftbpptadtgmjez\\/index.php\\/modules\\/mbo\\/themes\\/catalog\\/?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\",\"php_version\":\"8.3.6\",\"shop_creation_date\":\"2025-02-03\",\"shop_business_sector_id\":7,\"shop_business_sector\":\"Computer Hardware and Software\",\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"/admin072diftbpptadtgmjez/index.php/modules/mbo/modules/catalog/cdc_error?";
        // line 1427
        echo "_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\"></div>


                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1435
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/admin072diftbpptadtgmjez/index.php/modules/pseditionbasic/homepage?_token=HXEgzusJ6X_UgHVNnIpL2l0haiAvk2gVQK3_lupE_RM\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1469
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 126
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1435
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1469
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__52730f04e74b790aeedd55b44b1851a1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1666 => 1469,  1645 => 1435,  1634 => 126,  1625 => 1469,  1585 => 1435,  1575 => 1427,  1560 => 1422,  1529 => 1393,  1509 => 1375,  1481 => 1349,  1427 => 1297,  1392 => 1264,  1364 => 1238,  1331 => 1207,  1301 => 1179,  1269 => 1149,  1236 => 1118,  1206 => 1090,  1166 => 1052,  1134 => 1022,  1103 => 993,  1070 => 962,  1035 => 929,  1005 => 901,  973 => 871,  940 => 840,  912 => 814,  880 => 784,  844 => 750,  812 => 720,  780 => 690,  745 => 657,  716 => 630,  684 => 600,  650 => 568,  618 => 538,  576 => 498,  532 => 456,  510 => 436,  458 => 386,  407 => 337,  365 => 297,  319 => 253,  281 => 217,  262 => 200,  221 => 161,  181 => 126,  174 => 121,  141 => 90,  121 => 72,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__52730f04e74b790aeedd55b44b1851a1", "");
    }
}
