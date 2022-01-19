<?php

trait Address{
    public $street;
    public $town;
    public $country;
    public $zip;

    public function setAddress($_street, $_town, $_country, $_zip){
        $this->street = $_street;
        $this->town = $_town;
        $this->country = $_country;
        $this->zip = $_zip;
    } 

    public function getFullAddress(){
        return "$this->street, $this->town, $this->country, $this->zip";
    }
}

?>