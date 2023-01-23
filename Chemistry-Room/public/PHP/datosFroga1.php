<?php

// ======[KONEXIOA]======
include 'konexioa.php';

// ======[DATUAK]======
$datuak = $miPDO->prepare('SELECT * FROM froga1;');
$datuak->execute();
$izenak = [];
$desk = [];

foreach($datuak as $clave => $valor){
    array_push($izenak,$valor['bideak']);
    array_push($desk,$valor['ezaugarriak']);
}

// ======[PISTAK]======
$pistak = $miPDO->prepare('SELECT pista FROM pistak WHERE id=1;');
$pistak->execute();
$pista = [];

foreach($pistak as $clave => $valor){
    array_push($pista, $valor['pista']);
}

echo json_encode(array($izenak,$desk,$pista));


?>