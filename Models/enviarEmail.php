
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
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
    $mail->addAddress('lfrestrepo004@gmail.com');     //Add a recipient
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
    $mail->Subject = 'Prueba de PHPMailer';
    $mail->Body    = '
    
    <h1 style="font-size: 50px; color: #2396bd; text-align: center;">Chistes de Programación</h1>

    <div style="text-align: center;">
        <p style="font-size: 30px;">"El programador y su esposa tenían un bebé. Ella le pregunta: ¿Deberíamos ponerle un
            nombre?" Él responde: "Ctrl-C, Ctrl-V."</p>

        <br>

        <p style="color: red;"><strong>Franklin Cortés</strong></p>
        <p style="font-size: 30px;">"El programador y su esposa tenían un bebé. Ella le pregunta: "¿Deberíamos ponerle un
            nombre?" Él responde: "Ctrl-C, Ctrl-V."</p>
        <img style="width: 600px" src="https://img.freepik.com/foto-gratis/experiencia-programacion-persona-que-trabaja-codigos-computadora_23-2150010130.jpg?w=1380&t=st=1693241296~exp=1693241896~hmac=19b07a887d1a1058219e6d6bc9fd000cace4d5aad7c8f2ca25c0f03174bd6381">

        <p style="color: blue;"><strong>Darwin Gonzalez</strong></p>
        <p style="font-size: 30px;">"¿Cómo se siente un desarrollador después de resolver un bug? "NULL".</p>
        <img style="width: 500px" src="https://img.freepik.com/foto-gratis/joven-apuesto-programador-pensativo-que-analiza-codigos-software-pantallas-computadora-mientras-trabaja-casa_662251-1019.jpg?w=740&t=st=1693241240~exp=1693241840~hmac=a99ebb83df49a88d98d159c8a57bcd53e2e9c7bfafc4f6a7cff9e6a92891ed57">

        <p style="color: yellow;"><strong>Johan Castañeda</strong></p>
        <p style="font-size: 30px;">"En programación, si funciona, ¡no lo toques! Podrías romperlo."</p>
        <img style="width: 400px" src="https://img.freepik.com/foto-gratis/vista-superior-pirata-informatico-irreconocible-que-realiza-ciberataque-noche_1098-18706.jpg?w=740&t=st=1693241233~exp=1693241833~hmac=e9d8feea5948f3cbe1d7625dcc8372491cd52c439e7bc4965786227f02c76414">

        <p style="color: pink;"><strong>Carlos Lasso</strong></p>
        <p style="font-size: 30px;">"El hardware es lo que hace que una máquina sea rápida; el software es lo que hace que
            una máquina sea inútil."</p>
        <img style="width: 300px" src="https://img.freepik.com/fotos-premium/joven-programador-alegre-auriculares-mirandote-sonrisa-trabajo-sobre-nuevo-software-oficina_274679-9896.jpg?w=1380">

        <p style="color: gray;"><strong>Javier Mendez</strong></p>
        <p style="font-size: 30px;">"¿Por qué los programadores odian la naturaleza? Porque tiene demasiados errores."</p>
        <img style="width: 200px" src="https://img.freepik.com/fotos-premium/retrato-programador-informatico-maduro-anteojos-mirando-al-frente-mientras-desarrolla-nuevo-sistema-informatico_249974-4783.jpg">

        <p style="color: green;"><strong>Camilo Pinilla</strong></p>
        <p style="font-size: 30px;">"¡Papá, papá! ¿Qué haces frente a la computadora con los ojos cerrados? Nada, hijo,
            simplemente estoy viendo mis errores."</p>
        <img style="width: 100px" src="https://img.freepik.com/foto-gratis/persona-frente-computadora-trabajando-html_23-2150040428.jpg?w=1380&t=st=1693241104~exp=1693241704~hmac=e62a1262e525faee4e8f708e13822c626cb9bd5931da37962b1c427b130b64ed">
    </div>

    <hr>
    <p style="font-size: 15px; text-align: center;">&copy; Derechos de autor ADSO 2023</p>

    ';

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>alert("Mensaje enviado")</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}






