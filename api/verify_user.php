<?php

$HostName = "177.52.160.16:3306";
$DatabaseName = "cdlcaxia_ticketif";
$HostUser = "cdlcaxia_admin";
$HostPass = "Xx24ASdv$";

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 $json = file_get_contents('php://input');

 $obj = json_decode($json,true);

 $mat = $obj['matricula'];

$veryfyQuery = "SELECT nome FROM aluno where aluno.matricula = '$mat';";

$check = mysqli_fetch_array(mysqli_query($con,$veryfyQuery));

   if(isset($check)){
		$onLoginSuccess = 'Existe';
		$SuccessMSG = json_encode($onLoginSuccess);
		echo $SuccessMSG;
   
	}else{
		$onLoginSuccess = 'Não existe';
		$SuccessMSG = json_encode($onLoginSuccess);
		echo $SuccessMSG;
	}

mysqli_close($con);

?>