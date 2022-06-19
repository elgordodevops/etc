<?php
$serverName = "192.168.0.100"; //serverName\instanceName
$connectionInfo = array( "Database"=>"TestDB", "UID"=>"user", "PWD"=>"pass", "TrustServerCertificate"=>true );
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
