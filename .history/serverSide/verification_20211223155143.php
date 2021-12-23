<?php
$serverName = "rods-data-server-01.database.windows.net"; // update me
$connectionOptions = array(
   "Database" => "Data-Rod-Input", // update me
   "Uid" => "admin-rods", // update me
   "PWD" => "roods-pwd@1" // update me
);
session_start();
   if (isset($_POST['username']) && isset($_POST['password'])) {
      // connexi */on à la base de données
      // Create connection
      /* $conn = new mysqli($servername, $username, $password,$db); */
      $conn = sqlsrv_connect($serverName, $connectionOptions);
      if ($conn === false) {
         die(print_r(sqlsrv_errors(), true));
      }
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      if ($username !== "" && $password !== "") {
         $tsql = "SELECT  * FROM [dbo].[utilisateur] where nom_utilisateur = '$username' and mot_de_passe = '$password' ";
         //$params = array($username, $password);
         $results = sqlsrv_query($conn, $tsql);
         $row = sqlsrv_fetch_array($results);
         //print_r($row[0]);
         if ($results == FALSE)
         echo (sqlsrv_errors());
         //$count = $row[0];
         //if ($row[0] != 0) // nom d'utilisateur et mot de passe correctes
         if ($row) // nom d'utilisateur et mot de passe correctes
         {
            $_SESSION['username'] = $username; 
            $_SESSION['password'] = $password; 
            header('Location: ../index001.php');
            // print("MainPage");
         } else {
            //header('Location: ../index.php');
            $message = "Invalid Login";
            // print("err1"); // utilisateur ou mot de passe incorrect
         }
      } else {
         //header('Location: ../index.php');
         $message = "Invalid Login";
         //print("err2"); // utilisateur ou mot de passe vide
      }
   } else {
      header('Location: ../index.php');
      //print("Login");
   }
   sqlsrv_close( $conn);// fermer la connexion
?>

