<?php
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
foreach($_POST['First Name'] as $key => $row) {

$nom = $_POST['First Name'][$key];
     $sql = "INSERT INTO data_input_test (
                      [First Name]
                      )
            VALUES (?)"; 

    $params = array($nom);    
    $result = sqlsrv_query($conn,$sql,$params);
    
   
}
if( $result === false ) {
    die( print_r( sqlsrv_errors(), true));
}
else{
    echo('New Records Created Successfully');
}
sqlsrv_close($conn);

?>