<?php

$table = $_GET['table'];


$freshgame = file_get_contents('freshgame.txt');

$sciezka_do_pliku = 'game' . $table . '.txt';

file_put_contents($sciezka_do_pliku, $freshgame);
