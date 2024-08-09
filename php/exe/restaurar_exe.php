<?php


echo $user = $_REQUEST["user"];






// if(isset($_REQUEST["codigo"])){
//     if($_REQUEST["codigo"] != ''){
    
//         // $codigo = $_REQUEST["codigo"];
//         // $codigo = filter_var($codigo, FILTER_SANITIZE_NUMBER_INT);
    
//         // $sql = "SELECT codigo_tmp FROM usuarios WHERE mail = '$mail' AND usuario = '$user'";
//         // $qry = $conn->query($sql);
    
//         // if($row = $qry->fetch_assoc()){
//         //     $codigo_tmp = trim($row["codigo_tmp"]);
//         // }
    
//         // if($codigo == $codigo_tmp){
//         //     echo "Exito";
//         // }
        
//         // exit;
//     }
// }

// if(isset($mail) && isset($user)){
//     $sql = "SELECT usuario FROM usuarios WHERE usuario = '$user'";
//     $qry = $conn->query($sql);

//     if($qry->num_rows <= 0){
//         echo "Error-u";
//         return;
//     }

//     $sql = "SELECT mail FROM usuarios WHERE mail = '$mail'";
//     $qry = $conn->query($sql);

//     if($qry->num_rows <= 0){
//         echo "Error-mail";
//         return;
//     }

//     $sql = "SELECT mail FROM usuarios WHERE mail = '$mail' AND usuario = '$user'";
//     $qry = $conn->query($sql);

//     if($qry->num_rows > 0){

//         $cd_random = rand(1000, 9999);

//         $zql = "UPDATE usuarios SET codigo = '$cd_random' WHERE mail = '$mail' AND usuario = '$user'";
//             $conn->query($zql);


//         $mail = new PHPMailer(true);
        
//         try {
//             // Configuración del servidor SMTP
//             $mail->isSMTP();
//             $mail->Host = 'smtp.hostinger.com'; // Cambia esto por tu servidor SMTP
//             $mail->SMTPAuth = true;
//             $mail->Username = 'restablecimiento@cristianmora.xyz'; // Cambia esto por tu correo
//             $mail->Password = '1ngCr15t14n@'; // Cambia esto por tu contraseña
//             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//             $mail->Port = 587;
        
//             // Remitente y destinatario
//             $mail->setFrom('restablecimiento@cristianmora.xyz', 'Cristian Mora');
//             $mail->addAddress('cr.mora00@gmail.com', 'Cristian Mora');
        
//             $html = "
//             <h1> Recuperacion de Contraseña </h1>
//             <h3> Admin-Files </h3>
//             <p> Este es el codigo que debes utilizar para cambiar tu contraseña: </p> 
//             <br /> <h1>{$cd_random}</h1>
//             <center><p> No intente responder a este correo </p></center>";

//             // Contenido del correo
//             $mail->isHTML(true);
//             $mail->Subject = 'Asunto del correo';
//             $mail->Body = $html;
        
//             $mail->send();
//             echo "Exito";
//             return;
//         } catch (Exception $e) {
//             echo "Error-send{$mail->ErrorInfo}";
//             return;
//         }


//     }
// }


?>