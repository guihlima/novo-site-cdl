<?php	
	include 'envia.php';	
?>
<html>
	<head>
		<meta charset="utf8">
		<title>Formulário de contato</title>

		<!-- Aqui adiciona o script do ReCaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<link rel="stylesheet" href="styleForm.css">
	</head>
	<body>
		<div class="container">
			<h1>Entre em Contato! Responderemos em Breve</h1>
			<form method="POST" action="formulario-contato.php">
				<label>Digite seu nome:
					<input type="text" name="nome" value="" placeholder="ex: Leonardo" required>
				</label>
				<label>Digite seu e-mail:
					<input type="email" name="email" value="" placeholder="ex: almeida@gmail.com" required>
				</label>
				<label>Digite o assunto:
					<input type="text" name="assunto" value="" placeholder="ex: Orçamento" required>
				</label>
				<label>Digite sua mensagem:
					<input type="text" name="msg" value="" placeholder="Digite sua mensagem aqui" required>
				</label>
				
				<!-- Div do ReCaptcha foi adicionado no final do formulário -->
				<div class="g-recaptcha" data-sitekey="6LeAyesUAAAAABZMeJ3o2UxvbmpTIm9mHTDYOKpA"></div>
				
				<input class="send" type="submit">
			</form>
		</div>
	</body>
</html>