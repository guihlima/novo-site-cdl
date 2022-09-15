<?php
    require('connection.php');

	$json = file_get_contents('php://input');
	$obj = json_decode($json,true);

	$matricula = $obj['matricula'];

    $makeQuery = "SELECT * FROM ticket WHERE status = 0 ORDER BY dataEm ASC";

    $stamement = $connection->prepare($makeQuery);
    $stamement->execute();

    $myarray = array();
    while($resultFrom = $stamement -> fetch()){
        array_push(
            $myarray, array(
                "id"=>$resultFrom['id'],
				"dataEm"=>$resultFrom['dataEm'],
				"status"=>$resultFrom['status'],
				"aluno_matricula"=>$resultFrom['aluno_matricula'],
				"usuario_id"=>$resultFrom['usuario_id'],
				"id_tipo_pedido"=>$resultFrom['id_tipo_pedido'],
				"tipo_id"=>$resultFrom['tipo_id'],
				"id_dia_semana"=>$resultFrom['id_dia_semana'],
				"dataExp"=>$resultFrom['dataExp'],
				"dataUnico"=>$resultFrom['dataUnico'],
                "pagamento"=>$resultFrom['pagamento'],
            )
        );
    }

echo json_encode($myarray);
?>