<?php

include 'konexioa.php';

$datuakAcido = $miPDO->prepare('SELECT * FROM froga4 WHERE medio= "acido";');
$datuakAcido->execute();
$galderaAcido = [];
$erantzunaAcido = [];

foreach($datuakAcido as $clave => $valor){
    array_push($galderaAcido,$valor['galdera']);
    array_push($erantzunaAcido,$valor['erantzuna']);
}

$datuakBase = $miPDO->prepare('SELECT * FROM froga4 WHERE medio= "basico";');
$datuakBase->execute();
$galderaBase = [];
$erantzunaBase = [];

foreach($datuakBase as $clave => $valor){
    array_push($galderaBase,$valor['galdera']);
    array_push($erantzunaBase,$valor['erantzuna']);
}

echo json_encode(array($galderaAcido,$erantzunaAcido,$galderaBase,$erantzunaBase));

?>