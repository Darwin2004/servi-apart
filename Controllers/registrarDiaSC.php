<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");

if (
    ($_POST['identificacion']) && isset($_POST['nombre']) && isset($_POST['apellidos']) &&
    isset($_POST['telefonos']) && isset($_POST['correo']) && isset($_POST['dia_reserva']) &&
    isset($_POST['torre']) && isset($_POST['apartamento']) && isset($_POST['hora_inicio']) &&
    isset($_POST['hora_finalizacion']) && isset($_POST['mesas']) && isset($_POST['sillas'])
) {
    // Aquí puedes acceder a las claves $_POST con seguridad.
    
    $identificacion = trim($_POST['identificacion']);
    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $telefonos = trim($_POST['telefonos']);
    $correo = trim($_POST['correo']);
    $dia_reserva = trim($_POST['dia_reserva']);
    $torre = trim($_POST['torre']);
    $apartamento = trim($_POST['apartamento']);
    $hora_inicio = trim($_POST['hora_inicio']);
    $hora_finalizacion = trim($_POST['hora_finalizacion']);
    $mesas = trim($_POST['mesas']);
    $sillas = trim($_POST['sillas']);

    // Resto del código para procesar los datos, por ejemplo, la llamada a registrarDia().
    $objConsultas = new Consultas();
    $result = $objConsultas->registrarDia($identificacion, $nombre, $apellidos, $telefonos, $correo, $dia_reserva, $torre, $apartamento, $hora_inicio, $hora_finalizacion, $mesas, $sillas);

    // Verificar el resultado de la operación y mostrar mensajes de éxito o error.
    if ($result) {
        echo '<script>alert("Registro exitoso")</script>';
    } else {
        echo '<script>alert("Hubo un error en el registro. Por favor, inténtalo de nuevo más tarde.")</script>';
    }

    // Redirigir al usuario a la página correspondiente.
    echo "<script>location.href='../Views/Usuarios/salon-comunal.php'</script>";
} else {
    echo '<script>alert("Por favor complete todos los campos")</script>';
    echo "<script>location.href='../Views/Usuarios/salon-comunal.php'</script>";
    // Aquí puedes manejar el caso en que falten campos en el formulario.
}
?>
