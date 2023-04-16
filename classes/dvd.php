<?php
include('product.php');

class Disc extends Product
{
    private $size;

    public function __construct($sku, $name, $price, $size)
    {
        parent::__construct($sku, $name, $price);
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}