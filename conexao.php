<?php

$usuario ='root';
$senha = '';
$database ='expresso_3bti';
$hots = 'localhost';

$mysqli = new mysqli($hots, $usuario, $senha, $database);

if($mysqli ->error) {
    die("Falha ao conectar: " . $mysqli->error); 
}