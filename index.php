<?php
require_once '/home/laurence/work/POO/heritage/Car.php';
require_once '/home/laurence/work/POO/heritage/Bicycle.php';
require_once '/home/laurence/work/POO/heritage/Camion.php';


// using class Camion -----------------------
//
$camion1 = new Camion( 100, 'blue', 2,'petroil');

var_dump($camion1);
$camion2 = new Camion( 200, 'vert', 3 ,'gaz');
var_dump($camion2);

echo "affectation vitesse 18 </br>";
$camion1->setCurrentSpeed(18);
var_dump($camion1);


echo $camion1->forward();
echo '<br> Vitesse du camion : ' . $camion1->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion1->brake();
echo '<br> Vitesse du camion : ' . $camion1->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion1->brake() .PHP_EOL;
var_dump($camion1);

echo "Loading....  </br>";
// on ajoute 50 à la charge actuelle
$camion1->loadTheTruck(50);
// on affiche etat du camion 
var_dump($camion1);
echo $camion1->fullStatus();
echo "</br>";

echo "Loading....  </br>";
// on ajoute 50 à la charge actuelle
$camion1->loadTheTruck(50);
// on affiche etat du camion 
var_dump($camion1);


echo $camion1->fullStatus();

// end Camion -------------------------------
//
//
// using classe Bicycle ----------------------

// instanciate new bike with some values 
$bike = new Bicycle('red',1);
$bike->setCurrentSpeed(18);
var_dump($bike);
var_dump(Car::ALLOWED_ENERGY);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// end bike --------------------------------
//
// using class Car -------------------------
//
// instanciate new car with some values 
var_dump(Car::ALLOWED_ENERGY);

$car = new Car('blue', 4, 'Petroil');
var_dump($car);

// $car->starttheCar();
echo $car->forward();
echo '<br> Vitesse de la voiture est : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture est : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

// end car ------------------------------