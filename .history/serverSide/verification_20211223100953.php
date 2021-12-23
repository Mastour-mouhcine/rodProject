<?php
$serverName = "rods-data-server-01.database.windows.net"; // update me
$connectionOptions = array(
   "Database" => "Data-Rod-Input", // update me
   "Uid" => "admin-rods", // update me
   "PWD" => "roods-pwd@1" // update me
);
session_start();
   if (isset($_POST['member_name']) && isset($_POST['password'])) {
      // connexi */on à la base de données
      // Create connection
      /* $conn = new mysqli($servername, $username, $password,$db); */
      $conn = sqlsrv_connect($serverName, $connectionOptions);
      if ($conn === false) {
         die(print_r(sqlsrv_errors(), true));
      }
      $member_name = $_POST['member_name'];
      $password = $_POST['password'];

      if ($member_name !== "" && $password !== "") {
         //$tsql = "SELECT  count(*) FROM [dbo].[utilisateur] where nom_utilisateur = '$member_name' and mot_de_passe = '$password' ";
         $tsql = "SELECT  * FROM [dbo].[utilisateur] where nom_utilisateur = '$member_name' and mot_de_passe = '$password' ";
         //$params = array($username, $password);
         $results = sqlsrv_query($conn, $tsql);
         //$row = sqlsrv_fetch_array($results);
         $user = sqlsrv_fetch_array($results);
         //print_r($row[0]);
         if ($results == FALSE)
         echo (sqlsrv_errors());
         //$count = $row[0];
         //if ($user[0] != 0) // nom d'utilisateur et mot de passe correctes
         if ($user) // nom d'utilisateur et mot de passe correctes
         {
            $_SESSION["member_id"] = $user["member_id"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("member_login",$_POST["member_name"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				}
			}
            $_SESSION['member_name'] = $member_name;
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
   sqlsrv_close( $conn);// fermer la connexion
?>