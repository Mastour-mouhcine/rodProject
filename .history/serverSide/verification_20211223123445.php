<?php
$serverName = "rods-data-server-01.database.windows.net"; // update me
$connectionOptions = array(
   "Database" => "Data-Rod-Input", // update me
   "Uid" => "admin-rods", // update me
   "PWD" => "roods-pwd@1" // update me
);
session_start();
$remember = $_POST['remember'];
      if($remember){
         echo("checked");
      }
   
   sqlsrv_close( $conn);// fermer la connexion
?>

