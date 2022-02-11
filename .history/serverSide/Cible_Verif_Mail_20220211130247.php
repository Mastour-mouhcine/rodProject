<?php
    $python_print = "verif_mails_cible.py"; 
    $python_execution = "python3 ".$python_print; 
    $output= shell_exec($python_execution);
     echo $output;
?>