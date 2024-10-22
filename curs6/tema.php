<?php

//  function with parameter a file name, a phrase and a number;
//  write in the file the phrase received by a number equal to the parameter number

function writePhrase($fileName, $phrase, $nr) {
    $myFile = fopen("$fileName", "w");
    for($i = 0; $i < $nr; $i++)
    {
        fwrite($myFile, $phrase);

    }
    fclose($myFile);
    return $phrase;
}
 $phraseDeNori = writePhrase("text.txt", "Nori de ploaie la orizont!", 5);
print $phraseDeNori;