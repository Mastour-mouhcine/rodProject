<?php
/* $servername = "localhost";
$username = "root";
$password = "";
$db = "test";
 */
$servername = "135.148.9.103";
$username = "admin";
$password = "rod@2021";
$db = "rod_all";

// Create connection
/* $conn = new mysqli($servername, $username, $password,$db); */
$conn = new \MySQLi($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
error_log("Connection failed: " . $conn->connect_error, 3, "/var/tmp/succ-errors.log");
  die("Connection failed: " . $conn->connect_error); 
}

if (isset($_GET['page'])) {
  $curPage = $_GET['page'];
} else {
  $curPage = 1;
}

//number of items you need per a page
 $labels_per_page = 100;

 //setting the starting point according to the page no.                  
if($curPage>1){
 $start = ($curPage-1)*$labels_per_page;
}else{
 $start = 0;
} 

$result = mysqli_query($conn, "SELECT * from  rod_all.data_rod_all LIMIT '.$start.'");

$rows = array();

while($row = mysqli_fetch_array($result))
{
    $rows[] = $row;
}
echo json_encode($rows);


$conn->close();
?>