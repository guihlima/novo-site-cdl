<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


if (isset($_POST['submit'])) {

    $razao = $_POST['razao'];
    $fantasia = $_POST['fantasia'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $fone = $_POST['fone'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $site = $_POST['site'];
    $email = $_POST['email'];
    $titular = $_POST['titular'];
    $telefone = $_POST['telefone'];
    $funcionario = $_POST['funcionario'];
    
    $mail = new PHPMailer(true);

    try {                   
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'guihlimadev@gmail.com';                    
        $mail->Password   = 'xeyllyatfkjuvxcp';                             
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                                    

        $mail->setFrom('admcdlcaxiasma@gmail.com');
        $mail->addAddress('admcdlcaxiasma@gmail.com');     
        // $mail->addAddress('ellen@example.com');          
        // $mail->addReplyTo('guihlimadev@gmail.com', 'Information');
        $mail->addReplyTo($email, $titular);

        $mail->isHTML(true);                                
        $mail->Subject = 'Formulario do Site';

        

        $body = "<h3>Informações do Associado</h3>
             Razão Social: $razao <br>
             Nome Fantasia: $fantasia <br>
             CNPJ: $cnpj <br>
             Endereço: $endereco <br>
             Fone/Fax: $fone <br>
             Bairro: $bairro <br>
             CEP: $cep <br>
             Cidade: $cidade <br>
             Estado: $estado <br>
             Site: $site <br>
             Email: $email <br> 
             Nome do Titular: $titular <br>
             Telefone/WhatsApp: $telefone <br>
             Funcionario: $funcionario.
            ";


        $mail->Body    = $body;

        $mail->send();
        // echo 'Email enviado com sucesso';
        header('location: redirecionar.html');
        alert("Email enviado com sucesso");
    } catch (Exception $e) {
        echo "Erro ao enviar este email: {$mail->ErrorInfo}";
    }
}else{
    echo "Erro ao enviar email, acesso nao via formulario";
    header('location: form-associado.php');
}

?>