<?php
if (isset($_POST['BTEnvia'])) {

    require("/home/usuario/diretoriodeinstalação/PHPMailer-master/src/PHPMailer.php");
    require("/home/usuario/diretoriodeinstalação/PHPMailer-master/src/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'TLS'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.titan.email";
    $mail->Port = 587; // or 587
    $mail->IsHTML(true);
    $mail->Username = "giovanni.zaghi@matrizit.com.br";
    $mail->Password = "itmatriz11";
    
    
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $email_remetente = "giovanni.zaghi@matrizit.com.br"; // deve ser uma conta de email do seu dominio 

    $email_destinatario = "giovanni.zaghi@matrizit.com.br"; // pode ser qualquer email que receberá as mensagens
    $email_reply = "$email";
    $email_assunto = "Contato site Matriz IT"; // Este será o assunto da mensagem

    $email_conteudo = "Nome = $nome \n";
    $email_conteudo .= "Email = $email \n";
    $email_conteudo .= "Telefone = $telefone \n";
    $email_conteudo .= "Mensagem = $mensagem \n";

    $mail->SetFrom($email_remetente);
    $mail->Subject = $email_assunto;
    $mail->Body = $email_conteudo;
    $mail->AddAddress($email_destinatario);

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Mensagem enviada com sucesso";
    }


    //====================================================
}
?>