<?php

require_once 'export_to_csv.php';
require_once 'read_from_csv.php';

$persons = [
    [
        'first_name' => 'Marian',
        'last_name' => 'Jones',
        'phone' => '0744204881',
        'email' => 'marijones@gmail.com',
    ],
    [
        'first_name' => 'Marian',
        'last_name' => 'Jones',
        'phone' => '0744204881',
        'email' => 'marijones@gmail.com',
    ],
    [
        'first_name' => 'Marian',
        'last_name' => 'Jones',
        'phone' => '0744204881',
        'email' => 'marijones@gmail.com',
    ],
];

exportToCsv($persons, 'persons.csv', 'w+');
inhabitKey();