
<?php
// PHP Data Objects(PDO) Sample Code:
/* try {
    $conn = new PDO("sqlsrv:server = tcp:rods-data-server-01.database.windows.net,1433; Database = Data_Rods", "admin-rods", "roods-pwd@1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
} */
/* $serverName = "tcp:rods-data-server-01.database.windows.net,1433";
$connectionOptions = array(
   "PWD" => "roods-pwd@1",
  "DataBase"=>"Data-Rods",
  "UID" => "admin-rods",
  "driver" => "{ODBC Driver 13 for SQL Server}"
);
$sql_details = array(
    'user' => $connectionOptions['UID'],
    'pass' => $connectionOptions['PWD'],
    'driver' => $connectionOptions['driver'],
    'db'   => $connectionOptions['DataBase'],
    'host' => $serverName
    
 );
try {
    $conn = new PDO("sqlsrv:server = {$sql_details['host']},1433; Database = Data_Rods", $sql_details['user'],  $sql_details['pass']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$conn = new PDO("sqlsrv:server = tcp:rods-data-server-01.database.windows.net,1433; Database = Data_Rods", "admin-rods", "roods-pwd@1");

}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
} */

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "admin-rods", "pwd" => "roods-pwd@1", "Database" => "Data_Rods", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rods-data-server-01.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn === false){
    die( print_r( sqlsrv_errors(), true));
}    
$tsql = "SELECT COUNT([ID]) FROM [dbo].[data_rods] WHERE [Salutation] LIKE 'heer'";
/* $params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql , $params, $options );
 */
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
echo $rows;
/* $row_count = sqlsrv_num_rows( $stmt );
   
if ($row_count === false){
    echo $row_count;
}
else{
    echo $row_count;
} */

sqlsrv_close($conn);
?>