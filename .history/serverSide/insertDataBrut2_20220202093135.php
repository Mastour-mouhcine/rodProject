<?php
$dataArray = $_POST['data'];
foreach($dataArray as $item){
    print_r($item["First Name"]+ $item["Last Name"]+ $item["Amail"]);
}

//  print_r($data);
?>