
<?php

$table = 'data_rods_test';
//$table = 'data_rod_all';
$primaryKey = 'ID';
$serverName = "rods-data-server-01.database.windows.net";
/*  $connectionOptions = array("DataBase"=>"Data-Rods","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
'CharacterSet' => 'UTF-8'); */
$connectionOptions = array(
   "DataBase"=>"Data-Rods",
   "UID" => "admin-rods",
   "PWD" => "roods-pwd@1"
   "Driver" => "{ODBC Driver 17 for SQL Server}"
);


$columns = array(
   array('db' => 'ID', 'dt' => 0),
   array('db' => 'DIVISION', 'dt' => 1),
   array('db' => 'Salutation', 'dt' => 2),

);
$sql_details = array(
   'user' => $connectionOptions['UID'],
   'pass' => $connectionOptions['PWD'],
   'db'   => $connectionOptions['DataBase'],
   'host' => $serverName,
   'driver'   => $connectionOptions['Driver'],
);
/* // SQL server connection information
$sql_details = array(
   'user' => 'admin',
   'pass' => 'rod@2021',
   'db' => 'rod_all',
   'host' => '135.148.9.103'
); */


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


