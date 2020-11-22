<?php
require_once 'Product.php';

class DVD extends Product
{
    protected $_duration;

    public function __construct($title, $duration)
    {
        parent::__construct();
        $this->_title = $title;
        $this->_duration = $duration;
        $this->_type = 'DVD';
    }

    public function getDuration()
    {
        return $this->_duration;
    }

    public function display()
    {
        echo "<p>The $this->_type  $this->_title has a duration of ($this->_duration) mins</p>";
    }
}