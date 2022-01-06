<?php
 $serverName = "rods-data-server-01.database.windows.net"; // update me
/*  $connectionOptions = array("DataBase"=>"Data-Rods","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
 'CharacterSet' => 'UTF-8'); */
$driver = '{ODBC Driver 13 for SQL Server}';
$DataBase = "Data-Rods";
$user = "admin-rods";
$pass = "roods-pwd@1";
 //Establishes the connection
    /* $conn = sqlsrv_connect($serverName, $connectionOptions);
    if( $conn === false){
        die( print_r( sqlsrv_errors(), true));
    }    */  
    try {
        
       // $db = new PDO("odbc:Driver={$driver};Server={$serverName};Database={$connectionOptions['DataBase']}",$connectionOptions['UID'],$connectionOptions['PWD']);
        $db = new PDO("odbc:Driver=$driver;Server=$serverName;Database=$DataBase",$user,$pass);
    }
    catch (PDOException $e) {
        echo 'Message: ' .$e->getMessage();
    }
    echo("Hii");
?>