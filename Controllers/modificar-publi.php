<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos


    $id_publi = $_POST['id_publi'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];


    // Verificamos que las claves coincidan

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (strlen($id_publi) > 0     && strlen($titulo)> 0 
        && strlen($descripcion) >0){

            //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();

            $result = $objConsultas ->  modificarPublicacion($id_publi, $titulo, $descripcion);    
        
        

        }else{
            echo '<script>alert("Por favor complete todos los campos")</script>';
            echo "<script>location.href='../Views/Administrador/ver-publicaciones.php'</script>";
        }


?>