<?php

$table = 'data_rods_test';
//$table = 'data_rods';

$primaryKey = 'ID';
$serverName = "tcp:rods-data-server-01.database.windows.net,1433";
//$driver = '{SQL Server}';
/* "Driver" => "{ODBC Driver 17 for SQL Server}" */
/*  $connectionOptions = array("DataBase"=>"Data-Rods","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
'CharacterSet' => 'UTF-8'); */
$connectionOptions = array(
    "PWD" => "roods-pwd@1",
   "DataBase"=>"Data-Rods",
   "UID" => "admin-rods"
);


$columns = array(
   array('db' => 'DIVISION', 'dt' => 0),
    array('db' => 'Salutation', 'dt' => 1),
    array('db' => 'Salutaion email', 'dt' => 2),
    array('db' => 'First Name', 'dt' => 3),
    array('db' => 'Last Name', 'dt' => 4),
    array('db' => 'Sexe', 'dt' => 5),
    array('db' => 'EMAIL', 'dt' => 6),
    array('db' => 'Preferred Language', 'dt' => 7),
    array('db' => 'Phone Account', 'dt' => 8),
    array('db' => 'Mobile', 'dt' => 9),
    array('db' => 'FAX', 'dt' => 10),
   array('db' => 'ID', 'dt' => 11),
    
);
$sql_details = array(
   'user' => $connectionOptions['UID'],
   'pass' => $connectionOptions['PWD'],
   'db'   => $connectionOptions['DataBase'],
   'host' => $serverName
   
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* If you just want to use the basic configuration for DataTables with PHP
* server-side, there is no need to edit below this line.
*/

require( 'ssp.class.php' );
// require '../../config/ssp.class.php';
echo json_encode(
   SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

?>