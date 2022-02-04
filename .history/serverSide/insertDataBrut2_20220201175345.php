<?php
$data = json_decode($_POST['data']);
foreach($data as $d){
    print_r($d);
 }
//  print_r($data);
?>