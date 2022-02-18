<?php
$data = array($_POST['data']);

/* foreach($data as $d){
    print_r($d);
 } */
 foreach($data as $k => $v){
    print_r($v->_Name);
 }
 
?>