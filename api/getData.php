<?php
    require('connection.php');
    $makeQuery = "SELECT * FROM usuarios";
    $stamement = $connection->prepare($makeQuery);
    $stamement->execute();

    $myarray = array();
    while($resultFrom = $stamement -> fetch()){
        array_push(
            $myarray, array(
                "id"=>$resultFrom['id'],
                "email"=>$resultFrom['email'],
                "pass"=>$resultFrom['pass'],
                "nome"=>$resultFrom['nome'],
            )
        );
    }

echo json_encode($myarray);
?>