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

 $loginQuery = "select * from usuario where email = '$email' and senha = '$pass'";

 $check = mysqli_fetch_array(mysqli_query($con,$loginQuery));

	if(isset($check)){
		 $onLoginSuccess = 'Login Matched';
		 $SuccessMSG = json_encode($onLoginSuccess);
		 echo $SuccessMSG;
	
	 }else{
		$InvalidMSG = 'Usuario ou senha incorretos' ;
		$InvalidMSGJSon = json_encode($InvalidMSG);
		 echo $InvalidMSGJSon ;
	 }

 mysqli_close($con);

?>
