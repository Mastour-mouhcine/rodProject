<?php
$data = json_decode($_POST['data']);
/* foreach($data as $d){
    print_r($d);
 } */
 foreach ($data as $key => $object) {
    echo $object->object_property;
}
//  print_r($data);
?>