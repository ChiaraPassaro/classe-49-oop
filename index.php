<?php

// require_once __DIR__ . "/classes/Employee.php";

// // $employee = new Employee('Luca', 'Rossi', 2);

// try {

//   $employee = new Employee('Luca', 'Rossi', 'pippo');
//   // $employee->setLevel('pippo');
// } catch (Exception $error) {
//   echo $error->getMessage();
// }

// $employee->setSconto(30);
// $employee->setLat(1000);
// $employee->setLon(2000);
// var_dump($employee->getAddress()); 
// var_dump($employee);

require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Genre.php';
require_once __DIR__ . '/classes/Actor.php';


try {
  $movie = new Movie('Inception', 'Christopher Nolan', 2010, 'Ita', null);

  $movie->setGenres([
    new Genre('Fantascienza'),
  ]);

  $movie->setCast([
    new Actor('Leonardo', 'Di Caprio'),
    'pippo'
  ]);

  var_dump($movie->getCast());
} catch (Exception $error) {
  echo $error->getMessage();
}
// var_dump($movie);
