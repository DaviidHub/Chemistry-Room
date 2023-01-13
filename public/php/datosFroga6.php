<?php

include 'konexioa.php';

$datuak = $miPDO->prepare('SELECT * FROM froga6;');
$datuak->execute();
$izenak = [];
$desk = [];

foreach($datuak as $clave => $valor){
    array_push($izenak,$valor['izena']);
    array_push($emaitza,$valor['emaitza']);
    array_push($zenb,$valor['zhitz']);
}
echo json_encode(array($izenak,$emaitza,$zenb));


?>
