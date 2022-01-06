
<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:rods-data-server-01.database.windows.net,1433; Database = Data_Rods", "admin-rods", "roods-pwd@1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "admin-rods", "pwd" => "roods-pwd@1", "Database" => "Data_Rods", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0,'CharacterSet' => 'UTF-8');
$serverName = "tcp:rods-data-server-01.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn === false){
    die( print_r( sqlsrv_errors(), true));
}    
else{
    echo("Success");
}
?>