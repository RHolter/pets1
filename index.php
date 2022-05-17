<?php

//turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//require the Pet class
require ('pets.php');


// java version: Pet pet = new Pet(); pet.eat();
$pet = new Pet();
$pet->eat();
$pet->sleep();
$pet->talk();