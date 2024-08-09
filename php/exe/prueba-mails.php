<?php
        require '..\..\vendor\autoload.php';
        
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        
        
        $mail = new PHPMailer(true);
        
        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com'; // Cambia esto por tu servidor SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'restablecimiento@cristianmora.xyz'; // Cambia esto por tu correo
            $mail->Password = '1ngCr15t14n@'; // Cambia esto por tu contraseña
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
        
            // Remitente y destinatario
            $mail->setFrom('restablecimiento@cristianmora.xyz', 'Cristian Mora');
            $mail->addAddress('cr.mora00@gmail.com', 'Cristian Mora');
        

            $html = "
            <h1> Recuperacion de Contraseña </h1>
            <h3> Admin-Files </h3>
            <p> Este es el codigo que debes utilizar para cambiar tu contraseña: </p> 
            <br /> <h1>1234</h1>
            <center><p> No intente responder a este correo </p></center>";

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'CODIGO DE RESTABLECIMIENTO';
            $mail->Body = $html;
        
            $mail->send();
            echo 'El mensaje ha sido enviado';
        } catch (Exception $e) {
            echo "El mensaje no pudo ser enviado. Error de Mailer: {$mail->ErrorInfo}";
        }
?>
