<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos

    $identificacion = $_POST['identificacion'];
    $tipo_doc = $_POST['tipo_doc'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    
     // ------------------------------------------
    // Verificamos que las claves coincidan

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (strlen($identificacion) > 0     && strlen($tipo_doc)> 0 
        && strlen($nombres) >0              && strlen($apellidos)>0
        && strlen($email) >0              && strlen($telefono)>0){

            //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();
            $result = $objConsultas -> modificarCuentaAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono);
        

        }else{
            echo '<script>alert("Por favor complete todos los campos")</script>';
            echo "<script>location.href='../Views/Administrador/perfil.php'</script>";
        }


?>