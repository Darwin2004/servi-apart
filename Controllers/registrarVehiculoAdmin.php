<?php

    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    // Aterrizamos en variables los datos ingresados por el usuario
    // los cuales viajan a travé del metodo POST y name de los campos

    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $referencia = $_POST['referencia'];
    $modelo = $_POST['modelo'];
    $identificacion = $_POST['identificacion'];
    $fecha = $_POST['fecha'];
    $foto = $_POST['foto'];

     // ------------------------------------------
    // Verificamos que las claves coincidan

        //VALIDAMOS QUE LOS CAMPOS ESTEN COMPLETAMENTE DILIGENCIADOS
        if (strlen($placa) > 0     && strlen($marca)> 0 
        && strlen($referencia) >0              && strlen($modelo)>0
        && strlen($identificacion) >0              && strlen($fecha)>0 ){


            //CREAMOS UNA VARIABLE PARA DEFINIR LA RUTA DONDE QUEDARA ALOJADA LA IMAGEN
              //MOVEMOS EL ARCHIVO A LA CARPETA UPLOADS Y LA CARPETA USUARIOS
            $foto = "../Uploads/Vehiculos/".$_FILES['foto']['name'];
            $mover = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

            $foto1 = "../Uploads/Vehiculos/".$_FILES['foto1']['name'];
            $mover = move_uploaded_file($_FILES['foto1']['tmp_name'], $foto1);

            $foto2 = "../Uploads/Vehiculos/".$_FILES['foto2']['name'];
            $mover = move_uploaded_file($_FILES['foto2']['tmp_name'], $foto2);

            $foto3 = "../Uploads/Vehiculos/".$_FILES['foto3']['name'];
            $mover = move_uploaded_file($_FILES['foto3']['tmp_name'], $foto3);


            //CREAMOS EL OBJETO A PARTIR DE UNA CLASE
            //PARA EN ENVIAR LOS ARGUMENTOS A LA FUNCION EN EL MODELO. (ARCHIVO CONSULTAS)

            $objConsultas = new Consultas();
            $result = $objConsultas -> registrarVehiculoAdmin($placa, $marca, $referencia, $modelo, $identificacion, $fecha, $foto, $foto1, $foto2, $foto3);
        

        }else{
            echo '<script>alert("Por favor complete todos los campos")</script>';
            echo "<script>location.href='../Views/Administrador/registrar-vehiculo.php'</script>";
        }


?>