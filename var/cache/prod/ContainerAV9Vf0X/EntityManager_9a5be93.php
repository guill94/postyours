<?php

namespace ContainerAV9Vf0X;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8933b = null;
    private $initializeraa6c6 = null;
    private static $publicPropertiesd8f48 = [
        
    ];
    public function getConnection()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getConnection', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getMetadataFactory', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getExpressionBuilder', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'beginTransaction', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getCache', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getCache();
    }
    public function transactional($func)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'transactional', array('func' => $func), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'commit', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->commit();
    }
    public function rollback()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'rollback', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getClassMetadata', array('className' => $className), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'createQuery', array('dql' => $dql), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'createNamedQuery', array('name' => $name), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'createQueryBuilder', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'flush', array('entity' => $entity), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'clear', array('entityName' => $entityName), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->clear($entityName);
    }
    public function close()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'close', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->close();
    }
    public function persist($entity)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'persist', array('entity' => $entity), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'remove', array('entity' => $entity), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'refresh', array('entity' => $entity), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'detach', array('entity' => $entity), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'merge', array('entity' => $entity), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'contains', array('entity' => $entity), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getEventManager', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getConfiguration', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'isOpen', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getUnitOfWork', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getProxyFactory', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'initializeObject', array('obj' => $obj), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'getFilters', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'isFiltersStateClean', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'hasFilters', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return $this->valueHolder8933b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializeraa6c6 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8933b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8933b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8933b->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, '__get', ['name' => $name], $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        if (isset(self::$publicPropertiesd8f48[$name])) {
            return $this->valueHolder8933b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8933b;
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
        $targetObject = $this->valueHolder8933b;
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
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8933b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8933b;
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
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, '__isset', array('name' => $name), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8933b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8933b;
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
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, '__unset', array('name' => $name), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8933b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8933b;
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
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, '__clone', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        $this->valueHolder8933b = clone $this->valueHolder8933b;
    }
    public function __sleep()
    {
        $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, '__sleep', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
        return array('valueHolder8933b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraa6c6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraa6c6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializeraa6c6 && ($this->initializeraa6c6->__invoke($valueHolder8933b, $this, 'initializeProxy', array(), $this->initializeraa6c6) || 1) && $this->valueHolder8933b = $valueHolder8933b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8933b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8933b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
