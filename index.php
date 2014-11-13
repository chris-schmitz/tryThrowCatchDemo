<?php

/**
 * The try/throw/catch parrot.
 * 
 * This is a demo structure I built to help me solidify the concept of try/throw/catch. The file is meant to be run from the command line.
 * composer is required to use this demo.
 *
 * Chris Schmitz 2014-11-13
 */

require 'vendor/autoload.php';

use CS\Parrot;

$parrot = new Parrot;

try{
    // If this is enabled before the parrot learns anything, an exception will be thrown, none of the other steps will fire, and the exception will be passed to the catch clause.
    // $parrot->speak();

    // These are the first and second words we're teaching the parrot. Because they're both different no exception will be thrown and the words will be added to the parrot's vocabulary.
    $parrot->learn("hello");
    $parrot->learn("hi");

    // If this step is enabled an exception will be thrown because our parrot already learned the word 'hi'. The parrot won't speak and the exception will be thrown.
    // $parrot->learn("hi");

    // If all of our prior commands fire without exception, our speak method will make our parrot output all of the words it's learned.
    $parrot->speak();

} catch (Exception $e){
    // If an exception is thrown during any of the commands we tried, it will be echoed out here. 
    echo $e->getMessage() . "\n";
}

