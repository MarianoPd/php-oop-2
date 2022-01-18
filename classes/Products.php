<?php

class Product{
    private $name;
    private $description;
    private $price;

    function __construct($_name, $_price = 0.99)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    public function setDescription($_descr){
        $this->description = $_descr;
    }
    public function setPrice($_price){
        $this->price = $_price;
    }

    public function getName(){ return $this->name;}
    public function getDescription(){ return $this->description;}
    public function getPrice(){ return $this->price;}
}

?>