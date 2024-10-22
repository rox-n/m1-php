<?php

session_start();

require_once 'Book.php';

// function that randomly chooses a value from a vector received as an argument;
// use the array_rand() function.
function getRandomValue($x) {

    $array = (array)$x;

    $randomKey = array_rand(array_flip($array), 1);
    echo '<br>';
    print_r($randomKey);
}


echo '<pre>';
print_r($book);
getRandomValue($book);
