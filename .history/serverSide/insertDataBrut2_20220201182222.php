<?php
$data = array($_POST['data']);

/* foreach($data as $d){
    print_r($d[0]['First Name']);
 } */
foreach($data as $d=>$v){
    print_r($data[0][$v]);
 }
 
//  print_r($data);
?>