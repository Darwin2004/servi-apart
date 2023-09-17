<?php

require_once "../Models/conexion.php";
require_once "../Models/consultas.php";


$destinatario = $_POST['destinatario'] ?? null;
$apartamento = $_POST['apartamento'] ?? null;
$torre = $_POST['torre'] ?? null;
$telDestinatario = $_POST['tel-destinatario'] ?? null;
$remitente = $_POST['remitente'] ?? null;


if($destinatario !== '' && $apartamento !== '' && $torre !== '' && $telDestinatario !== '' && $remitente !== ''){
    $objConsultas = new Consultas();
    $response = $objConsultas->registrarPaquete($destinatario, $remitente, $torre, $apartamento, $telDestinatario);
    if(!$response) return;
    echo "<script>alert('Paquete registrado correctamente')</script>";
    echo "<script>location.href='../Views/Administrador/registrar-paquete.php'</script>";
}else{
    echo "<script>alert('Debe ingresar todos los valores correctamente')</script>";
    echo "<script>location.href='../Views/Administrador/registrar-paquete.php'</script>";
}

?>