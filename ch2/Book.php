<?php
require_once 'Product.php';

final class Book extends Product
{
    private $_pageCount;

    public function __construct($title, $pageCount)
    {
        if(!is_numeric($pageCount) || $pageCount < 1)
        {
            throw new Exception('Page count must be a positive number');
        }
        parent::__construct();
        $this->_title = $title;
        $this->_pageCount = (int) $pageCount;
        $this->_type = 'book';
    }

    public function getPageCount()
    {
        return $this->_pageCount;
    }

    public function display()
    {
        echo "<p> The $this->_type  $this->_title has ($this->_pageCount)  pages</p> <br>";
        echo 'Manufactured by ' . $this->getManufacturerName();
    }

    public function __toString()
    {
        return $this->_title;
    }

}