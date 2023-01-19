<?php

include 'konexioa.php';

$datuak = $miPDO->prepare('SELECT * FROM froga6;');
$datuak->execute();
$galdera = [];
$erantzuna = [];

foreach($datuak as $clave => $valor){
    array_push($galdera,$valor['izena']);
    array_push($erantzuna,$valor['emaitza']);
}
echo json_encode(array($galdera,$erantzuna));


?>