<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
//ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 
$id_publi = $_GET['id_publi'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarPubli($id_publi);





?>