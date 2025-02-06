<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder89d36 = null;
    private $initializer10e47 = null;
    private static $publicPropertiesb3fb8 = [
        
    ];
    public function getConnection()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getConnection', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getMetadataFactory', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getExpressionBuilder', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'beginTransaction', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getCache', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getCache();
    }
    public function transactional($func)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'transactional', array('func' => $func), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'wrapInTransaction', array('func' => $func), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'commit', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->commit();
    }
    public function rollback()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'rollback', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getClassMetadata', array('className' => $className), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'createQuery', array('dql' => $dql), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'createNamedQuery', array('name' => $name), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'createQueryBuilder', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'flush', array('entity' => $entity), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'clear', array('entityName' => $entityName), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->clear($entityName);
    }
    public function close()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'close', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->close();
    }
    public function persist($entity)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'persist', array('entity' => $entity), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'remove', array('entity' => $entity), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'refresh', array('entity' => $entity), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'detach', array('entity' => $entity), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'merge', array('entity' => $entity), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getRepository', array('entityName' => $entityName), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'contains', array('entity' => $entity), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getEventManager', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getConfiguration', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'isOpen', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getUnitOfWork', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getProxyFactory', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'initializeObject', array('obj' => $obj), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'getFilters', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'isFiltersStateClean', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, 'hasFilters', array(), $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        return $this->valueHolder89d36->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer10e47 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder89d36) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder89d36 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder89d36->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer10e47 && ($this->initializer10e47->__invoke($valueHolder89d36, $this, '__get', ['name' => $name], $this->initializer10e47) || 1) && $this->valueHolder89d36 = $valueHolder89d36;
        if (isset(self::$publicPropertiesb3fb8[$name])) {
            return $this->valueHolder89d36->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
