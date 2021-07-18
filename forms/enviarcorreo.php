<?php

require("../assets/vendor/PHPMailer/src/PHPMailer.php");
require("../assets/vendor/PHPMailer/src/SMTP.php");

 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "fightsnight.com";
 $mail->Port = 465; //465  or 587
 $mail->IsHTML(true);
 $mail->Username = "contacto@fightsnight.com";
 $mail->Password = "FightsNight";
 $mail->SetFrom("contacto@fightsnight.com");
 $mail->Subject = "Contacto Desde : fightsnight.com";
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 
 $mail->Body = "Nombre: {$name} <br> Email: {$email} <br> Asunto : {$subject} <br> Mensaje : {$message}";
 $mail->AddAddress("contacto@fightsnight.com");
 if(!$mail->Send()) {
 echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
 echo "OK";
 }

 ?>