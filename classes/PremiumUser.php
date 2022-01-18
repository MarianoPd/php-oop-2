<?php

require_once __DIR__ . "/User.php";

class PremiumUser extends User{
    private $discount;

    function __construct($_name, $_surname, $_email, $_disc = 20)
    {
        parent::__construct($_name, $_surname, $_email);
        $this->discount = $_disc;
    }

    public function getDiscount(){ return $this->discount; }
}

?>