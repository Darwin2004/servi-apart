<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/Exception.php';
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';


    class generarClave{
        
        public function enviarNuevaClave($identificacion, $email){
            $f = null;
            $objConexion = new Conexion;
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM users WHERE identificacion=:identificacion AND email=:email";

            $result = $conexion->prepare($consultar);

            $result->bindParam(":identificacion", $identificacion);
            $result->bindParam(":email", $email);
            
            $result->execute();

            $f = $result->fetch();

            if($f){
                //GENERAMOS LA NUEVA CLAVE A PARTIR DE UN CODIGO ALEATORIO
                $caracteres = "0123456789abcdefghijklmnopqrstuvxywzABCDEFGHIJKLMNOPQRSTUVXYWZ";
                $longitud = 10;
                $newPass = substr(str_shuffle($caracteres),0,$longitud);
                
                $claveMd = md5($newPass);

                $actualizarClave = "UPDATE users SET clave=:claveMd WHERE identificacion=:identificacion";

                $result = $conexion->prepare($actualizarClave);

                $result->bindparam(":identificacion", $identificacion);
                $result->bindparam(":claveMd", $claveMd);

                $result->execute();

               
               
               
               
               
               
               
               
               
               
               
               
               

             $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'serviapart.nfo@gmail.com';                     //SMTP username
                $mail->Password   = 'npjzjxcytwvlmgzs';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                // Emisor
                $mail->setFrom('serviapart.nfo@gmail.com', 'Soporte Servi-Apart');

                // Receptor
                $emailFor=$f['email'];  
                $mail->addAddress($emailFor);     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->CharSet = 'UTF-8'; // Añadir esta línea para configurar la codificación
                $mail->Subject = 'Reasignación de contraseña';
                $mail->Body    = '
                
                <body style="background-color: #232020; font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td style="background-color: #232020;">
                <table align="center" width="600" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <img src="https://github.com/andres10cortes07/servi-apart/blob/main/logo1.png?raw=true" alt="Logo de la Empresa" style="display: block; margin: 0 auto; width:210px; height:120px ">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table align="center" width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); margin-top: 20px;">
                    <tr>
                        <td style="padding: 10px; font-size: 16px; color: #333; text-align: center;">
                            <h1 style="color: #00BF63; font-size: 28px; margin-bottom: 20px;">Restablecimiento de Contraseña</h1>
                            <p style="font-size: 18px; margin-bottom: 20px;">Estimado '.$f['nombres'].',</p>
                            <p style="font-size: 18px; margin-bottom: 20px;">Esperamos que te encuentres bien. Queremos informarte que tu solicitud para restablecer la contraseña de tu cuenta ha sido procesada con éxito. A continuación, te proporcionamos tu nueva contraseña</p>
                            <div style="background-color: #00BF63; color: #ffffff; padding: 15px; border-radius: 5px; margin: 0 auto; width: 50%; font-size: 18px;">
                                <p style="font-weight: bold; text-align: center;">Nueva contraseña: '.$newPass.'</p>
                            </div>
                            <p style="font-size: 18px; margin-top: 20px;">Te recomendamos encarecidamente cambiar esta contraseña por una nueva y más segura tan pronto como inicies sesión en tu cuenta. Para hacerlo, sigue estos sencillos pasos:</p>
                            <ol style="font-size: 18px; margin-top: 20px; text-align: left;">
                                <li>Inicia sesión en tu cuenta utilizando tu dirección de correo electrónico y la nueva contraseña.</li>
                                <li>Accede a la configuración de tu perfil o a la sección de seguridad de la cuenta.</li>
                                <li>Selecciona la opción para cambiar la contraseña.</li>
                                <li>Sigue las indicaciones en pantalla para establecer una nueva contraseña segura que solo tú conozcas.</li>
                            </ol>
                            <p style="font-size: 18px; margin-top: 20px;">Ten en cuenta que esta contraseña deberás cambiarla lo antes posible para garantizar la seguridad de tu cuenta. Si no solicitaste el restablecimiento de contraseña o tienes alguna pregunta o inquietud, no dudes en ponerte en contacto con nuestro equipo de soporte a través de <a href="mailto:serviapart.nfo@gmail.com" style="color: #00BF63; text-decoration: none;">serviapart.nfo@gmail.com</a>.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="background-color: #00BF63; text-align: center; padding: 20px;">
                <p style="font-style: italic; color: #ffffff; margin: 0; font-size: 18px;">Servi - Apart</p>
                <p style="font-style: italic; color: #ffffff; margin: 0; font-size: 18px;">&copy Copyright 2023</p>
            </td>
        </tr>
    </table>
</body>

                ';

                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo '<script>alert("Mensaje enviado")</script>';
                echo '<script>location.href="../Views/client-site/page-login.html"</script>';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }







                

                
            }
            else{
                echo '<script>alert("Los datos de Usuario no se Encuentran en el Sistema")</script>';
                echo "<script>location.href='../Views/client-site/page-reset-password.html'</script>";
            }

        }
    }


























?>