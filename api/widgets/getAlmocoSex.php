<?php

 $HostName = "177.52.160.16:3306";
 $DatabaseName = "cdlcaxia_ticketif";
 $HostUser = "cdlcaxia_admin";
 $HostPass = "Xx24ASdv$";

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 $json = file_get_contents('php://input');

 $obj = json_decode($json,true);

 $matricula = $obj['matricula'];

 $requestQuery = "SELECT EXISTS(SELECT * FROM ticket WHERE aluno_matricula = '$matricula' AND id_dia_semana = 6 AND tipo_id = 2  AND status = 1 AND id_tipo_pedido = 1)";

 $check = mysqli_fetch_array(mysqli_query($con,$requestQuery));
 
 if(isset($check)){
    $SuccessMSG = json_encode($check[0]);
    echo $SuccessMSG;

}else{
   $InvalidMSG = 'Erro';
   $InvalidMSGJSon = json_encode($InvalidMSG);
    echo $InvalidMSGJSon ;
}

 mysqli_close($con);

?>
