<?php

$table = $_GET['table'];

$sciezka_do_pliku = 'game'.$table.'.txt';

$zawartosc = file_get_contents($sciezka_do_pliku);

echo $zawartosc;


?>