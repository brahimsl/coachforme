<?php

namespace ContainerXCAKKDF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9a8bb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer32370 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties37588 = [
        
    ];

    public function getConnection()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getConnection', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getMetadataFactory', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getExpressionBuilder', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'beginTransaction', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getCache', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'transactional', array('func' => $func), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->transactional($func);
    }

    public function commit()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'commit', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->commit();
    }

    public function rollback()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'rollback', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getClassMetadata', array('className' => $className), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'createQuery', array('dql' => $dql), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'createNamedQuery', array('name' => $name), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'createQueryBuilder', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'flush', array('entity' => $entity), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'clear', array('entityName' => $entityName), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->clear($entityName);
    }

    public function close()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'close', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->close();
    }

    public function persist($entity)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'persist', array('entity' => $entity), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'remove', array('entity' => $entity), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'refresh', array('entity' => $entity), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'detach', array('entity' => $entity), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'merge', array('entity' => $entity), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'contains', array('entity' => $entity), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getEventManager', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getConfiguration', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'isOpen', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getUnitOfWork', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getProxyFactory', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'initializeObject', array('obj' => $obj), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'getFilters', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'isFiltersStateClean', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'hasFilters', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return $this->valueHolder9a8bb->hasFilters();
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

        $instance->initializer32370 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9a8bb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9a8bb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9a8bb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, '__get', ['name' => $name], $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        if (isset(self::$publicProperties37588[$name])) {
            return $this->valueHolder9a8bb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a8bb;

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

        $targetObject = $this->valueHolder9a8bb;
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
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a8bb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9a8bb;
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
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, '__isset', array('name' => $name), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a8bb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9a8bb;
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
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, '__unset', array('name' => $name), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a8bb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9a8bb;
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
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, '__clone', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        $this->valueHolder9a8bb = clone $this->valueHolder9a8bb;
    }

    public function __sleep()
    {
        $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, '__sleep', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;

        return array('valueHolder9a8bb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer32370 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer32370;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer32370 && ($this->initializer32370->__invoke($valueHolder9a8bb, $this, 'initializeProxy', array(), $this->initializer32370) || 1) && $this->valueHolder9a8bb = $valueHolder9a8bb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9a8bb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9a8bb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
