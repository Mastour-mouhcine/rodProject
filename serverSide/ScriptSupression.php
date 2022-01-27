<?php
 $serverName = "rods-data-server-01.database.windows.net"; // update me
 $connectionOptions = array("DataBase"=>"Data-Rod-Input","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
 'CharacterSet' => 'UTF-8');
 //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if( $conn === false){
        die( print_r( sqlsrv_errors(), true));
    }     
    $tsql= "Truncate table [dbo].[data_input_test]";
    $getResults= sqlsrv_query($conn, $tsql);
    //echo ("Reading data from table");
  
        //echo "id: " . $row["Salutation"]. " <br>";
    
   echo('Terminer');
    //sqlsrv_free_stmt($getResults);
    sqlsrv_close( $conn); 
?>