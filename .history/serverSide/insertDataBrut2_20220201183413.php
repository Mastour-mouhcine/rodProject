<?php
$data = array($_POST['data']);
/* foreach($data as $d){
    print_r($d[0]['First Name']);
 } */
/*  for ($x = 0; $x <= $taille; $x++) {
    echo "The number is: $x <br>";
} */
var_dump(count($data));
foreach($data as $d){
    print_r($d[0]['First Name']);
 }
 
//  print_r($data);
?>