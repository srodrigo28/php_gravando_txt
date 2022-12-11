<?php

$lista = file('banco.txt');

sort($lista);

if(!$lista){
    echo "sem dados !!!";
}else{
    foreach( $lista as $row ) {
        echo "<a href=''> <p>" . $row . "</p> </a>";
    }
}


