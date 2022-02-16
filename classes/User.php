<?php

class User
{
  protected $name;
  protected $lastName;
  protected $eta;
  private $sconto = 0;

  public function __construct($name, $lastName)
  {
    $this->name = $name;
    $this->lastName = $lastName;
  }

  public function setName($name)
  {
    //ci sono spazi inutili
    //contiene caratteri speciali...
    $this->name = $name;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function getFullName()
  {
    return $this->name . ' ' . $this->lastName;
  }

  public function setSconto($eta)
  {
    $this->eta = $eta;
    if ($eta > 60) {
      $this->sconto = 20;
    }
  }
}

// $user = new User();
// $user->name = 'Chiara';
// $user->lastName = 'Passaro';

// $user2 = new User();
// // $user2->name = 'Mario';
// // $user2->lastName = 'Coppola';
// $user2->setName('Mario');
// $user2->setLastName('Coppola');
// var_dump($user2->getFullName());
// var_dump($user->getFullName());
// var_dump($user->getName());

// $user = new User('Chiara', 'Passaro');
// echo $user->getName();
