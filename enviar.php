<?php
$email = '';
$mensagem = '';

require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->Debugoutput = 'html';
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "servidor.hostgator.com.br";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "giovanni.zaghi@matrizit.com.br";
$mail->Password = "itmatriz11";
$mail->SetFrom('giozaghi.freitas@gmail.com');
$mail->Subject = "Contato via site";
$mail->Body = 'quero fazer um orçamento';
$mail->AddAddress("giovanni.zaghi@matrizit.com.br");
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Mensagem enviada com sucesso";
}
?>