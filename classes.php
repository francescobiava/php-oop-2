<?php

// GOAL: 
// - Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
// - Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
// - Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
// - Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi

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
    return parent::__toString() . 'Data di nascita: ' . $this->dateBirth . '<br>';
  }
}

$person1 = new Person('Francesco', 'Biava');
$person2 = new Person('Fiorenza', 'Suagher');
echo 'PERSONE <br>';
echo $person1 . '<br>';
echo $person2 . '<br>';

$guest1 = new Guest('Francesco', 'Biava', '27/11/1995');
$guest2 = new Guest('Fiorenza', 'Suagher', '27/06/1992');
echo 'OSPITI <br>';
echo $guest1 . '<br>';
echo $guest2 . '<br>';

?>