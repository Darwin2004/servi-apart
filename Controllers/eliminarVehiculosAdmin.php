<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>Document</title>
</head>
<style>
    *, html, body{
        font-family: 'Roboto', sans-serif;
    }
</style>

<body>
<?php
require_once("../Models/conexion.php");
require_once("../Models/consultas.php");
//ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 
$placa = $_GET['placa'];

// Generar el código HTML de la ventana emergente
$swalHtml = '
<script>
Swal::fire({
    title: "¿Está seguro de que desea eliminar este vehículo?",
    text: "Una vez eliminado, no podrá recuperarlo.",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, eliminar",
    cancelButtonText: "Cancelar"
})
->then((result) => {
    if (result.isConfirmed) {
        // Eliminar el vehículo
        $resultadoEliminar = $objConsultas->eliminarVehiculosAdmin($placa);
    } else {
        // Cancelar la eliminación
    }
});
</script>
';

// Imprimir el código HTML de la ventana emergente
echo $swalHtml;

?>
        
</body>
</html>

















<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>Document</title>
</head>
<style>
    *, html, body{
        font-family: 'Roboto', sans-serif;
    }
</style>

<body>
<?php
// require_once("../Models/conexion.php");
// require_once("../Models/consultas.php");
// //ATERRIZAMOS LA VARIABLE QUE ENVIAMOS A TRAVES DEL METODO GET 
// $placa = $_GET['placa'];

// $objConsultas = new Consultas();
// $result = $objConsultas->eliminarVehiculosAdmin($placa);

?>
        
</body>
</html> -->