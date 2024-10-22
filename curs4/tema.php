<?php

/*  function that init an indexed vector with 10 elements, at each index an associative vector will
    be stored with the following keys: name, city, phone
*/

function initV () 
{
    $indexedV = [];

    for($i = 0; $i < 10; $i++) 
    {

        $indexedV[$i] = [
            'nume' => '',
            'oras' => '',
            'telefon' => ''
        ];
    }

    return $indexedV;
}

echo '<hr>';
echo '<pre>';


$indexedV = initV();



/*  function with five parameters (vector, index, nume, oras, phone) that will populate the vector; condition if exist the index
*/

function populateV ($indexedV, $index, $nume, $oras, $phone) 
{
  if (array_key_exists($index, $indexedV))
  {
    $indexedV[$index] = [ 
        'nume' => $nume,
        'oras' => $oras,
        'telefon' => $phone,
    ];           
 }  
 return $indexedV;      
             
}

$indexedV = populateV($indexedV, 0, 'Pop', 'Iasi', '0778000111');
$indexedV = populateV($indexedV, 1, 'Tau', 'Cluj', '0787111000');
$indexedV = populateV($indexedV, 4, 'Popa', 'Iasi', '0778000444');
$indexedV = populateV($indexedV, 7, 'Ste', 'Dej', '0998111222');
$indexedV = populateV($indexedV, 12, 'Toma', 'Jiu', '0998111333');

print_r($indexedV);

echo '<hr>';

// function that statist how many values for key oras

function statistica ($indexedV) {
    $cityCount = [];

    foreach($indexedV as $x) {
        if(isset($x['oras'])) 
        {
            $oras = $x['oras'];
            if (array_key_exists($oras, $cityCount)) {
                $cityCount[$oras]++;
            } else {
                $cityCount[$oras] = 1;
            }
        }
    }
    print_r($cityCount);
}

statistica($indexedV);