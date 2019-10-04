<?php


$db = new PDO("sqlite:".__DIR__."/database/tads.db");
$resultado = $db->query("select * from produto");
$lista = $resultado->fetchAll();
var_dump($lista);
?>