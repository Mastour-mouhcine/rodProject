<?php
 $serverName = "rods-data-server-01.database.windows.net"; // update me
 /* $connectionOptions = array(
     "Database" => "Data-Rod-Input", // update me
     "Uid" => "admin-rods", // update me
     "PWD" => "roods-pwd@1", // update me
     "CharacterSet" => "utf8_decode"
 ); */
 $connectionOptions = array("DataBase"=>"Data-Rod-Input","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
 'CharacterSet' => 'UTF-8');
 //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if( $conn == false){
        die( print_r( sqlsrv_errors(), true));

    }    
    $tsql= "SELECT * FROM [dbo].[data_input_test]";
    $getResults= sqlsrv_query($conn, $tsql);
    //echo ("Reading data from table");
    $rows = array();
    if ($getResults == FALSE)
        //echo (sqlsrv_errors());
        die( print_r( sqlsrv_errors(), true));
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
        //$rows[] = array_map('utf8_encode', $row);
        $rows[] = utf8_decode($row);
        //$rows[] = array_push($rows, $row);
         print_r($rows);
        //echo "id: " . $row["Salutation"]. " <br>";
    }
    //echo json_encode($rows,JSON_UNESCAPED_UNICODE);
    /*echo json_encode($rows); */
    //sqlsrv_free_stmt($getResults);
    sqlsrv_close( $conn); 
?>