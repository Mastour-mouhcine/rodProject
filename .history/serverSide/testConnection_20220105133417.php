<?php
 $serverName = "rods-data-server-01.database.windows.net"; // update me
 $connectionOptions = array("DataBase"=>"Data-Rods","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
 'CharacterSet' => 'UTF-8');
 $driver = '{ODBC Driver 13 for SQL Server}';
 //Establishes the connection
    /* $conn = sqlsrv_connect($serverName, $connectionOptions);
    if( $conn === false){
        die( print_r( sqlsrv_errors(), true));
    }    */  
    try {
        
        $db = new PDO("odbc:Driver=$driver;Server=$serverName;Database=$connectionOptions['DataBase']",$connectionOptions['UID'],
        $connectionOptions['PWD']);
    }
    catch (PDOException $e) {
        self::fatal(
            "An error occurred while connecting to the database. ".
            "The error reported by the server was: ".$e->getMessage()
        );
    }
    echo("Hii");
    sqlsrv_close( $conn); 
?>