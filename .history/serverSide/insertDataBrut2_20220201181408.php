<?php
$data = array($_POST['data']);

foreach($data as $d){
    print_r($d[0]['Name']);
 }
 
//  print_r($data);
?>