<?php
 $serverName = "rods-data-server-01.database.windows.net"; // update me
 $connectionOptions = array("DataBase"=>"Data-Rod-Input","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
 'CharacterSet' => 'UTF-8');
 //Establishes the connection
 $conn = sqlsrv_connect($serverName, $connectionOptions);
 $tsql= "SELECT * FROM [dbo].[Import_Zoho_Compte_test]";
 $getResults= sqlsrv_query($conn, $tsql);
 //echo ("Reading data from table");
 $rows = array();
 if ($getResults == FALSE)
     echo (sqlsrv_errors());
 while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    //$rows[] = $row;
    $rows[] = array_map('stripslashes', $row);

    //echo "id: " . $row["Account Number"]. " <br>";
 }
 echo json_encode($rows);
 //sqlsrv_free_stmt($getResults);
?>