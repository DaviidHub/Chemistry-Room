<?php

include 'konexioa.php';

$datuak = $miPDO->prepare('SELECT * FROM froga3;');
$datuak->execute();
$izenak = [];
$desk = [];

foreach($datuak as $clave => $valor){
    array_push($izenak,$valor['izena']);
}
echo json_encode(array($izenak));


?>
