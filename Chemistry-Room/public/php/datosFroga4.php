<?php

include 'konexioa.php';

$datuak = $miPDO->prepare('SELECT * FROM froga4;');
$datuak->execute();
$galdera = [];
$erantzuna = [];

foreach($datuak as $clave => $valor){
    array_push($galdera,$valor['galdera']);
    array_push($erantzuna,$valor['erantzuna']);
}
echo json_encode(array($galdera,$erantzuna));


?>