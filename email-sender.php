
<?php
if (isset($_POST['BTEnvia'])) {

    require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.titan.email";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "giovanni.zaghi@matrizit.com.br";
    $mail->Password = "itmatriz11";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];
    
    $email_conteudo = '<body>

    <!-- HEADER -->
    <section style="background-color: #000021; width: 100%; height: 100%;">
        <div class="container">
            <div class="row" >
                <div style="justify-content: center; margin: auto; align-items: center; display: flex;">
                    <a href="https://matrizit.com.br" target="_blank"><img style="margin-top: 10%; margin-bottom: 10%;" src="https://matrizit.com.br/assets/images/logo-horizontal.png"></a>
                </div>
                    <div class="col-sm-12" style="background-color: #FFFFFF; border-radius: 30px; justify-content: center; width: 50%; margin: auto; padding: 20px;">
                        <br><br>
                        <h3>Dados fornecidos para contato !</h3>
                        <br><br>
                        <p><b>Nome</b> :  '. $nome .'</p>
                        <p><b>Email</b> : '. $email .'</p>
                        <p><b>Telefone</b> : '.$telefone .'</p>
                        <p><b>Mensagem</b> : '. $mensagem .'</p>
                        <br><br>
                    </div>
                    
                    <div style="justify-content: center; margin: auto; align-items: center; display: flex;"><p style="color: #FFFFFF;"><br>
                        <br>Entraremos em contato em breve para mais detalhes.<br></p></div>

                        <div style="justify-content: center; margin: auto; align-items: center; display: flex;"><p style="color: #FFFFFF;"><br>
                        <a href="https://www.instagram.com/matrizit/" target="_blank">
                        
                                <i class="btn-floating m-0" role="button"><img style="width: 30px ;" src="https://matrizit.com.br/assets/images/insta.png"></i>
                                </a>
                            </a></div>
                        
                        <div style="justify-content: center; margin: auto; align-items: center; display: flex;">
                            <a href="https://matrizit.com.br" target="_blank"><img style="margin-top: 10%; margin-bottom: 10%; width: 250px;" src="https://matrizit.com.br/assets/images/logo-email.png" ></a>
                        </div>
                            
                            
                       
               
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="https://matrizit.com.br/assets/js/bootstrap.js"></script>
    <script src="https://matrizit.com.br/assets/js/bootstrap-reboot.js"></script>
    

</body>';
    

    $mail->SetFrom("giovanni.zaghi@matrizit.com.br");
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

</html>