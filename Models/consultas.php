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

        public function insertarUserAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $claveMd, $rol, $estado, $foto){
            
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
            $insertar = "INSERT INTO usuarios(identificacion, tipo_doc, nombres, apellidos, email, telefono, clave, rol, estado, foto) 
            VALUES(:identificacion, :tipo_doc, :nombres, :apellidos, :email, :telefono, :claveMd,  :rol, :estado, :foto)";


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
            $result -> bindParam (":foto", $foto);

            //EJECUTAMOS EL INSERT
            $result -> execute();
             
            echo '<script>alert("Te has registrado exitosamente")</script>';
            echo "<script>location.href='../Views/Administrador/registrar-usuario.php'</script>";
            }

        }

        public function crearPublicacion($titulo, $descripcion){
            
            //CREAMOS EL OBJETO DE CONEXION
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            //SELECT DE USUARIO REGISTRADO EN EL SISTEMA
            $consultar = 'SELECT * FROM publicacion WHERE titulo=:titulo descripcion=:descripcion OR id_publi=:id_publi';
            $result = $conexion->prepare($consultar);

            $result -> bindParam (":titulo", $titulo);

            $result -> bindParam (":descripcion", $descripcion);


            $result -> execute();

            $f = $result->fetch();

            if($f){
                echo '<script>alert("Publicacion ya publicada")</script>';
                echo "<script>location.href='../Views/Administrador/crear-publicacion.php'</script>";
            }else{
                
            //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
            $insertar = "INSERT INTO publicaciones(id_publi, titulo, descripcion) 
            VALUES(:id_public, :titulo, :descripcion)";


            //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
            $result = $conexion->prepare($insertar);


            //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
            $result -> bindParam (":id_publi", $id_publi);
            $result -> bindParam (":titulo", $titulo);
            $result -> bindParam (":descripcion", $descripcion);
           
            //EJECUTAMOS EL INSERT
            $result -> execute();
             
            echo '<script>alert("Publicacion creada correctamente")</script>';
            echo "<script>location.href='../Views/Administrador/crear-publicacion.php'</script>";
            }

        }


        public function mostrarusuariosAdmin(){
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

        public function mostrarUserAdmin($id_user){
            $f = null;

            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $buscar = "SELECT * FROM usuarios WHERE identificacion=:id_user";
            $result = $conexion->prepare($buscar);

            $result->bindParam(':id_user', $id_user);

            $result->execute();

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



        public function modificarCuentaAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono){
            
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $actualizar = " UPDATE usuarios SET tipo_doc=:tipo_doc, nombres=:nombres, apellidos=:apellidos, email=:email, telefono=:telefono WHERE identificacion=:identificacion ";
            $result = $conexion->prepare($actualizar);

            $result->bindParam("identificacion", $identificacion);
            $result->bindParam("tipo_doc", $tipo_doc);
            $result->bindParam("nombres", $nombres);
            $result->bindParam("apellidos", $apellidos);
            $result->bindParam("email", $email);
            $result->bindParam("telefono", $telefono);
    
            $result->execute();

            echo '<script>alert("Información actualizada")</script>';
            echo "<script>location.href='../Views/Administrador/perfil.php?id=$identificacion'</script>";
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
        
        public function registrarVehiculoAdmin($placa, $marca, $referencia, $modelo, $identificacion_res, $fecha, $foto, $foto1, $foto2, $foto3){
                
            //CREAMOS EL OBJETO DE CONEXION
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            //SELECT DE USUARIO REGISTRADO EN EL SISTEMA
            $consultar = 'SELECT * FROM vehiculo WHERE placa=:placa OR marca=:marca';
            $result = $conexion->prepare($consultar);

            $result -> bindParam (":placa", $placa);

            $result -> bindParam (":marca", $marca);

            $result -> execute();

            $f = $result->fetch();

            if($f){
                echo '<script>alert("Los datos del vehiculo ya se encuentran registrados")</script>';
                echo "<script>location.href='../Views/client-site/page-login.html'</script>";
            }   else{
                
                //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
                $insertar = "INSERT INTO vehiculo(placa, marca, referencia, modelo, identificacion_res, fecha, foto, foto1, foto2, foto3) 
                VALUES(:placa, :marca, :referencia, :modelo, :identificacion_res, :fecha, :foto, :foto1, :foto2, :foto3)";


                //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
                $result = $conexion->prepare($insertar);


                //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
                $result -> bindParam (":placa", $placa);
                $result -> bindParam (":marca", $marca);
                $result -> bindParam (":referencia", $referencia);
                $result -> bindParam (":modelo", $modelo);
                $result -> bindParam (":identificacion_res", $identificacion_res);
                $result -> bindParam (":fecha", $fecha);  
                $result -> bindParam (":foto", $foto);
                $result -> bindParam (":foto1", $foto1);
                $result -> bindParam (":foto2", $foto2);
                $result -> bindParam (":foto3", $foto3);

                //EJECUTAMOS EL INSERT
                $result -> execute();
                
                echo '<script>alert("Vehiculo registrado exitosamente")</script>';
                echo "<script>location.href='../Views/Administrador/registrar-vehiculo.php'</script>";
            }
        }

        public function registrarDia(){}



        public function actualizarFotoAdmin($id, $foto){  

    
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
        
            $actualizar = " UPDATE usuarios SET foto=:foto WHERE identificacion=:id";
            $result = $conexion->prepare($actualizar);
        
            $result->bindParam("id", $id);
            $result->bindParam("foto", $foto);
            
            $result->execute();
        
            echo '<script>alert("Información actualizada")</script>';
            echo "<script>location.href='../Views/Administrador/perfil.php?id=$id'</script>";
        }


        public function actualizarClaveAdmin($identificacion, $claveMd){  

    
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
        
            $actualizar = " UPDATE usuarios SET clave=:claveMd WHERE identificacion=:identificacion";
            $result = $conexion->prepare($actualizar);
        
            $result->bindParam(":identificacion", $identificacion);
            $result->bindParam(":claveMd", $claveMd);
            
            $result->execute();
        
            echo '<script>alert("Clave Actualizada actualizada")</script>';
            echo "<script>location.href='../Views/Administrador/perfil.php?id=$identificacion'</script>";
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

                        session_start();
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