<?php

require_once __DIR__ . "/classes/Employee.php";

// $employee = new Employee('Luca', 'Rossi', 2);

try {

  $employee = new Employee('Luca', 'Rossi', 'pippo');
  // $employee->setLevel('pippo');
} catch (Exception $error) {
  echo $error->getMessage();
}

// $employee->setSconto(30);
// $employee->setLat(1000);
// $employee->setLon(2000);
// var_dump($employee->getAddress()); 
// var_dump($employee);
