<?php
$data = array($_POST['data']);
/* foreach($data as $d){
    print_r($d[0]['First Name']);
 } */
 $taille = count($data);
 echo($taille);
 for ($x = 0; $x <= $taille; $x++) {
     echo "The number is: $x <br>";
   }
/* foreach($data as $d){
    print_r($d[0]['First Name']);
 } */
 
//  print_r($data);
?>