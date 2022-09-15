<?php

 $HostName = "177.52.160.16:3306";
 $DatabaseName = "cdlcaxia_ticketif";
 $HostUser = "cdlcaxia_admin";
 $HostPass = "Xx24ASdv$";

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 $json = file_get_contents('php://input');

 $obj = json_decode($json,true);

 $ticketid = $obj['ticketid'];

 $requestQuery = "UPDATE ticket SET status = 4 WHERE id = '$ticketid'";
 $check = mysqli_fetch_array(mysqli_query($con,$requestQuery));

 mysqli_close($con);

?>
