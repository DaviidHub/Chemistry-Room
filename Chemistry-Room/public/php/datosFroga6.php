<?php


include 'konexioa.php';

$datuak5 = $miPDO->prepare('SELECT * FROM froga6 WHERE zhitz= "5";');
$datuak5->execute();
$izena5 = [];
$emaitza5 = [];

$datuak6 = $miPDO->prepare('SELECT * FROM froga6 WHERE zhitz= "6";');
$datuak6->execute();
$izena6 = [];
$emaitza6 = [];

foreach($datuak5 as $clave => $valor) {
    array_push($izena5,$valor['izena']);
    array_push($emaitza5,$valor['emaitza']);
}

foreach($datuak6 as $clave => $valor) {
    array_push($izena6,$valor['izena']);
    array_push($emaitza6,$valor['emaitza']);
}

echo json_encode(array($izena5,$emaitza5,$izena6,$emaitza6));


?>
