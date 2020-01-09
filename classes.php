<?php

class Person {

  public $name;
  public $lastname;

  function __construct($name, $lastname) {
    $this->name = $name;
    $this->lastname = $lastname;
  }

  function __toString() {
    return 'Nome: ' . $this->name . '<br>'
           . 'Cognome: ' . $this->lastname . '<br>';
  }

}

class Guest extends Person {

  public $dateBirth;

  function __construct($name, $lastname, $dateBirth) {
    parent::__construct($name, $lastname);
    $this->dateBirth = $dateBirth;
  }

  function __toString() {
    return parent::__toString() . 'Anno di nascita: ' . $this->dateBirth . '<br>';
  }
}

class Customer extends Person {

  public $address;

  function __construct($name, $lastname, $address) {
    parent::__construct($name, $lastname);
    $this->address = $address;
  }

  function __toString() {
    return parent::__toString() . 'Indirizzo: ' . $this->address . '<br>';
  }
}

$person1 = new Person('Francesco', 'Biava');
$person2 = new Person('Fiorenza', 'Suagher');
echo 'PERSONE <br>';
echo $person1 . '<br>';
echo $person2 . '<br>';

$guest1 = new Guest('Francesco', 'Biava', '1995');
$guest2 = new Guest('Fiorenza', 'Suagher', '1992');
echo 'OSPITI <br>';
echo $guest1 . '<br>';
echo $guest2 . '<br>';

$customer1 = new Customer('Francesco', 'Biava', 'via Test 10');
$customer2 = new Customer('Fiorenza', 'Suagher', 'via Test 8');
echo 'PAGANTI <br>';
echo $customer1 . '<br>';
echo $customer2 . '<br>';
?>