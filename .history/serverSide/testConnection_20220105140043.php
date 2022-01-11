
<?php
// PHP Data Objects(PDO) Sample Code:
$sql_details = array(
    'user' => $connectionOptions['UID'],
    'pass' => $connectionOptions['PWD'],
    'driver' => $connectionOptions['driver'],
    'db'   => $connectionOptions['DataBase'],
    'host' => $serverName
    
 );
 $connectionOptions = array(
    "PWD" => "roods-pwd@1",
   "DataBase"=>"Data-Rods",
   "UID" => "admin-rods",
   "driver" => "{ODBC Driver 13 for SQL Server}"
);
try {
    $conn = new PDO("sqlsrv:server = tcp:{$sql_details['host']},1433; Database = {$sql_details['db']}", $sql_details['user'],  $sql_details['pass']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
/* $connectionInfo = array("UID" => "admin-rods", "pwd" => "roods-pwd@1", "Database" => "Data_Rods", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rods-data-server-01.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn === false){
    die( print_r( sqlsrv_errors(), true));
}    
else{
    echo("Success");
} */
?>