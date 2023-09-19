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
   *; html,body{
    font-family: 'Montserrat',sans-serif;
   }
</style>
</head>

<body>
<?php
require_once"../Models/conexion.php";
require_once"../Models/consultas.php";

$id_reserva = $_POST['id_reserva']?? null;
$identificacion = $_POST['identificacion']?? null;
$nombre= $_POST['nombre']?? null;
$apellidos= $_POST['apellidos']?? null;
$telefonos= $_POST['telefonos']?? null;
$correo= $_POST['correo']?? null;
$dia_reserva= $_POST['dia_reserva']?? null;
$torre= $_POST['torre']?? null;
$apartamento= $_POST['apartamento']?? null;
$hora_inicio= $_POST['hora_inicio']?? null;
$hora_finalizacion= $_POST['hora_finalizacion']?? null;
$mesas= $_POST['mesas']?? null;
$sillas= $_POST['sillas']?? null;

if($id_reserva !== '' && $identificacion !== '' && $nombre !== '' && $apellidos !== '' && $telefonos !== '' && $correo !== '' && $dia_reserva !== '' && $torre !== '' && $apartamento !== '' && $hora_inicio !== '' && $hora_finalizacion !== '' && $mesas !== '' && $sillas !== '' &&$id_reserva !== '' ){
    $objConsultas = new Consultas();
    $response = $objConsultas->registrarDia($identificacion, $nombre, $apellidos, $telefonos, $correo, $dia_reserva, $torre, $apartamento, $hora_inicio, $hora_finalizacion, $mesas, $sillas);
        ?>
        <script>
            Swal.fire({
                icon:'success',
                title:'Registro Exitoso',
                showConfirmButtom: false,
                timer: 2000
            }).then((result)=>{
                location.href='../Views/Usuarios/salon-comunal.php';
            })
        </script>
        <?php
}else{
    ?>
    <script>
        Swal.fire({
            icon:'error',
            title:'Oops...',
            text:'Error al registrar paquete. Intentalo de nuevo',
            ConfirmButtom:'Ok'
        
        }).then((result)=>{
            if(result.isConfirmed){
                location.href='../Views/Usuarios/salon-comunal.php';
            }
        })
    </script>
    <?php
}
?>
</body>
</html>