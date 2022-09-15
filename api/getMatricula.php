<?php

 $HostName = "177.52.160.16:3306";
 $DatabaseName = "cdlcaxia_ticketif";
 $HostUser = "cdlcaxia_admin";
 $HostPass = "Xx24ASdv$";

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 $json = file_get_contents('php://input');

 $obj = json_decode($json,true);

 $email = $obj['email'];

 $requestQuery = "SELECT matricula FROM `usuario` WHERE email = '$email'";

 $check = mysqli_fetch_array(mysqli_query($con,$requestQuery));
 
 if(isset($check)){

    $SuccessMSG = json_encode($check);
    echo $SuccessMSG;

}else{
   $InvalidMSG = 'Erro' ;
   $InvalidMSGJSon = json_encode($InvalidMSG);
    echo $InvalidMSGJSon ;
}

 mysqli_close($con);

?>
