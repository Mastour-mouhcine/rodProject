<?php
    $python_print = "Cible_Verif_Mail.py"; 
    $python_execution = "python3 ".$python_print; 
    $output= shell_exec($python_execution);
     echo $output;
?>