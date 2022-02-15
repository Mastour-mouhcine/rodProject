<?php
 $serverName = "rods-data-server-01.database.windows.net"; // update me
 $connectionOptions = array("DataBase"=>"Data_Rods","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
 'CharacterSet' => 'UTF-8');
 //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if( $conn === false){
        die( print_r( sqlsrv_errors(), true));
    }     
    $result_seg_1 = $_GET['var_seg1'];
    $result_seg_2 = $_GET['var_seg2'];
    $result_seg_3 = $_GET['var_seg3'];
    $result_seg_4 = $_GET['var_seg4'];
    $result_seg_5 = $_GET['var_seg5'];
    $result_seg_6 = $_GET['var_seg6'];
    $result_seg_7 = $_GET['var_seg7'];
    $string_seg_1 ='';
    $string_seg_2 ='';
    $string_seg_3 ='';
    $string_seg_4 ='';
    $string_seg_5 ='';
    $string_seg_6 ='';
    $string_seg_7 ='';
    if ($result_seg_1 != '') {
        $string_seg_1 = " where ". $result_seg_1;
    }
    if ($result_seg_2 != '') {
        $string_seg_2 = " and ". $result_seg_2;
        if($result_seg_1 ==''){
            $string_seg_2 = " where ". $result_seg_2;
        }
    }
    if ($result_seg_3 != '') {
        $string_seg_3 = " and ". $result_seg_3;
        if($result_seg_1 =='' && $result_seg_2 ==''){
            $string_seg_3 = " where ". $result_seg_3;
        }
    }
    if ($result_seg_4 != '') {
        $string_seg_4 = " and ". $result_seg_4;
        if($result_seg_1 =='' && $result_seg_2 =='' && $result_seg_3 ==''){
            $string_seg_4 = " where ". $result_seg_4;
        }
    }
    if ($result_seg_5 != '') {
        $string_seg_5 = " and ". $result_seg_5;
        if($result_seg_1 =='' && $result_seg_2 =='' && $result_seg_3 =='' && $result_seg_4 ==''){
            $string_seg_5 = " where ". $result_seg_5;
        }
    }
    if ($result_seg_6 != '') {
        $string_seg_6 = " and ". $result_seg_6;
        if($result_seg_1 =='' && $result_seg_2 =='' && $result_seg_3 =='' && $result_seg_4 =='' && $result_seg_5 ==''){
            $string_seg_6 = " where ". $result_seg_6;
        }
    }
    if ($result_seg_7 != '') {
        $string_seg_7 = " and ". $result_seg_7;
        if($result_seg_1 =='' && $result_seg_2 =='' && $result_seg_3 =='' && $result_seg_4 =='' && $result_seg_5 =='' && $result_seg_6 ==''){
            $string_seg_7 = " where ". $result_seg_7;
        }
    }
    
    $tsql= "SELECT * FROM [dbo].[Segmentation1] $string_seg_1 $string_seg_2 $string_seg_3 $string_seg_4 $string_seg_5 $string_seg_6 $string_seg_7";
    $getResults= sqlsrv_query($conn, $tsql);
    //echo ("Reading data from table");
    $rows = array();
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
        $rows[] = array_map('stripslashes', $row);
        //echo "id: " . $row["Salutation"]. " <br>";
    }
    echo json_encode($rows);
    //sqlsrv_free_stmt($getResults);
    sqlsrv_close( $conn); 
?>