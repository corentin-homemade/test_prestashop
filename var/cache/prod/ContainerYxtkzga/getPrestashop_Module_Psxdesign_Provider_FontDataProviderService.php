<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.psxdesign.provider.font_data_provider' shared service.

return $this->services['prestashop.module.psxdesign.provider.font_data_provider'] = new \PrestaShop\Module\PsxDesign\Provider\FontDataProvider(($this->services['psxdesign.guzzle.client'] ?? ($this->services['psxdesign.guzzle.client'] = new \GuzzleHttp\Client())), ($this->services['psxdesign.module'] ?? $this->load('getPsxdesign_ModuleService.php'))->getLocalPath());
