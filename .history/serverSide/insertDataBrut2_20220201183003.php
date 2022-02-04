<?php
$data = array($_POST['data']);
/* foreach($data as $d){
    print_r($d[0]['First Name']);
 } */
 $taille = count($data);
foreach($data as $d){
    print_r($d[0]['First Name']);
 }
 
//  print_r($data);
?>