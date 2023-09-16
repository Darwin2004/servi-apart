<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos

    $placa = $_POST['placa'];
    $identificacion = $_POST['identificacion'];
    $novedad = $_POST['novedad'];

    
     // ------------------------------------------
    // Verificamos que las claves coincidan

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (strlen($placa) > 0          && strlen($identificacion) >0              && strlen($novedad)>0){

            //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();
            $result = $objConsultas -> modificarNovedadesAdmin($placa, $identificacion,$novedad);    
        

        }else{
            echo '<script>alert("Por favor complete todos los campos")</script>';
            echo '<script>location.href="../Views/Administrador/modificar-novedad.php?placa=' . $placa . '"</script>';
        }


?>