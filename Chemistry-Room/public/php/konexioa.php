<?php
// Aldagaiak
$hostDB = '127.0.0.1';
$nombreDB = 'chemistryroom';
$usuarioDB = 'root';
$contrasenyaDB = '';
// Datu basera konektatu
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
?>