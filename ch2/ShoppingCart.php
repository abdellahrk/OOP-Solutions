<?php

class ShoppingCart
{
    public function addItem(Product $item)
    {
        echo '<p>' . $item->getTitle() . ' added</p>';
    }
}