<?php
require_once '/home/laurence/work/POO/carAndBicycle/Car.php';
require_once '/home/laurence/work/POO/carAndBicycle/Bicycle.php';




// instanciate new bike with some values 
$bike = new Bicycle('red');
$bike->setCurrentSpeed(18);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// instanciate new car with some values 
$car = new Car('blue', 4, 'Petroil');
var_dump($car);
$car->starttheCar();
echo $car->forward();
echo '<br> Vitesse de la voiture est : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture est : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();