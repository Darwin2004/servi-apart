<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src="sweetalert2.all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
       

        html,
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <?php
require_once"../Models/conexion.php";
require_once"../Models/consultas.php";


$identificacion = $_POST['identificacion']?? null;
$dia_reserva= $_POST['dia_reserva']?? null;
$hora_inicio= $_POST['hora_inicio']?? null;
$hora_finalizacion= $_POST['hora_finalizacion']?? null;
$mesas= $_POST['mesas']?? null;
$sillas= $_POST['sillas']?? null;

if( $identificacion !== ''  && $dia_reserva !== '' && $hora_inicio !== '' && $hora_finalizacion !== '' && $mesas !== '' && $sillas !== '' ){
    $objConsultas = new Consultas();
    $response = $objConsultas->registrarDia($identificacion, $dia_reserva ,$hora_inicio, $hora_finalizacion, $mesas, $sillas);
    if(!$response)return;
        ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Registro Exitoso',
            showConfirmButtom: false,
            timer: 2000
        }).then((result) => {
            location.href = '../Views/Residente/salon-comunal.php';
        })
    </script>
    <?php
    }else{
        ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Error al realizar la reserva. Intentalo de nuevo',
            ConfirmButtom: 'Ok'

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = '../Views/Residente/salon-comunal.php';
            }
        })
    </script>
    <?php
    }
        

    ?>
    
</body>

</html>