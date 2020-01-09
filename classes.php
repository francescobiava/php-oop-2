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
           . 'Cognome: ' . $this->lastname . '<br><br>';
  }

}

$person1 = new Person('Francesco', 'Biava');
$person2 = new Person('Fiorenza', 'Suagher');

echo $person1;
echo $person2;

?>