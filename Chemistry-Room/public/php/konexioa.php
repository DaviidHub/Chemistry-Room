<?php
// Aldagaiak
$hostDB = '127.0.0.1';
<<<<<<< HEAD
$nombreDB = 'chemistryroom';
=======
$nombreDB = 'chemistry room';
>>>>>>> 8a98794364dc6b7e3df3ef5dc57b69d3fe1c29cc
$usuarioDB = 'root';
$contrasenyaDB = '';
// Datu basera konektatu
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
?>