<?php

$HostName = "177.52.160.16:3306";
$DatabaseName = "cdlcaxia_ticketif";
$HostUser = "cdlcaxia_admin";
$HostPass = "Xx24ASdv$";

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 $json = file_get_contents('php://input');

 $obj = json_decode($json,true);

 $mat = $obj['aluno_matricula'];
 $status = $obj['status'];
 $tipo_id = $obj['tipo_id'];
 $usuario_id = $obj['usuario_id'];
 
 $segunda = $obj['segunda'];
 $terca = $obj['terca'];
 $quarta = $obj['quarta'];
 $quinta = $obj['quinta'];
 $sexta = $obj['sexta'];
 $sabado = $obj['sabado']; 
 $domingo = $obj['domingo']; 

 $requestQuery = "INSERT INTO `ticket_semanal` (
	 `id`,
	 `dataEm`, 
	 `status`, 
	 `aluno_matricula`, 
	 `tipo_id`, 
	 `usuario_id`, 
	 `segunda`, 
	 `terca`, 
	 `quarta`, 
	 `quinta`, 
	 `sexta`, 
	 `sabado`,
	 `domingo`
	) VALUES (
		NULL, 
		CURRENT_TIME(), 
		'$status', 
		'$mat', 
		'$tipo_id', 
		'$usuario_id', 
		'$segunda', 
		'$terca', 
		'$quarta', 
		'$quinta', 
		'$sexta',
		'$sabado',
		'$domingo'
		);";

 $check = mysqli_query($con,$requestQuery);

	if(isset($check)){
		 $onLoginSuccess = 'Login Matched';
		 $SuccessMSG = json_encode($onLoginSuccess);
		 echo $SuccessMSG;
	
	 }else{
		$InvalidMSG = 'Falha' ;
		$InvalidMSGJSon = json_encode($InvalidMSG);
		 echo $InvalidMSGJSon ;
	}

 mysqli_close($con);
?>



