<?php
$data = $_POST['data'];
/* foreach($data as $d){
    print_r($d[0]['First Name']);
 } */
/*  for ($x = 0; $x <= $taille; $x++) {
    echo "The number is: $x <br>";
} */
foreach($data as $d){
    print_r($d["First Name"]);
}

//  print_r($data);
?>