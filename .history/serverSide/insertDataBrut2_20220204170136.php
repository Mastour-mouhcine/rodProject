<?php
/* $dataArray = $_POST['data'];
foreach($dataArray as $item){
    print_r($item["Email"]);
} */
$serverName = "rods-data-server-01.database.windows.net"; // update me
$connectionOptions = array(
   "Database" => "Data_Rods", // update me
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
   else{
   echo('New Records Created Successfully');
   }
sqlsrv_close($conn);

?>