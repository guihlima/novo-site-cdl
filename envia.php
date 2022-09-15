<?php

//Defino a Chave do meu site
$secret_key = '6LeAyesUAAAAAHJPbgf9i7n1pFSVlx6aXKqyhTuz';

//Pego a validação do Captcha feita pelo usuário
$recaptcha_response = $_POST['g-recaptcha-response'];

// Verifico se foi feita a postagem do Captcha 
if(isset($recaptcha_response)){
		
	// Valido se a ação do usuário foi correta junto ao google
	$answer = 
		json_decode(
			file_get_contents(
				'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.
				'&response='.$_POST['g-recaptcha-response']
			)
		);

	// Se a ação do usuário foi correta executo o restante do meu formulário
	if($answer->success) {
		
		// Carrego a classe PHPMailer através do Autoload
		include "PHPMailerAutoload.php";

		// Instancio a classe PHPMailer
		$msg = new PHPMailer();

		// Faço todas as configurações de SMTP para o envio da mensagem
		$msg->CharSet = "UTF-8";
		$msg->isSMTP();                                      
		$msg->Host = 'smtp.cdlcaxias.org.br';  
		$msg->SMTPAuth = true;                              
		$msg->Username = 'comercial@cdlcaxias.org.br';                 
		$msg->Password = '2MqYxxGi!';                           
		$msg->Port = 587;   
		$msg->SMTPAutoTLS = false;
		$msg->AuthType = 'PLAIN';

		//Defino o remetente da mensagem
		$msg->setFrom('comercial@cdlcaxias.org.br','comercial@cdlcaxias.org.br');

		// Defino a quem esta mensagem será respondida, no caso, para o e-mail
		// que foi cadastrado no formulário
		$msg->addReplyTo($_POST['email'], $_POST['nome']);
		
		// Defino a mensagem como mensagem de texto (Ou seja não terá formatação HTML)
		$msg->IsHTML(false);

		// Adiciono o destinatário desta mensagem, no caso, 
		//minha conta de contatos comerciais.
		$msg->AddAddress('atendimento@cdlcaxias.org.br', 'atendimento@cdlcaxias.org.br','teste@cdlcaxias.org.br', 'guihlimadeveloper@gmail.com');
		
		// Defino o assunto que foi digitado no formulário
		$msg->Subject  = $_POST['assunto'];

		// Defino a mensagem que foi digitada no formulário
		$msg->Body = $_POST['msg'];

		// Defino a mensagem alternativa que foi digitada no formulário.
		// Esta mensagem é utilizada para validações AntiSPAM e por isto
		// é muito recomendado que utilize-a
		$msg->AltBody = $_POST['msg'];

		// Faço o envio da mensagem
		$enviado = $msg->Send();
		
		// Limpo todos os registros de destinatários e arquivos 
		$msg->ClearAllRecipients();

		// Caso a mensagem seja enviada com sucesso ela retornará sucesso
		// senão, ela retornará o erro ocorrido			
		if ($enviado){
			echo "E-mail enviado com sucesso!";
			header("location:index.html");
		}
		else {
			echo "Não foi possível enviar o e-mail.";
			echo "<b>Informações do erro:</b> " . $msg->ErrorInfo;
		}
	}

	// Caso o Captcha não tenha sido validado 
	//retorno uma mensagem de erro. 
	else {
		echo "Por favor faça a verificação do captcha abaixo";
	}
}
