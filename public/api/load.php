<?php

$sciezka_do_pliku = 'game.txt';

$zawartosc = file_get_contents($sciezka_do_pliku);

echo $zawartosc;


?>