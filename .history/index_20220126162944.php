<?php
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        header('Location: index001.php');
    } 
?> 
<html>
    <head>
       <meta charset="utf-8">
       <title >Rodschinson</title>
        <link rel = "icon" href ="img/LogoMain.jpg" type = "image/x-icon">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/style001.css" media="screen" type="text/css" />
        <style>
        .myDiv {  
        text-align: center;
        }
        </style>
        <div>
        <img src="img/RODSCHINSON_LOGO_Big_Positif_1500x818px.png" style="width: 17rem; padding: 1rem"/>
    </div>
    </head>
    <body>
        <div id="container" display: flex; justify-content: center; flex-direction: column; align-items: center; background: #ffffff40>
            <!-- zone de connexion -->
            <body style="background-image: url('/img/HOME.jpeg'); background-size: cover; display: flex; flex-direction: column;">
    
    <form action="serverSide/verification.php" method="POST" style="border-radius: 20px;opacity: 75%;">
            <div class="myDiv"><h1>Connexion</h1></div>
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
        <div class="field-group">
            <div><label for="login" style="font-weight: bold;">Username</label></div>
            <div><input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" placeholder="Entrer le nom d'utilisateur" class="input-field" required>
        </div>
        <div class="field-group">
            <div><label for="password" style="font-weight: bold;">Password</label></div>
            <div><input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" placeholder="Entrer le mot de passe" class="input-field" required> 
        </div>
        <!-- <div class="field-group">
            <div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["remember"])) { ?> checked <?php } ?> />
            <label for="remember-me">Remember me</label>
        </div> -->
        <div class="field-group">
            <div style="align-items: center;display: flex;justify-content: center;"><input type="submit" id='submit' name="login" value="LOGIN" class="form-submit-button" style="border-radius: 10px; width:50%; font-weight: bold;"></span></div>
        </div>   
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>