<?php

$HostName = "177.52.160.16:3306";
$DatabaseName = "cdlcaxia_ticketif";
$HostUser = "cdlcaxia_admin";
$HostPass = "Xx24ASdv$";

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 $json = file_get_contents('php://input');

 $obj = json_decode($json,true);

 $status = $obj['status'];
 $id_tipo_pedido = $obj['id_tipo_pedido'];
 $mat = $obj['aluno_matricula'];
 $tipo_id = $obj['tipo_id'];
 $usuario_id = $obj['usuario_id'];
 $id_dia_semana = $obj['id_dia_semana'];
 $dataExp = $obj['dataExp'];
 $dataUnico = $obj['dataUnico'];
 $justificativa = $obj['justificativa'];
 $pagamento = $obj['pagamento'];

 $requestQuery = "INSERT INTO `ticket` (
	 `id`, 
	 `dataEm`, 
	 `status`, 
	 `aluno_matricula`, 
	 `tipo_id`, 
	 `usuario_id`, 
	 `id_tipo_pedido`, 
	 `id_dia_semana`, 
	 `dataExp`, 
	 `dataUnico`,
	 `justificativa`,
	 `pagamento`
	 ) 
 VALUES (
	NULL, 
	CURRENT_TIME(), 
	'$status', 
	'$mat', 
	'$tipo_id', 
	'$usuario_id', 
	'$id_tipo_pedido', 
	'$id_dia_semana', 
	DATE_ADD(CURRENT_DATE(), INTERVAL 3 MONTH), 
	'$dataUnico',
	'$justificativa',
	'$pagamento'
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