<?php

try{
    $connection = new PDO(
    'mysql:host=177.52.160.16:3306; dbname=cdlcaxia_ticketif',
    'cdlcaxia_admin',
    'Xx24ASdv$'
    );

    $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $exc){
     echo $exc -> getMessage();
     die("erro");
}

?>
