<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos

    $placa = $_POST['placa'];
    $identificacion = $_POST['identificacion'];
    $marca = $_POST['marca'];
    $referencia = $_POST['referencia'];
    $modelo = $_POST['modelo'];

    
     // ------------------------------------------
    // Verificamos que las claves coincidan

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (strlen($placa) > 0     && strlen($marca)> 0 
        && strlen($referencia) >0              && strlen($modelo)>0){

            //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();
            $result = $objConsultas -> modificarVehiculosAdmin($placa, $identificacion,$marca, $referencia, $modelo);    
        

        }else{
            echo '<script>alert("Por favor complete todos los campos")</script>';
            echo "<script>location.href='../Views/Administrador/ver-vehiculo.php'</script>";
        }


?>