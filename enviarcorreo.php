
<?php
$name = htmlspecialchars($_POST['n'],ENT_QUOTES,'UTF-8');
$email = htmlspecialchars($_POST['e'],ENT_QUOTES,'UTF-8');
$interesado = htmlspecialchars($_POST['i'],ENT_QUOTES,'UTF-8');
$phone = htmlspecialchars($_POST['p'],ENT_QUOTES,'UTF-8');
$message = htmlspecialchars($_POST['m'],ENT_QUOTES,'UTF-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
	);
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'dm249833@gmail.com';                     // SMTP username
    $mail->Password   = 'oojhqihgffhuyqgn';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('dm249833@gmail.com', 'DUMA');
    $mail->addAddress($email, $name);     // Add a recipient             

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = ''.$name.', porfavor responda a este correo para poder ayudarle';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table style="border: 1px solid black;width: 100%;">
            <thead>
                <tr>
                    <td style="text-align: center;background: #a10303;color:#FFFFFF" colspan="2">
                        <h1><b>Hola, '.$name.' te damos la bienvenida a Cotizaciones Duma </b></h1>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;" width="10%">
                    <img height="110" width="300" src="https://i.ibb.co/yWvNyRy/logo.png" alt="logo" border="0">
                    </td>
                    <tr><th align="center" style="text-align: center;" ><span style="font-size: 15px;">'.utf8_decode('Telefono: '.$phone).'</span></th></tr>
                    <tr><th align="center" style="text-align: center;" ><span style="font-size: 15px;">'.utf8_decode('Contacto: '.$interesado ).'</span></th></tr>
                    <tr><th align="center" style="text-align: center;" ><span style="font-size: 15px;">'.utf8_decode('Mensaje: '.$message ).'</span></th></tr>
                </tr>
            </thead>
        </table>
    </body>
    </html>';

    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 0;
}