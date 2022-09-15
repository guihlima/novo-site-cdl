<?php

$HostName = "177.52.160.16:3306";
$DatabaseName = "cdlcaxia_ticketif";
$HostUser = "cdlcaxia_admin";
$HostPass = "Xx24ASdv$";

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 $json = file_get_contents('php://input');

 $obj = json_decode($json,true);

 $email = $obj['email'];
 $pass = $obj['senha'];
 $mat = $obj['matricula'];
 $name = $obj['nome'];

$loginQuery = "select * from usuario where email = '$email' or matricula = '$mat'";

$check = mysqli_fetch_array(mysqli_query($con,$loginQuery));

   if(isset($check)){
		$onLoginSuccess = 'Login Matched';
		$SuccessMSG = json_encode($onLoginSuccess);
		echo $SuccessMSG;
   
	}else{
		$signinQuery = "INSERT INTO `usuario` (`id`, `matricula`, `nome`, `senha`, `email`) 
		VALUES (NULL, '$mat', '$name', '$pass', '$email');";
		try {
		mysqli_fetch_array(mysqli_query($con,$signinQuery));
		} catch (Exception $e) {
			echo 'Cadastrado';
		}
	}

mysqli_close($con);

?>