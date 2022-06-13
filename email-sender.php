<meta charset="utf-8"/>
<?php
if (isset($_POST['BTEnvia'])) {

    require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.titan.email";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "giovanni.zaghi@matrizit.com.br";
    $mail->Password = "itmatriz11";
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $email_conteudo = '<!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Matriz-IT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    
    </head>
    
    <body>
    
        <!-- HEADER -->
        <section style="background-color: #000021; width: 100%; height: 100%;">
            <div class="container">
                <div class="row" >
                    <div class="text-center">
                        <a class="navbar-brand" href="matrizit.com.br" target="_blank"><img class="margin" src="matrizit.com.br/assets/images/logo-horizontal.png"></a>
                    </div>
                        <div class="col-sm-12 text-center justify-content-center" style="background-color: #FFFFFF; border-radius: 30px; justify-content: center; width: 50%; margin: auto; ">
                            <br><br>
                            <h5>Informações dadas para contato !</h5>
                            <br><br>
                            <p><b>Nome</b> : <?php $nome ?></p>
                            <p><b>Email</b> :<?php $email ?></p>
                            <p><b>Telefone</b> : <?php $telefone ?></p>
                            <p><b>Mensagem</b> : <?php $nome ?></p>
                            <br><br>
                        </div>
                        
                        <div class="text-center"><p class="text-white"><br>
                            <br>Entraremos em contato em breve para mais informações.<br></p><a href="https://www.instagram.com/matrizit/" target="_blank">
                                <i class="btn-floating m-0" role="button"><img style="width: 30px ;" src="matrizit.com.br/assets/images/insta.png"></i>
                            </a></div>
                            
                            <div class="text-center">
                                
                                <a class="navbar-brand" href="matrizit.com.br" target="_blank"><img class="margin" src="matrizit.com.br/assets/images/logo-email.png" width="20%"></a>
                            </div>
                   
                </div>
            </div>
        </section>
    
        <!-- JS -->
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/bootstrap-reboot.js"></script>
        
    
    </body>
    
    </html>';
    

    $mail->SetFrom("giovanni.zaghi@matrizit.com.br");
    $mail->ClearReplyTos();
    $mail->addReplyTo($email, $nome);
    $mail->Subject = "Contato site Matriz IT";
    $mail->Body = $email_conteudo;
    $mail->AddAddress("giovanni.zaghi@matrizit.com.br");

    if (!$mail->Send()) {
        echo "<script>Alert('Erro ao tentar enviar email')</script>";
    } else {
        echo "<script>Alert('Mensagem enviada com sucesso !')</script>";
    }

}
?>