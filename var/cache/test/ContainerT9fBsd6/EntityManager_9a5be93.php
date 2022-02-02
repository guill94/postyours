<?php

namespace ContainerT9fBsd6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder99aac = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerded04 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesab7c1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getConnection', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getMetadataFactory', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getExpressionBuilder', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'beginTransaction', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getCache', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getCache();
    }

    public function transactional($func)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'transactional', array('func' => $func), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'wrapInTransaction', array('func' => $func), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'commit', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->commit();
    }

    public function rollback()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'rollback', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getClassMetadata', array('className' => $className), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'createQuery', array('dql' => $dql), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'createNamedQuery', array('name' => $name), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'createQueryBuilder', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'flush', array('entity' => $entity), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'clear', array('entityName' => $entityName), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->clear($entityName);
    }

    public function close()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'close', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->close();
    }

    public function persist($entity)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'persist', array('entity' => $entity), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'remove', array('entity' => $entity), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'refresh', array('entity' => $entity), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'detach', array('entity' => $entity), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'merge', array('entity' => $entity), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getRepository', array('entityName' => $entityName), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'contains', array('entity' => $entity), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getEventManager', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getConfiguration', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'isOpen', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getUnitOfWork', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getProxyFactory', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'initializeObject', array('obj' => $obj), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'getFilters', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'isFiltersStateClean', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'hasFilters', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return $this->valueHolder99aac->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerded04 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder99aac) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder99aac = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder99aac->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, '__get', ['name' => $name], $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        if (isset(self::$publicPropertiesab7c1[$name])) {
            return $this->valueHolder99aac->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99aac;

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

        $targetObject = $this->valueHolder99aac;
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
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99aac;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder99aac;
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
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, '__isset', array('name' => $name), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99aac;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder99aac;
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
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, '__unset', array('name' => $name), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99aac;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder99aac;
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
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, '__clone', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        $this->valueHolder99aac = clone $this->valueHolder99aac;
    }

    public function __sleep()
    {
        $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, '__sleep', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;

        return array('valueHolder99aac');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerded04 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerded04;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerded04 && ($this->initializerded04->__invoke($valueHolder99aac, $this, 'initializeProxy', array(), $this->initializerded04) || 1) && $this->valueHolder99aac = $valueHolder99aac;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99aac;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99aac;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
