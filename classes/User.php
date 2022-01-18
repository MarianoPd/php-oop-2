<?php

require_once __DIR__ . "/CreditCard.php";

class User{
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
        $_cc = new CreditCard($this->name, $this->surname, $_num, $_ed);
        $this->credit_card[] = $_cc;
    }

    public function getName() { return $this->name; }
    public function getSurname() { return $this->surname; }
    public function getBirthday() { return $this->birthday; }
    public function getEmail() { return $this->email; }

    //ritorna il risultato di getLastDigits così che il numero di cc sia conservato in CreditCard   e mostri solo le ultime 4 cifre
    public function getCreditCard($num=0) {
         return $this->credit_card[$num]->getLastDigits(); 
        }
    

}

?>