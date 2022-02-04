1<?php
 $serverName = "rods-data-server-01.database.windows.net"; // update me
 $connectionOptions = array(
     "Database" => "Data-Rod-Input", // update me
     "Uid" => "admin-rods", // update me
     "PWD" => "roods-pwd@1", // update me
     "CharacterSet"=>"UTF-8"
 );
 //Establishes the connection
 $conn = sqlsrv_connect($serverName, $connectionOptions);
// Check connection
if( $conn === false){
    die( print_r( sqlsrv_errors(), true));
}  
$sql = "SELECT * FROM data_input_test";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql , $params, $options );

$row_count = sqlsrv_num_rows( $stmt );
   
if ($row_count === false){
    echo $row_count;
}
else{
    echo $row_count;
}

sqlsrv_close($conn);

?>