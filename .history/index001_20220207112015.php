 <?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
        header('Location: index.php');
    } 
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Rodschinson">

    <title >Rodschinson</title>
    <link rel = "icon" href ="img/LogoMain.jpg" type = "image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-image: url('/img/HOME.jpeg'); background-size: cover; display: flex; flex-direction: column;">
    <div style="width: 100%;overflow: hidden;white-space: nowrap;display: flex;">
        <img src="img/RODSCHINSON_LOGO_Big_Positif_1500x818px.png"  style="width: 17rem; padding: 1rem;"/>
        <div class="card-footer" style="margin-left: auto; margin-right: 0;justify-content: right;background: transparent;border-style: none!important;"><a href="serverSide/LogOut.php" class="btn btn-success" style="background-color: #D3D9E4; color:black;font-weight: 510;">Déconnecter</a></div>
    </div>
    <div  style=" display: flex; justify-content: center; flex-direction: column; align-items: center; background: transparent">
        <div style= "justify-content: center; flex-direction: column; align-items: center; background: transparent">
            <button  onclick="window.location.href='index_Input.php'" class="button button1"><span class="button-content"> <i class="fas fa-search"></i> Prospection(Phingoo)</span></button>
            <button onclick="window.location.href='dataRodschinson.php'"  class="button button2"> <i class="fas fa-server"></i> Operations Data</button>
            <button onclick="window.location.href='https://www.airtable.com/'" class="button button3"> <i class="fas fa-folder-minus"></i> Portfolio RODS</button>
        </div>
        <div style=" justify-content: center; flex-direction: column; align-items: center; background: transparent">
            <button onclick="window.location.href='index_KPIs.php'"  class="button button2"><i class="fas fa-bullseye"></i>  KPIs</button>
            <button onclick="window.location.href='https://app.antsroute.com/route/'" class="button button4"> <i class="far fa-handshake"></i> Prise de Rendez Vous</button>
        </div> 
        <div style=" justify-content: center; flex-direction: column; align-items: center; background: transparent">
            <button onclick="window.location.href=' https://www.zerobounce.net/members/uploadfile/'" class="button button3"> <i class="far fa-envelope"></i> Vérification Emails</button>
            <button onclick="window.location.href='index_dashboard.php'" class="button button5"> <i class="fas fa-chart-line"></i> Tableau de Bord</button>
        </div> 
        <div style=" justify-content: center; flex-direction: column; align-items: center; background: transparent">
            <button onclick="window.location.href='index_targeting_list.php'" class="button button6"> <i class="fas fa-bullseye"></i> Targeting List</button>
            <button onclick="window.location.href='index_segmentation.php'" class="button button7"> <i class="fas fa-bullhorn"></i> Segmentation</button>
        </div> 



        
    </div>
        
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <script type="text/javascript">
        $('#Btn_PageEmails').click(function () {
            $.ajax({
            url: "serverSide/RedirectPageMail.php",
          });
        });
    </script>
       
</body>
</html>