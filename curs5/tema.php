<?php

// ex. 1 function that take off all the vocals from a string parameter

function killVowels ($x) {

    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    $resultString = str_replace($vowels, '', $x);
    return $resultString;
   
}

$xNonvowels = killVowels('HellO World!');
print_r($xNonvowels);

echo '<br>';
echo '<hr>';

// ex. 2 function that receives a string and returns the statistics of the characters contained in the string

function numaraCaracter($myStr) {

    $countCha = str_split($myStr);

    echo '<pre>';
    print_r(array_count_values($countCha));
}

numaraCaracter('Hello world!');

echo '<br>';
echo '<hr>';

// ex. 3 function that receives a string and a number and returns strings with the same size as the number received as a parameter

function desparte($myStr, $a) {

    $s = [',', '!', '.', '?'];

    $result = str_replace($s, '', $myStr);

    $countChb = explode(' ', $result);

    foreach($countChb as $ch => $val)
    {
        if(strlen($val) == $a)
        print_r($val);
        echo '<br>';

    }

}

$cuvinteDeParam = desparte('Hello world, Minie & Micky!', 5);
print_r($cuvinteDeParam);