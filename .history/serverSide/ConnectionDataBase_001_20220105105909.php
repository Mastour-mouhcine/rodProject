
<?php

$table = 'data_rods_test';
//$table = 'data_rod_all';
$primaryKey = 'ID';
$serverName = "rods-data-server-01.database.windows.net";
$driver = '{SQL Server}';
$pass = "roods-pwd@1";
$user =  "admin-rods";
//$driver = '{ODBC Driver 17 for SQL Server}';
/* "Driver" => "{ODBC Driver 17 for SQL Server}" */
/*  $connectionOptions = array("DataBase"=>"Data-Rods","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
'CharacterSet' => 'UTF-8'); */
$connectionOptions = array(
    "PWD" => "roods-pwd@1",
   "DataBase"=>"Data-Rods",
   "UID" => "admin-rods",
);


$columns = array(
   array('db' => 'ID', 'dt' => 0),
   array('db' => 'DIVISION', 'dt' => 1),
   array('db' => 'Salutation', 'dt' => 2),

);
$sql_details = array(
   /* 'user' => $connectionOptions['UID'],
   'pass' => $connectionOptions['PWD'], */
   'user' => $pass,
   'pass' => $user,
   'db'   => $connectionOptions['DataBase'],
   'host' => $serverName,
   'driver' => $driver
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


