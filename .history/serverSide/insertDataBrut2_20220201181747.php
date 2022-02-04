<?php
$data = array($_POST['data']);

/* foreach($data as $d){
    print_r($d[0]['First Name']);
 } */
foreach($data as $key => $row){
    print_r($row[0][$key]);
 }
 
//  print_r($data);
?>