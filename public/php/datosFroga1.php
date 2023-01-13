<?php

include 'konexioa.php';

$datuak = $miPDO->prepare('SELECT * FROM froga1;');
$datuak->execute();
$izenak = [];
$desk = [];

foreach($datuak as $clave => $valor){
    array_push($izenak,$valor['bideak']);
    array_push($desk,$valor['ezaugarriak']);
}
echo json_encode(array($izenak,$desk));


?>