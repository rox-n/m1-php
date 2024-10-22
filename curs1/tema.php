
<?php

// functie cu un parametru care afiseaza mesajul "Ati introdus valoarea: urmat de val parametrului

function punctulI ($valoare) {

    return 'ex. 1 - Ati introdus valoarea: ' . $valoare . '!';
}

echo '<br/>';
echo punctulI ('corecta');

// functie cu doi parametrii care afiseaza suma acestora

function adunare ($q, $p) {
    return 'ex. 2 - Suma lui ' . $q . ' si ' . $p . ' este ' . $q + $p . '.';

}

echo '<br/>';
echo adunare(5, 5);
echo '<br/>';
echo adunare(-5, -2.5);

// functie cu trei parametrii (doi cu val predefinite) care afiseaza suma acestora

function adunareDeTrei ($a, $b = 1, $c = 1) {       //observatie: in cazul in care oricare din parametrii doi sau trei ar fi ales ca nedefinit functia ar returna eroare si
                                                    // parametrii parsati ocupa intai locul 1 daca se parseaza doar un parametru si apoi urmatorii
    return 'ex. 3 - Suma lui ' . $a . ' , ' . $b . ' si ' . $c . ' este ' . $a + $b + $c . '.';
}

echo '<br/>';
echo adunareDeTrei(5) . ' // aici am apelat functia parsand un parametru';

echo '<br/>';
echo adunareDeTrei(3, -2) . ' // aici am apelat functia parsand doi parametri';

echo '<br/>';
echo adunareDeTrei('3') . ' // aici am apelat functia parsand un parametru de tip string';

echo '<br/>';
echo adunareDeTrei(null) . ' // aici am apelat functia parsand un parametru de tip null';

echo '<br/>';
echo adunareDeTrei(true) . ' // aici am apelat functia parsand un parametru de tip bool';

// functie cu doi parametrii care returneaza concatenarea acestora, valoarea fiind asignata variabilei $rezultat afisata extern functiei

function concatenare ($val1, $val2) {
    return $val1 . ' ' . $val2;
}

echo '<br/>';
$rezultat = concatenare('Popescu', 'Ion');
echo 'ex. 4 - ' . $rezultat  . ' // aici am afisat valoare lui $rezultat'; 
echo '<br/>';
echo 'ex. 4 - ' . var_dump($rezultat)  . ' // aici am apelat functia var_dump pentru variabila $rezultat';

echo '<br/>';
$rezultat = concatenare('2', '3');
echo 'ex. 4 - ' . $rezultat  . ' // aici am afisat valoare lui $rezultat'; 
echo '<br/>';
echo 'ex. 4 - ' . var_dump($rezultat)  . ' // aici am apelat functia var_dump pentru variabila $rezultat';

echo '<br/>';
$rezultat = concatenare(2, 3);
echo 'ex. 4 - ' . $rezultat  . ' // aici am afisat valoare lui $rezultat'; 
echo '<br/>';
echo 'ex. 4 - ' . var_dump($rezultat)  . ' // aici am apelat functia var_dump pentru variabila $rezultat';

echo '<br/>';
$rezultat = concatenare(1, true);
echo 'ex. 4 - ' . $rezultat  . ' // aici am afisat valoare lui $rezultat'; 
echo '<br/>';
echo 'ex. 4 - ' . var_dump($rezultat)  . ' // aici am apelat functia var_dump pentru variabila $rezultat';

echo '<br/>';
$rezultat = concatenare('1', true);
echo 'ex. 4 - ' . $rezultat  . ' // aici am afisat valoare lui $rezultat'; 
echo '<br/>';
echo 'ex. 4 - ' . var_dump($rezultat)  . ' // aici am apelat functia var_dump pentru variabila $rezultat';

echo '<br/>';
$rezultat = concatenare(null, true);
echo 'ex. 4 - ' . $rezultat  . ' // aici am afisat valoare lui $rezultat'; 
echo '<br/>';
echo 'ex. 4 - ' . var_dump($rezultat)  . ' // aici am apelat functia var_dump pentru variabila $rezultat';