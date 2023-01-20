<?php

include 'konexioa.php';

$datuak = $miPDO->prepare('SELECT * FROM froga6;');
$datuak->execute();
$izena = [];
$emaitza = [];

foreach($datuak as $clave => $valor) {
    array_push($izena,$valor['izena']);
    array_push($emaitza,$valor['emaitza']);



}
echo json_encode(array($izena,$emaitza));

?>
