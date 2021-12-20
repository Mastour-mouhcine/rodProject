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


   //Establishes the connection
   $conn = sqlsrv_connect($serverName, $connectionOptions);
   if ($conn === false) {
      die(print_r(sqlsrv_errors(), true));
   }

   // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
   // pour éliminer toute attaque de type injection SQL et XSS
   $username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
   $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));
   if ($username !== "" && $password !== "") {
      $tsql = "SELECT  count(*) FROM [Data-Rod-Input].[utilisateur] where 
         nom_utilisateur = ? and mot_de_passe = ? ";
      $params = array($username, $password);
      $results = sqlsrv_query($conn, $tsql, $params);
      $row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC);
      $count = $row[0];
      if ($count != 0) // nom d'utilisateur et mot de passe correctes
      {
         $_SESSION['username'] = $username;
         header('Location: ../index001.php');
         // print("MainPage");
      } else {
         header('Location: ../index.php');
         // print("err1"); // utilisateur ou mot de passe incorrect
      }
   } else {
      header('Location: ../index.php');
      //print("err2"); // utilisateur ou mot de passe vide
   }
} else {
   header('Location: ../index.php');
   //print("Login");
}
$conn->close();// fermer la connexion
