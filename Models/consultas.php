<?php

//CREAMOS UNA CLASE QUE CONTENGA TODAS LAS FUNCIONES
//CRUD DEL SISTEMA

    class Consultas {

        //FUNCIONES MODULOS ADMINISTRADOR

        public function insertarUserEx($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $claveMd, $rol, $estado, $torre, $apartamento){
            
            //CREAMOS EL OBJETO DE CONEXION
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            //SELECT DE USUARIO REGISTRADO EN EL SISTEMA
            $consultar = 'SELECT * FROM usuarios WHERE email=:email OR identificacion=:identificacion';
            $result = $conexion->prepare($consultar);

            $result -> bindParam (":email", $email);

            $result -> bindParam (":identificacion", $identificacion);

            $result -> execute();

            $f = $result->fetch();

            if($f){
                echo '<script>alert("Los datos de usuario ya se encuentran registrados")</script>';
                echo "<script>location.href='../Views/client-site/page-login.html'</script>";
            }else{
                
            //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
            $insertar = "INSERT INTO usuarios(identificacion, tipo_doc, nombres, apellidos, email, telefono, clave, rol, estado, torre, apartamento) 
            VALUES(:identificacion, :tipo_doc, :nombres, :apellidos, :email, :telefono, :claveMd, :rol, :estado, :torre, :apartamento)";


            //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
            $result = $conexion->prepare($insertar);


            //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
            $result -> bindParam (":identificacion", $identificacion);
            $result -> bindParam (":tipo_doc", $tipo_doc);
            $result -> bindParam (":nombres", $nombres);
            $result -> bindParam (":apellidos", $apellidos);
            $result -> bindParam (":email", $email);
            $result -> bindParam (":telefono", $telefono);
            $result -> bindParam (":claveMd", $claveMd);
            $result -> bindParam (":rol", $rol);
            $result -> bindParam (":estado", $estado);
            $result -> bindParam (":torre", $torre);
            $result -> bindParam (":apartamento", $apartamento);

            //EJECUTAMOS EL INSERT
            $result -> execute();
             
            echo '<script>alert("Te has registrado exitosamente, debes esperar a que un administrador te autorize")</script>';
            echo "<script>location.href='../Views/client-site/page-login.html'</script>";
            }

        }

        public function insertarUserAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $clave, $rol, $estado, $torre, $apartamento, $foto){
            
            //CREAMOS EL OBJETO DE CONEXION
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            //SELECT DE USUARIO REGISTRADO EN EL SISTEMA
            $consultar = 'SELECT * FROM usuarios WHERE email=:email OR identificacion=:identificacion';
            $result = $conexion->prepare($consultar);

            $result -> bindParam (":email", $email);

            $result -> bindParam (":identificacion", $identificacion);

            $result -> execute();

            $f = $result->fetch();

            if($f){
                echo '<script>alert("Los datos de usuario ya se encuentran registrados")</script>';
                echo "<script>location.href='../Views/Administrador/registrar-usuario.php'</script>";
            }else{
                
            //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
            $insertar = "INSERT INTO usuarios(identificacion, tipo_doc, nombres, apellidos, email, telefono, clave, rol, estado, torre, apartamento, foto) 
            VALUES(:identificacion, :tipo_doc, :nombres, :apellidos, :email, :telefono, :clave,  :rol, :estado, :torre, :apartamento, :foto)";


            //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
            $result = $conexion->prepare($insertar);


            //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
            $result -> bindParam (":identificacion", $identificacion);
            $result -> bindParam (":tipo_doc", $tipo_doc);
            $result -> bindParam (":nombres", $nombres);
            $result -> bindParam (":apellidos", $apellidos);
            $result -> bindParam (":email", $email);
            $result -> bindParam (":telefono", $telefono);  
            $result -> bindParam (":clave", $clave);
            $result -> bindParam (":rol", $rol);
            $result -> bindParam (":estado", $estado);
            $result -> bindParam (":torre", $torre);
            $result -> bindParam (":apartamento", $apartamento);
            $result -> bindParam (":foto", $foto);

            //EJECUTAMOS EL INSERT
            $result -> execute();
             
            echo '<script>alert("Usuario registrado con exito")</script>';
            // echo "<script>location.href='../Views/Administrador/registrar-usuario.php'</script>";
            }

        }

    

        public function mostrarUsuariosAdmin(){
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM usuarios ORDER BY nombres ASC ";

            $result = $conexion->prepare($consultar);

            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }

        public function mostrarUsuarioEditarAdmin($identificacion){
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM usuarios WHERE identificacion=:identificacion";
            $result = $conexion->prepare($consultar);

            $result->bindParam("identificacion", $identificacion);

            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }

      

        public function mostrarFotosVehiculoAdmin($placa){
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM vehiculo v INNER JOIN usuarios u ON v.identificacion = u.identificacion WHERE v.placa = :placa";
            $result = $conexion->prepare($consultar);

            $result->bindParam("placa", $placa);
 

            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }

        public function mostrarNovedades($placa){
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT *, u.nombres, v.placa
            FROM novedad_vehiculo n
            INNER JOIN usuarios u ON n.identificacion = u.identificacion
            INNER JOIN vehiculo v ON n.placa = v.placa
            WHERE v.placa = :placa;";
            $result = $conexion->prepare($consultar);

            $result->bindParam("placa", $placa);

            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }

        public function mostrarNovedadEditarAdmin($placa){
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM novedad_vehiculo WHERE placa=:placa";
            $result = $conexion->prepare($consultar);

            $result->bindParam("placa", $placa);

            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }




        public function actualizarUserAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $rol, $estado){
            
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $actualizar = " UPDATE usuarios SET tipo_doc=:tipo_doc, nombres=:nombres, apellidos=:apellidos, email=:email, telefono=:telefono, rol=:rol, estado=:estado WHERE identificacion=:identificacion ";
            $result = $conexion->prepare($actualizar);

            $result->bindParam("identificacion", $identificacion);
            $result->bindParam("tipo_doc", $tipo_doc);
            $result->bindParam("nombres", $nombres);
            $result->bindParam("apellidos", $apellidos);
            $result->bindParam("email", $email);
            $result->bindParam("telefono", $telefono);
            $result->bindParam("rol", $rol);
            $result->bindParam("estado", $estado);

            $result->execute();

            echo '<script>alert("Información de usuario actualizada")</script>';
            echo "<script>location.href='../Views/Administrador/ver-usuario.php'</script>";
        }

        public function modificarCuentaAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $torre, $apartamento){
            
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $actualizar = " UPDATE usuarios SET tipo_doc=:tipo_doc, nombres=:nombres, apellidos=:apellidos, email=:email, telefono=:telefono, torre=:torre, apartamento=:apartamento WHERE identificacion=:identificacion ";
            $result = $conexion->prepare($actualizar);

            $result->bindParam("identificacion", $identificacion);
            $result->bindParam("tipo_doc", $tipo_doc);
            $result->bindParam("nombres", $nombres);
            $result->bindParam("apellidos", $apellidos);
            $result->bindParam("email", $email);
            $result->bindParam("telefono", $telefono);
            $result->bindParam("torre", $torre);
            $result->bindParam("apartamento", $apartamento);
    
            $result->execute();

            echo '<script>alert("Información actualizada")</script>';
            echo "<script>location.href='../Views/Administrador/ver-usuario.php'</script>";
        }
        


        public function crearPublicacion($id_publi, $titulo, $descripcion){
            
            //CREAMOS EL OBJETO DE CONEXION
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            //SELECT DE USUARIO REGISTRADO EN EL SISTEMA
            $consultar = 'SELECT * FROM publicaciones WHERE id_publi=:id_publi';
            $result = $conexion->prepare($consultar);
      

            $result -> bindParam (":id_publi", $id_publi);

            $result -> execute();

            $f = $result->fetch();

            if($f){
                echo '<script>alert("Publicacion ya esta publicada")</script>';
                echo "<script>location.href='../Views/Administrador/crear-publicacion.php'</script>";
            }else{
                
            //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
            $insertar = "INSERT INTO publicaciones(titulo, descripcion) 
            VALUES(:titulo, :descripcion)";


            //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
            $result = $conexion->prepare($insertar);


            //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS

           // $result -> bindParam (":id_publi", $id_publi);

            $result -> bindParam (":titulo", $titulo);
            $result -> bindParam (":descripcion", $descripcion);
           
            //EJECUTAMOS EL INSERT
            $result -> execute();
             
            echo '<script>alert("Publicacion creada correctamente")</script>';
            echo "<script>location.href='../Views/Administrador/crear-publicacion.php'</script>";
            }

        }

        public function eliminarPubli($id_publi){
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $eliminar = "DELETE FROM publicaciones Where id_publi=:id_publi"; 
            $result = $conexion->prepare($eliminar);

            $result->bindParam(":id_publi", $id_publi);

            $result->execute();
            echo '<script>alert("Publicacion Eliminada")</script>';
            echo "<script>location.href='../Views/Administrador/ver-publicaciones.php'</script>";
        }


        public function mostrarPublicaciones(){
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM publicaciones";

            $result = $conexion->prepare($consultar);

            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }
        public function modificarPubli($id_publi, $titulo, $descripcion){   
            
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $actualizar = " UPDATE publicaciones SET  titulo=:titulo, descripcion=:descripcion WHERE id_publi=:id_publi";
            $result = $conexion->prepare($actualizar);

           
            $result->bindParam("titulo", $titulo);
            $result->bindParam("descripcion", $descripcion);
            $result->bindParam("id_publi", $id_publi);
           
    
            $result->execute();

            echo '<script>alert("Información actualizada")</script>';
            //echo "<script>location.href='../Views/Administrador/ver-publicaciones.php'</script>";//
        }

        public function mostrarPubliEditar($id_publi){
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM publicaciones WHERE id_publi=:id_publi";
            $result = $conexion->prepare($consultar);

            $result->bindParam("id_publi", $id_publi);

            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }




        public function mostrarVehiculosAdmin(){
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM vehiculo ORDER BY fecha DESC ";

            $result = $conexion->prepare($consultar);

            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }

        public function modificarVehiculosAdmin($placa, $identificacion, $marca, $referencia, $modelo){
            
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $actualizar = " UPDATE vehiculo SET marca=:marca, referencia=:referencia, modelo=:modelo WHERE placa=:placa ";
            $result = $conexion->prepare($actualizar);

            $result->bindParam("marca", $marca);
            $result->bindParam("referencia", $referencia);
            $result->bindParam("modelo", $modelo);
            $result->bindParam("placa", $placa);
    
            $result->execute();

            echo '<script>alert("Información actualizada")</script>';
            echo "<script>location.href='../Views/Administrador/ver-vehiculo.php'</script>";
        }

        public function mostrarVehiculoEditarAdmin($placa){
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM vehiculo WHERE placa=:placa";
            $result = $conexion->prepare($consultar);

            $result->bindParam("placa", $placa);

            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }

        public function modificarNovedadesAdmin($placa, $identificacion, $novedad){
            
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $actualizar = " UPDATE novedad_vehiculo SET novedad=:novedad WHERE placa=:placa ";
            $result = $conexion->prepare($actualizar);

            $result->bindParam("placa", $placa);
            $result->bindParam("novedad", $novedad);
    
            $result->execute();

            echo '<script>alert("Información actualizada")</script>';
            echo '<script>location.href="../Views/Administrador/ver-novedades.php?placa=' . $placa. '"</script>';
        }

        public function eliminarVehiculosAdmin($placa){
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $eliminar = "DELETE FROM vehiculo Where placa=:placa"; 
            $result = $conexion->prepare($eliminar);

            $result->bindParam(":placa", $placa);

            $result->execute();
            echo '<script>alert("Vehiculo Eliminado")</script>';
            echo "<script>location.href='../Views/Administrador/ver-vehiculo.php'</script>";
        }

        public function eliminarNovedadesAdmin($placa){
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $eliminar = "DELETE FROM novedad_vehiculo Where placa=:placa"; 
            $result = $conexion->prepare($eliminar);

            $result->bindParam(":placa", $placa);

            $result->execute();
            echo '<script>alert("Novedad Eliminada")</script>';
            echo '<script>location.href="../Views/Administrador/ver-novedades.php"</script>';
        }


        public function eliminarUserAdmin($id){
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $eliminar = "DELETE FROM usuarios Where identificacion=:id"; 
            $result = $conexion->prepare($eliminar);

            $result->bindParam(":id", $id);

            $result->execute();
            echo '<script>alert("Usuario Eliminado")</script>';
            echo "<script>location.href='../Views/Administrador/ver-usuario.php'</script>";
        }

        public function verPerfil($id) {
            $f = null;
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $buscar = "SELECT * FROM usuarios WHERE identificacion=:id ";

            $result = $conexion->prepare($buscar);

            $result -> bindParam(':id', $id);
            $result -> execute();

            
            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;
        }
        
        public function registrarVehiculoAdmin($placa, $marca, $referencia, $modelo, $identificacion, $fecha, $foto1, $foto2, $foto3, $foto4){
                
            //CREAMOS EL OBJETO DE CONEXION
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            //SELECT DE USUARIO REGISTRADO EN EL SISTEMA
            $consultar = 'SELECT * FROM vehiculo WHERE placa=:placa';
            $result = $conexion->prepare($consultar);

            $result -> bindParam (":placa", $placa);

            $result -> execute();

            $f = $result->fetch();

            if($f){
                echo '<script>alert("Los datos del vehiculo ya se encuentran registrados")</script>';
                echo "<script>location.href='../Views/Administrador/registrar-vehiculo.php'</script>";
            }   else{
                
                //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
                $insertar = "INSERT INTO vehiculo(placa, marca, referencia, modelo, identificacion, fecha, foto1, foto2, foto3, foto4) 
                VALUES(:placa, :marca, :referencia, :modelo, :identificacion, :fecha, :foto1, :foto2, :foto3, :foto4)";


                //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
                $result = $conexion->prepare($insertar);


                //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
                $result -> bindParam (":placa", $placa);
                $result -> bindParam (":marca", $marca);
                $result -> bindParam (":referencia", $referencia);
                $result -> bindParam (":modelo", $modelo);
                $result -> bindParam (":identificacion", $identificacion);
                $result -> bindParam (":fecha", $fecha);  
                $result -> bindParam (":foto1", $foto1);
                $result -> bindParam (":foto2", $foto2);
                $result -> bindParam (":foto3", $foto3);
                $result -> bindParam (":foto4", $foto4);

                //EJECUTAMOS EL INSERT
                $result -> execute();
                
                echo '<script>alert("Vehiculo registrado exitosamente")</script>';
                echo "<script>location.href='../Views/Administrador/registrar-vehiculo.php'</script>";
            }
        }

        public function registrarDia($identificacion, $nombre, $apellidos, $telefonos, $correo, $dia_reserva, $torre, $apartamento, $hora_inicio, $hora_finalizacion, $mesas, $sillas){
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();
        
            $consultar ='SELECT * FROM reserva_salon WHERE dia_reserva=:dia_reserva';
            $result =$conexion->prepare($consultar);
        
            $result->bindParam(":dia_reserva", $dia_reserva);
        
            $result->execute();
        
            $f = $result->fetch();
        
            if ($f) {
                return false; // Indicar que ya existe una reserva para el mismo día.
            } else {
                $insertar ="INSERT INTO reserva_salon (identificacion, nombre, apellidos, telefonos, correo, dia_reserva, torre, apartamento, hora_inicio, hora_finalizacion, mesas, sillas)
                            VALUES (:identificacion, :nombre, :apellidos, :telefonos, :correo, :dia_reserva, :torre, :apartamento, :hora_inicio, :hora_finalizacion, :mesas, :sillas)";
        
                $result = $conexion->prepare($insertar);
        
                // Vincular los parámetros
        
                $result->bindParam(":identificacion", $identificacion);
                $result->bindParam(":nombre", $nombre);
                $result->bindParam(":apellidos", $apellidos);
                $result->bindParam(":telefonos", $telefonos);
                $result->bindParam(":correo", $correo);
                $result->bindParam(":dia_reserva", $dia_reserva);
                $result->bindParam(":torre", $torre);
                $result->bindParam(":apartamento", $apartamento);
                $result->bindParam(":hora_inicio", $hora_inicio);
                $result->bindParam(":hora_finalizacion", $hora_finalizacion);
                $result->bindParam(":mesas", $mesas);
                $result->bindParam(":sillas", $sillas);
        
                if ($result->execute()) {
                    return true; // Indicar éxito en la inserción.
                } else {
                    return false; // Indicar error en la inserción. PRUEBA DE UN COMMIT
                }
            }
        }
        
        public function eliminarDiaReservaSC($id_reserva){
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();
        
            $eliminar = "DELETE FROM reserva_salon WHERE id_reserva=:id_reserva"; 
            $result = $conexion->prepare($eliminar);
        
            $result->bindParam(":id_reserva", $id_reserva);
        
            if ($result->execute()) {
                echo '<script>alert("Reserva Eliminada Con Éxito")</script>';
                 echo "<script>location.href='../Views/Administrador/ver-ReservaSC.php'</script>";
            } else {
                echo '<script>alert("Error al eliminar la reserva")</script>';
            }
        }
        

        public function actualizarClaveAdmin($identificacion, $claveMd){  

    
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
        
            $actualizar = " UPDATE usuarios SET clave=:claveMd WHERE identificacion=:identificacion";
            $result = $conexion->prepare($actualizar);
        
            $result->bindParam(":identificacion", $identificacion);
            $result->bindParam(":claveMd", $claveMd);
            
            $result->execute();
        
            echo '<script>alert("Clave Actualizada")</script>';
            echo "<script>location.href='../Views/Administrador/perfil.php?id=$identificacion'</script>";
        }


        public function registrarPaquete($destinatario, $remitente, $torre, $apartamento, $telDestinatario){
            try {
                $objConexion = new conexion();
                $conexion = $objConexion->get_conexion();

                $query = "INSERT INTO paqueteria(destinatario, remitente, torre, apartamento, telefono, fecha) VALUES(:destinatario, :remitente, :torre, :apartamento, :telefono, NOW())";
                $statement = $conexion->prepare($query);

                $statement->bindParam(':destinatario', $destinatario);
                $statement->bindParam(':remitente', $remitente);
                $statement->bindParam(':torre', $torre);
                $statement->bindParam(':apartamento', $apartamento);
                $statement->bindParam(':telefono', $telDestinatario);

                $response = $statement->execute();

                if(!$response) return false;
                return true;
            } catch (\Throwable $th) {
                echo "Ha ocurrido un problema al registrar el paquete :( " . $th; 
            }
        }

        public function mostrarPaquetesAdmin(){
            try {
                $objConexion = new Conexion();
                $conexion = $objConexion->get_conexion();
        
                $query = "SELECT * FROM paqueteria";
                $statement = $conexion->prepare($query);
        
        
                $response = $statement->execute();
                if(!$response) return;
                $result = $statement->fetchAll();
                return $result;
                
            } catch (\Throwable $th) {
                echo "error al listar los registros de paquetes: " . $th;
            }
        }
        public function mostrarReservasAdmin(){
            try {
                $objConexion = new Conexion();
                $conexion = $objConexion->get_conexion();
        
                $query = "SELECT * FROM reserva_salon";
                $statement = $conexion->prepare($query);
        
        
                $response = $statement->execute();
                if(!$response) return;
                $result = $statement->fetchAll();
                return $result;
                
            } catch (\Throwable $th) {
                echo "error al listar los registros de las reservas: " . $th;
            }
        }
    }

        //FUNCIONES MODULOS PRODUCTOS


