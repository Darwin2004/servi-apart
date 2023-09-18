<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos




$identificacion =$_POST['identificacion'];
$nombre =$_POST['nombre'];
$apellidos =$_POST['apellidos'];
$telefonos =$_POST['telefonos'];
$correo =$_POST['correo'];
$dia_reserva =$_POST['dia_reserva'];
$torre =$_POST['torre'];
$apartamento =$_POST['apartamento'];
$hora_inicio =$_POST['hora_inicio'];
$hora_finalizacion =$_POST['hora_finalizacion'];
$mesas =$_POST['mesas'];
$sillas =$_POST['sillas'];





    
     // ------------------------------------------
    // Verificamos que las claves coincidan

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (
            ($_POST['identificacion']) && isset($_POST['nombre']) && isset($_POST['apellidos']) &&
            isset($_POST['telefonos']) && isset($_POST['correo']) && isset($_POST['dia_reserva']) &&
            isset($_POST['torre']) && isset($_POST['apartamento']) && isset($_POST['hora_inicio']) &&
            isset($_POST['hora_finalizacion']) && isset($_POST['mesas']) && isset($_POST['sillas'])
        ){

            //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();
            $result = $objConsultas -> modificarReservaAdmin($identificacion, $nombre, $apellidos, $telefonos, $correo, $dia_reserva, $torre, $apartamento, $hora_inicio, $hora_finalizacion,$mesas, $sillas);    
        

        }else{
            echo '<script>alert("Por favor complete todos los campos")</script>';
             echo "<script>location.href='../Views/Administrador/ver-reservaSC.php?id=' . $id_reserva .' </script>";
        }


?>