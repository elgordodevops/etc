<?php
try{
    $dbh = new PDO("sqlsrv:Server=192.168.0.100,1433;Database=TestDB", "user", "pass");
    die(json_encode(array('outcome' => true, 'message' => 'Conectado')));
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}
?>