<?php

require 'vendor/autoload.php';

use CS\Parrot;


$parrot = new Parrot;

try{
    $parrot->learn("hello");
    $parrot->learn("hi");
    $parrot->learn("hi");
    $parrot->speak();
} catch (Exception $e){
    echo $e->getMessage() . "\n";
}

//$parrot->learn('Hello');
//$parrot->learn('Hi');
//$parrot->learn('Hello');
