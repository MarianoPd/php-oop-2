<?php

require_once __DIR__ . "/CreditCard.php";
require_once __DIR__ ."/Address.php";

class User{
    use Address;

    protected $name;
    protected $surname;
    protected $birthday;
    protected $email;
    protected $credit_card = [];

    function __construct($_name,$_surname,$_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    public function setBirthday($_birth){
        $this->birthday = $_birth;
    }

    //chiamo il costruttore di credit card e inserisco in automatico i dati dell'utente. Normalmente non funziona così ma mi andava di farlo.
    public function insetCreditCard($_num, $_ed){
        try{
            $this->credit_card[] = new CreditCard($this->name, $this->surname, $_num, $_ed);
        }catch(Exception $e){
            echo $e->getMessage();
        }        
    }

    public function getName() { return $this->name; }
    public function getSurname() { return $this->surname; }
    public function getBirthday() { return $this->birthday; }
    public function getEmail() { return $this->email; }

    //ritorna il risultato di getLastDigits così che il numero di cc sia conservato in CreditCard   e mostri solo le ultime 4 cifre
    public function getCreditCard($num=0) {
        if(sizeof($this->credit_card) == 0){
            return false;
        } 
        $return = $this->credit_card[$num]->getLastDigits();
        if($this->credit_card[$num]->getExpireDate() < date("y-m"))return $return . " expired";
        return  $return;
    }

    public function getDiscount(){ return 0;}
    

}

?>