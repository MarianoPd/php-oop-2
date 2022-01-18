<?php

class Cart{
    private $user;
    private $products;

    function __construct($_user, $_products)
    {
        $this->user = $_user;
        $this->products = $_products;
    }

    public function getUser() { return $this->user;}
    public function getProducts() { return $this->products;}
    public function getTotal(){
        $_tot = 0;
        foreach($this->products as $product){
            $_tot += $product->getPrice();            
        }

        return number_format(($_tot / 100) * (100 - $this->user->getDiscount()),2);
    }

}

?>