<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

$email=$_POST['mail'];
$name=$_POST['nombre'];
$clientSub=$_POST['asunto'];
$txt=$_POST['txtMsg'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'gloriaac98@gmail.com';                 // SMTP username
    $mail->Password = 'makeachange';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('gloriaac98@gmail.com', 'Contacto Creasur');
    $mail->addAddress($email, $name);     // Add a recipient
   

    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $clientSub;
    $mail->Body    = '<h1 style="color:blue" >ALGUIEN DESEA CONTACTARTE</b></h1><br>
    <table border="1"> 
        <tr>
            <th>NOMBRE</th> 
            <th>ASUNTO</th>
            <th>Descripcion</th>
        </tr> 
        <td>'.$name.'</td>
        <td>'.$clientSub.'</td>
        <td>'.$txt.'</td>
    </table>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>