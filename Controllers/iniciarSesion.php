<?php
    // Enlazamos las dependencias necesario
    require_once ("../Models/conexion.php");
    require_once ("../Models/consultas.php");

    $email = $_POST['email'];
    $clave = md5($_POST['clave']);

    if (strlen($email) > 0     && strlen($clave)> 0){
        
        $objValidar = new ValidarSesion();
        $result = $objValidar->iniciarSesion($email, $clave);
    }

    else{
        echo '<script>alert("Ingrese el usuario y contraseña")</script>';
        echo "<script>location.href='../Views/client-site/page-login.html'</script>";
    }



?>