<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
//ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 


$id_nov = $_GET['id_nov'];
$placa = $_GET['placa'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarNovedadesAdmin($id_nov, $placa);





?>