<?php


$table = $_GET['table'];

$sciezka_do_pliku = 'game' . $table . '.txt';


$json =  file_get_contents('php://input');
file_put_contents($sciezka_do_pliku,$json);




?>