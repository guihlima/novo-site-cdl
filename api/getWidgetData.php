<?php
    require('connection.php');
    
    $json = file_get_contents('php://input');
	$obj = json_decode($json,true);


    $matricula = $obj['matricula'];

    $makeQuery = "SELECT id_dia_semana, tipo_id FROM ticket WHERE aluno_matricula = '$matricula'";
    $stamement = $connection->prepare($makeQuery);
    $stamement->execute();

    $myarray = array();
    while($resultFrom = $stamement -> fetch()){
        array_push(
            $myarray, array(
                "id_dia_semana"=>$resultFrom['id_dia_semana'],
                "tipo_id"=>$resultFrom['tipo_id'],
            )
        );
    }

echo json_encode($myarray);
?>