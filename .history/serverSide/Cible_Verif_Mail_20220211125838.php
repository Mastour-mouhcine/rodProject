<?php
    $python_print = "verife_mails_cible.py"; 
    $python_execution = "python3 ".$python_print; 
    $output= shell_exec($python_execution);
     echo $output;
?>