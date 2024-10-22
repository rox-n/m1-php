<?php

function inhabitKey() {
    $file = fopen("persons.csv", "r");

    $persons = [];
    $columns = fgetcsv($file);
    while ($person = fgetcsv($file))
    {

    foreach ($person as $key => $value)
    {
        $person[$columns[$key]] = $value;
        unset($person[$key]);
    }
    $persons[] = $person;
    return $persons;
    }
}

//TODO: de facut functie codul de mai sus si de folosit in reports.php

echo "<pre>";

$x = inhabitKey();
print_r($x);