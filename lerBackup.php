<?php

$lista = fopen( 'banco.txt', 'r');

echo gettype($lista);

while (!feof ($lista)) {
    $newList = fgets($lista);

    echo  "<p>" . $newList . "</p>";
}

fclose($lista);