// --------------------------------


    class ValidarSesion {
        public function iniciarSesion($email, $clave){

            //CREAMOS EL OBJETO DE CONEXION
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = 'SELECT * FROM usuarios WHERE email=:email';

            //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
            $result = $conexion->prepare($consultar);

            //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
            $result -> bindParam (":email", $email);

            $result -> execute();

            //CONVERTIREMOS LA VARIABLE RESULT EN UN ARREGLO PARA SEGMENTAR LA INFORMACION
            
            $f = $result -> fetch();

            if ($f) {
            //VALIDAMOS LA CLAVE
                if ($f['clave'] == $clave){
                    //VALIDAMOS EL ESTADO DE LA CUENTA
                    
                    if($f['estado'] == "Activo"){
                        //SE REALIZA EL INICIO DE SESION

                        if(session_status() !== PHP_SESSION_ACTIVE) session_start();
                        //CREAMOS VARIABLES DE SESION

                        $_SESSION['id'] = $f['identificacion'];
                        $_SESSION['email'] = $f['email'];
                        $_SESSION['rol'] = $f['rol'];
                        $_SESSION['AUTENTICADO'] = "SI";

                        //VALIDAMOS EL ROL PARA REDIRECCIONAR A LA INTERFAZ

                            switch ($f['rol']) {
                                case 'Administrador':
                                    echo '<script>alert("Bienvenido señor administrador")</script>';
                                    echo "<script>location.href='../Views/Administrador/home.php'</script>";
                                    break;

                                case 'Residente':
                                        echo '<script>alert("Bienvenido señor residente")</script>';
                                        echo "<script>location.href='../Views/Residente/home.php'</script>";
                                        break;
                                
                                case 'Seguridad':
                                            echo '<script>alert("Bienvenido señor personal de seguridad")</script>';
                                            echo "<script>location.href='../Views/Seguridad/home.php'</script>";
                                            break;
                            }



                    }
                    else {
                        echo '<script>alert("La cuenta no está activa, contactese con el administrador")</script>';
                        echo "<script>location.href='../Views/client-site/page-login.html'</script>";
                    }
                }
                else {
                    echo '<script>alert("Clave incorrecta")</script>';
                    echo "<script>location.href='../Views/client-site/page-login.html'</script>";
                }
            }
            else {
                echo '<script>alert("El usuario no existe")</script>';
                echo "<script>location.href='../Views/client-site/page-login.html'</script>";
            }
        }


        public function cerrarSesion(){
            $objConexion = new Conexion();
            $objConexion = $objConexion->get_conexion();

            session_start();
            session_destroy();

            echo "<script>location.href='../Views/client-site/page-login.html' </script>";
        }


    }




?>