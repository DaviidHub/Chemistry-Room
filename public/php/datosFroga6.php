<?php

include 'konexioa.php';

$datuak = $miPDO->prepare('SELECT * FROM froga6;');
$datuak->execute();
$galdera6 = [];
$erantzuna6 = [];

foreach($datuak6 as $clave => $valor){
    array_push($galdera6,$valor['galdera6']);
    array_push($erantzuna6,$valor['erantzuna6']);
}
echo json_encode(array($galdera6,$erantzuna6));


?>
