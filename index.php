<?php

//turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//require the Pet class
require ('pets.php');


// java version: Pet pet = new Pet(); pet.eat();
$pet = new Pet("Tara", "black");
//$pet2 = new Pet();
$pet3 = new Pet("pink");

$pet->eat();
$pet->sleep();
$pet->talk();

// no parameters
//$pet2->eat();
//$pet2->sleep();
//$pet2->talk();

// if only one thing is passed through
$pet3->eat();
$pet3->sleep();
$pet3->talk();

//var_dump($pet3); // for testing