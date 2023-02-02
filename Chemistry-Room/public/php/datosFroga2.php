<?php

include 'konexioa.php';

$datuak = $miPDO->prepare('SELECT * FROM froga2;');
$datuak->execute();
$izenak = [];
$argazkiak = [];

foreach($datuak as $clave => $valor){
    array_push($izenak,$valor['izena']);
    array_push($argazkiak,$valor['argazkia']);
}
echo json_encode(array($izenak,$argazkiak));


?>