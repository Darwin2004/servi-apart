<?php
require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");


$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['correo_electronico'];
$dia_reserva = $_POST['dia_reserva'];
$torre = $_POST['torre'];
$apartamento = $_POST['apartamento'];
$hora_inicio = $_POST['hora_inicio'];
$hora_finalizacion = $_POST['hora_finalizacion'];



if (strlen($identificacion) >0 && strlen($nombre) >0 && strlen($apellido) >0 && strlen($telefono) >0 && strlen($correo_electronico) >0 && strlen($dia_reserva) >0 && strlen($torre) >0 && strlen($apartamento) >0 && strlen($hora_inicio) >0 && strlen($hora_finalizacion)>0){

$objConsultas = new Consultas();
$result = $objConsultas -> registrarDia($identificacion, $nombre, $apellido, $telefono, $correo_electronico, $dia_reserva, $torre, $apartamento, $hora_inicio, $hora_finalizacion);

}else{
    echo'<script>alert("Por favor complete todos los campos")</script>';
    echo "<script>location.href='../Views/Administrador/salon-comunal.php'</script>";
}



?>