<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
//ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 
$placa = $_GET['placa'];

$objConsultas = new Consultas();
$result = $objConsultas->eliminarDiaReservadoSC($id_reserva);





?>