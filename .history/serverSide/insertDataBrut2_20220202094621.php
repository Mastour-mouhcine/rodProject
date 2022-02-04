<?php
$dataArray = $_POST['data'];
foreach($dataArray as $item){
    print_r($item["Last Name"]);
}/* 
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
$dataArray = $_POST['data'];
foreach($dataArray as $item) {

$first_name = $item["First Name"];
$last_name = $item["Last Name"];
$email = $item["Email"];
    $sql = "INSERT INTO Import_Zoho_Contact_test (
                     [First Name]
      ,[Last Name],[Email]
                     )
           VALUES (?,?,?)"; 

   $params = array($first_name,$last_name,$email);    
   $result = sqlsrv_query($conn,$sql,$params);
   
  
}
if( $result === false ) {
   die( print_r( sqlsrv_errors(), true));
}
else{
   echo('New Records Created Successfully');
}
sqlsrv_close($conn);
 */
?>