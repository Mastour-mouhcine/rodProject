
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/style001.css" media="screen" type="text/css" />
        <div>
        <img src="img/RODSCHINSON_LOGO_Big_Positif_1500x818px.png" style="width: 17rem; padding: 1rem"/>
    </div>
    </head>
    <body>
        <div id="container" display: flex; justify-content: center; flex-direction: column; align-items: center; background: #ffffff40>
            <!-- zone de connexion -->
            <body style="background-image: url('/img/HOME.jpeg'); background-size: cover; display: flex; flex-direction: column;">
    
            <form action="serverSide/verification.php" method="POST" >
                <h1>Authentification</h1>
                
                <!-- <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <input type="submit" id='submit' value='LOGIN' > -->
                <div class="demo-table">

                <div class="form-head">Login</div>
                <?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
                <div class="field-column">
                    <div>
                        <label for="username">Username</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="user_name" id="user_name" type="text"
                            class="demo-input-box">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Password</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password"
                            class="demo-input-box">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" name="login" value="Login"
                        class="btnLogin"></span>
                    </div>
                </div>
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