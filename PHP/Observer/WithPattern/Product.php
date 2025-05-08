<?php
namespace PHP\Observer\WithPattern;
class Product{
    private $name = "";
    private $price = 0;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
}