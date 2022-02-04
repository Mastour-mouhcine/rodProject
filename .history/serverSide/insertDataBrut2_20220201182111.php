<?php
$data = array($_POST['data']);

/* foreach($data as $d){
    print_r($d[0]['First Name']);
 } */
foreach($data as $key=>$value){
    print_r($data[$key]["First Name"]);
 }
 
//  print_r($data);
?>