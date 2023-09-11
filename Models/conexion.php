<?php
// Creamos una clase para posteriomente convertila en un objeto y reutilizarla

    class Conexion{
        public function get_conexion(){
            $user = "root";
            $pass = "";
            $host = "localhost";
            $db = "servi_apart";
            // Esta variables son las unicas que se deben cambiar al momento del hosting

            $conexion = new pdo("mysql: host=$host; dbname=$db;", $user, $pass);

            return $conexion;
        }
    }
?>