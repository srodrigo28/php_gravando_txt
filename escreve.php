<?php

$nome = $_POST['nome'];

file_put_contents( 'banco.txt', "\n $nome", FILE_APPEND);

header('Location: index.php');