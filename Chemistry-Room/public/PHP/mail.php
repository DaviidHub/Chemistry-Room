<?php

include 'konexioa.php';

$erabiltzaileak = $miPDO->prepare('SELECT mail FROM erabiltzaileak;');
$erabiltzaileak->execute();
$ERAB = [];

foreach($erabiltzaileak as $clave => $valor){
  array_push($ERAB,$valor['mail']);
}
echo json_encode($ERAB);


?>