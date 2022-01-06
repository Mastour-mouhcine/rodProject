<?php
 $serverName = "rods-data-server-01.database.windows.net"; // update me
/*  $connectionOptions = array("DataBase"=>"Data-Rods","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
 'CharacterSet' => 'UTF-8'); */
$driver = '{ODBC Driver 13 for SQL Server}';
$DataBase = "Data-Rods";
$user = "admin-rods";
 $connectionOptions = array(
    "PWD" => "roods-pwd@1",
   "DataBase"=>"Data-Rods",
   "UID" => "admin-rods",
   "driver" => "{ODBC Driver 17 for SQL Server}"
);
 $sql_details = array(
    'user' => $connectionOptions['UID'],
    'pass' => $connectionOptions['PWD'],
    'driver' => $connectionOptions['driver'],
    'db'   => $connectionOptions['DataBase'],
    'host' => $serverName
    
 );
 $driver = '{ODBC Driver 13 for SQL Server}';
 //Establishes the connection
    /* $conn = sqlsrv_connect($serverName, $connectionOptions);
    if( $conn === false){
        die( print_r( sqlsrv_errors(), true));
    }    */  
    try {
        
       // $db = new PDO("odbc:Driver={$driver};Server={$serverName};Database={$connectionOptions['DataBase']}",$connectionOptions['UID'],$connectionOptions['PWD']);
        $db = new PDO("odbc:Driver=$driver;Server=$server;Database=$DataBase",$user,
            $sql_details['pass'],array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
    }
    catch (PDOException $e) {
        echo 'Message: ' .$e->getMessage();
    }
    echo("Hii");
?>