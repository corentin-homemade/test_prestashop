<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder89d36 = null;
    private $initializer10e47 = null;
    private static $publicPropertiesb3fb8 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getList', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getInstalledModules', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getMustBeConfiguredModules', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getUpgradableModules', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'setActionUrls', array('collection' => $collection), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer10e47 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder89d36) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder89d36 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder89d36->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, '__get', ['name' => $name], $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        if (isset(self::$publicPropertiesb3fb8[$name])) {
            return $this->valueHolder89d36->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89d36;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder89d36;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89d36;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder89d36;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, '__isset', array('name' => $name), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89d36;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder89d36;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, '__unset', array('name' => $name), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89d36;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder89d36;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, '__clone', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        $this->valueHolder89d36 = clone $this->valueHolder89d36;
    }
    public function __sleep()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, '__sleep', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return array('valueHolder89d36');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer10e47 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer10e47;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'initializeProxy', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder89d36;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder89d36;
    }
}
