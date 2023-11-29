<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MenuItem extends \OrangeHRM\Entity\MenuItem implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'menuTitle', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'parent', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'level', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'orderHint', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'status', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'screen', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'additionalParams'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'menuTitle', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'parent', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'level', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'orderHint', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'status', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'screen', '' . "\0" . 'OrangeHRM\\Entity\\MenuItem' . "\0" . 'additionalParams'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MenuItem $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId(int $id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuTitle(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuTitle', []);

        return parent::getMenuTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuTitle(string $menuTitle): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuTitle', [$menuTitle]);

        parent::setMenuTitle($menuTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent(): ?\OrangeHRM\Entity\MenuItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(?\OrangeHRM\Entity\MenuItem $parent): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getLevel(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevel', []);

        return parent::getLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLevel(int $level): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLevel', [$level]);

        parent::setLevel($level);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderHint(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderHint', []);

        return parent::getOrderHint();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderHint(int $orderHint): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderHint', [$orderHint]);

        parent::setOrderHint($orderHint);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(bool $status): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getScreen(): ?\OrangeHRM\Entity\Screen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScreen', []);

        return parent::getScreen();
    }

    /**
     * {@inheritDoc}
     */
    public function setScreen(?\OrangeHRM\Entity\Screen $screen): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScreen', [$screen]);

        parent::setScreen($screen);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdditionalParams(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdditionalParams', []);

        return parent::getAdditionalParams();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdditionalParams(?array $additionalParams): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdditionalParams', [$additionalParams]);

        parent::setAdditionalParams($additionalParams);
    }

}