<?php
$dataArray = $_POST['data'];
foreach($dataArray as $item){
    print_r($item["First Name"]);
}

//  print_r($data);
?>

[{First Name: 'Jean Pol', Last Name: 'Bollette', Email: 'dg@rodschinson.com'}
, {First Name: 'doboni', Last Name: '', Email: 'tom.kalsan@rodschinson.com'}, 
{First Name: 'Jean Pol', Last Name: 'Bollette', Email: 'dg@rodschinson.com'}]