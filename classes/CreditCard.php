<?php
    
class CreditCard{
    private $owner_name;
    private $owner_surname;
    private $number;
    private $expire_date;

    function __construct($_on, $_os, $_nu, $_ed)
    {
        if($_ed < date('m - y')) return false;
        $this->owner_name = $_on;
        $this->owner_surname = $_os;
        $this->number = $_nu;
        $this->expire_date = $_ed;
        return true;
    }

    public function getOwnerName(){ return $this->owner_name;}
    public function getOwnerSurame(){ return $this->owner_surname;}
    public function getExpireDate(){ return $this->expire_date;}
    public function getLastDigits(){
        return substr(strval($this->number),12,4);
    }
}

?>