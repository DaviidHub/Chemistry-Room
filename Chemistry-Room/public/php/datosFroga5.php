<?php

// ======[KONEXIOA]======
include 'konexioa.php';

// ======[DATUAK]======
$datuak = $miPDO->prepare('SELECT * FROM froga5;');
$datuak->execute();
$izenak = [];
$taldeak = [];

foreach($datuak as $clave => $valor){
    array_push($izenak,$valor['izena']);
    array_push($taldeak,$valor['taldea']);
}

// ======[PISTAK]======
$pistak = $miPDO->prepare('SELECT pista FROM pistak WHERE id=5;');
$pistak->execute();
$pista = [];

foreach($pistak as $clave => $valor){
    array_push($pista, $valor['pista']);
}

echo json_encode(array($izenak, $taldeak,$pista));


?>