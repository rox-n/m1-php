<?php

declare (strict_types=1);

function showMessage ()
{
    echo 'message';
}

function returnMessage ()
{
    return 'message returned';
}

showMessage();

echo '<br/>';

echo returnMessage();

function showName ($name='Madalin') {
    echo 'My name is: ' . $name;
}


echo '<br/>';
showName ('ROX');
echo '<br/>';
showName ('Marian');
echo '<br/>';
showName ();

function addNumbers(int $a, int $b) {
    echo $a + $b;
}

echo '<br/>';
addNumbers (1, 1);


