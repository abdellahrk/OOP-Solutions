<?php
require_once 'Manufacturer.php';

abstract class Product{

    protected $_type;
    protected $_title;
    protected $_manufacturer;
    /*
    protected static $_1bToKg = 0.45359537;

    public function __construct($type, $title)
    {
        $this->_type = $type;
        $this->_title = $title;
    }
    */

    public function __construct()
    {
        $this->_manufacturer = new Manufacturer();
    }

    public function getProductType()
    {
        return $this->_type;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public  function getTitle()
    {
        return $this->_title;
    }

    abstract public function display();

    /*
    public function setManufacturerName($name)
    {
        $this->_manufacturer->setManufacturerName($name);
    }

    public function getManufacturerName()
    {
        return $this->_manufacturer->getManufacturerName();
    }
    */

    public function __call($method, $arguments)
    {
        // check that the other object has the specified method
        if(method_exists($this->_manufacturer, $method)){
            // invoke the method and return any result
            return call_user_func_array(array($this->_manufacturer, $method), $arguments);
        }
    }

    public function __clone()
    {
        $this->_manufacturer = clone $this->_manufacturer;
    }

}