<?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
        header('Location: index.php');
    } 
?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Rodschinson">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />


    <title >Rodschinson</title>
    <link rel = "icon" href ="img/LogoMain.jpg" type = "image/x-icon">
    <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <!-- <link href=" https://datatables.net/plug-ins/api/fnFilterClear"> -->
    <link href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css" rel="stylesheet">

   
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"> -->
        
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"> -->


     <!-- Swal Alert-->
    
    <!-- <link rel="stylesheet" href="alert/dist/sweetalert.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
    <!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script> 
    -->    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->

    <!-- <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    
    <link href="https://nightly.datatables.net/buttons/css/buttons.dataTables.css?_=c6b24f8a56e04fcee6105a02f4027462.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/buttons/js/buttons.html5.js?_=c6b24f8a56e04fcee6105a02f4027462"></script>    
    
    <script src="https://nightly.datatables.net/buttons/js/dataTables.buttons.js?_=c6b24f8a56e04fcee6105a02f4027462"></script>    
    <script src="https://nightly.datatables.net/buttons/js/buttons.colVis.js?_=c6b24f8a56e04fcee6105a02f4027462"></script>    -->

      <!-- Datatable CSS -->
   
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css"/> -->
    
    <style>
       div.dt-button-collection .dt-button {
           
        
  position: relative;
}
.dt-button-collection .dropdown-menu .buttons-columnVisibility:before,
.dt-button-collection .dropdown-menu .buttons-columnVisibility.active span:before {
  display:block;
  position:absolute;
  top:1.2em;
  left:0;
  width:12px;
  height:12px;
  box-sizing:border-box;
}
.dt-button-collection .dropdown-menu .buttons-columnVisibility:before {
  content:' ';
  margin-top:-8px;
  margin-left:10px;
  border:1px solid black;
  border-radius:3px;
}
.dt-button-collection .dropdown-menu .buttons-columnVisibility.active span:before {
  font-family: 'Arial' !important;
  content:'\2714';
  margin-top: -15px;
  margin-left: 12px;
  text-align: center;
  text-shadow: 1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;
}
.dt-button-collection .dropdown-menu .buttons-columnVisibility span {
  margin-left:30px;    
}
       

        td.details-control {
            background: url('img/angle-arrow-down.png') no-repeat center center;
            cursor: pointer;
            background-size: 15px;
        }
        tr.shown td.details-control {
            background: url('img/angle-arrow-double-down.png') no-repeat center center;
            background-size: 15px;
        }
        
    </style>
</head>
 
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid" style="margin-top: 2rem">

                <!-- Page Heading -->
                <div class="mb-2" style="display: flex; justify-content: flex-start; align-items: center">
                     <div style="display: flex;">
                        <a href="index001.php"><img src="img/rod_logo.png"></a>
                        <h1 class="h3 text-gray-800">Rodschinson</h1>
                     </div>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center">
                        <div>
                            <h6 class="m-0 font-weight-bold text-primary">Liste des Actifs</h6>
                        </div>
                        <!-- Bouton excel -->
                        <!-- <div class="btn btn-info">
                            <input type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" id="excel_file" />
                        </div> -->
                        <!-- Je l'ai ajouté -->
                        <!-- <button id="Btn_Acceuil" class="btn btn-success">Page d'accueil</button> -->
                        <!-- <div class="btn btn-info">
                        <button id="submit" class="btn btn-success" >Afficher</button>
                        </div> -->

                    </div>
                    <div class="card-body" id="">
                    <form id="data_actif">
                   <!-- Toggle column: <a class="toggle-vis" data-column="0">DIVISION</a> - <a class="toggle-vis" data-column="1">Salutation</a> - <a class="toggle-vis" data-column="2">Salutation</a> - <a class="toggle-vis" data-column="3">Age</a> - <a class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis" data-column="5">Salary</a> -->
                        <table  id="DataTable_actif" class='table display dataTable nowrap ' cellspacing="0" width="100%">

                        <thead>
                                <tr>
                                <th>Reference</th>
                                <th>No</th>
                                <th>STATUT</th>
                                <th>Priorité call</th>
                                <th>ACTIF</th>
                                <th>DOSSIER NOM</th>
                                <th>date dernier contact</th>
                                <th>REF</th>
                                <th>REF_old</th>
                                <th>TITRE FR</th>
                                <th>TITRE NL</th>
                                <th>COMMUNE immoweb</th>
                                <th>COMMUNE</th>
                                <th>PROVINCE</th>
                                <th>REGION</th>
                                <th>PAYS</th>
                                <th>PRIX</th>
                                <th>Région ordre dans liste2</th>
                                <th>Secteur ordre dans liste2</th>
                                <th>SECTEUR FR</th>
                                <th>SECTEUR NL</th>
                                <th>REGLE LC</th>
                                <th>BROKERS CONSIGNE</th>
                                <th>stop</th>
                                <th>DESCRIPTION FR</th>
                                <th>DESCRIPTION NL</th>
                                <th>DESCRIPTION EN</th>
                                <th>detail FR</th>
                                <th>detail NL</th>
                                <th>BLACKLIST</th>
                                <th>NOM DOSSIER</th>
                                <th>COMPTE</th>
                                <th>VAT</th>
                                <th>CLIENT</th>
                                <th>MAIL</th>
                                <th>MAIL2</th>
                                <th>GSM</th>
                                <th>TEL</th>
                                <th>TEL2</th>
                                <th>DURÉE CONTRAT (MOIS)</th>
                                <th>DEBUT CONTRAT</th>
                                <th>FIN CONTRAT</th>
                                <th>TYPE CONTRAT</th>
                                <th>% COMISSION</th>
                                <th>LANGUAGE</th>
                                <th>Gmaps</th>
                                <th>WHISE</th>
                                <th>WHISE OK</th>
                                <th>mot clé</th>
                                <th>TITRE ZOHO SELECT</th>
                                <th>dans zoho select</th>
                                <th>CIBLAGE RENDEMENT</th>
                                <th>CIBLAGE PROMOTION</th>
                                <th>GROS</th>
                                <th>CIBLAGE</th>
                                <th>ciblage prox</th>
                                <th>04/10/2021 consignes RC</th>
                                <th>10/11/2021 consignes RC ciblages etc</th>
                                <th>09/07/2021 consignes RC</th>
                                <th>Suite 09/07/2021 consignes RC2</th>
                                <th>Suite 09/07/2021 consignes RC3</th>
                                <th>Remarques </th>
                                <th>Date</th>
                                <th>Gestionnaire de compte </th>
                                <th>24/11/2021 consignes RC</th>
                                <th>PUBLICATION RESEAUX SOCIAUX</th>
                                <th>CONSIGNES RC 17/01/2022</th>
                                <th>SECTEUR</th>
                                <th>RENOVATION Type</th>
                                <th>CONSTRUCTION Type</th>
                                <th>ROD INDUSTRIAL LOGISTICS</th>
                                <th>NOTE LAILA</th>
                                <th>ID_Seg</th>
                                </tr>
                                </thead>
                        </table>
                        </form>
                        <div style="display: flex; justify-content: flex-end; align-items: center"> 
                            <div> 
                            <button id="Btn_Enregistrer" class="btn btn-success" style="margin-top:10%;">Enregistrer</button>
                            <button id="Btn_suivant" class="btn btn-success" style="margin-top:10%;"> Suivant</button>
                            </div> 
                        </div> 
                        <!-- <div class="dataTables_info" id="empTable_info" role="status" aria-live="polite"><span id = "id_rowNumber"></span></div> -->
                    </div>
                  
                </div>
          

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>©️ RODSCHINSON INVESTMENT. ALL RIGHTS RESERVED.</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
</div>
<!-- End of Page Wrapper -->
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



   <!-- Datatable JS -->
<script  src="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/fc-4.0.1/datatables.min.js"></script>
<!-- search panel -->
<link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/searchpanes/1.4.0/css/searchPanes.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="js/demo/Editor-2.0.5/js/dataTables.editor.min.js"></script>
<script type="text/javascript" src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
<script  >
$(document).ready(function() {
    const seg = localStorage.getItem('Segmentation_query');
    console.log(seg);
var table=	$('#DataTable_actif').DataTable( {
         scrollY: "400px",
		"scrollX": true,
		"bProcessing": true,
		"responsive": true,
      "autoWidth": true,
		"ajax" : {
			// "url":"serverSide/Seg_Actif.php?var_segmentation="+seg+"&var_secteur="+sec+"&var_brand="+brd,
			"url":"serverSide/Seg_Actif.php?var_segmentation="+seg,
			"dataSrc" : ""
		},
		columns : [
                {"data":"Reference"},
                {"data":"No"},
                {"data":"STATUT"},
                {"data":"Priorité call"},
                {"data":"ACTIF"},
                {"data":"DOSSIER NOM"},
                {"data":"date dernier contact"},
                {"data":"REF"},
                {"data":"REF_old"},
                {"data":"TITRE FR"},
                {"data":"TITRE NL"},
                {"data":"COMMUNE immoweb"},
                {"data":"COMMUNE"},
                {"data":"PROVINCE"},
                {"data":"REGION"},
                {"data":"PAYS"},
                {"data":"PRIX"},
                {"data":"Région ordre dans liste2"},
                {"data":"Secteur ordre dans liste2"},
                {"data":"SECTEUR FR"},
                {"data":"SECTEUR NL"},
                {"data":"REGLE LC"},
                {"data":"BROKERS CONSIGNE"},
                {"data":"stop"},
                {"data":"DESCRIPTION FR"},
                {"data":"DESCRIPTION NL"},
                {"data":"DESCRIPTION EN"},
                {"data":"detail FR"},
                {"data":"detail NL"},
                {"data":"BLACKLIST"},
                {"data":"NOM DOSSIER"},
                {"data":"COMPTE"},
                {"data":"VAT"},
                {"data":"CLIENT"},
                {"data":"MAIL"},
                {"data":"MAIL2"},
                {"data":"GSM"},
                {"data":"TEL"},
                {"data":"TEL2"},
                {"data":"DURÉE CONTRAT (MOIS)"},
                {"data":"DEBUT CONTRAT"},
                {"data":"FIN CONTRAT"},
                {"data":"TYPE CONTRAT"},
                {"data":"% COMISSION"},
                {"data":"LANGUAGE"},
                {"data":"Gmaps"},
                {"data":"WHISE"},
                {"data":"WHISE OK"},
                {"data":"mot clé"},
                {"data":"TITRE ZOHO SELECT"},
                {"data":"dans zoho select"},
                {"data":"CIBLAGE RENDEMENT"},
                {"data":"CIBLAGE PROMOTION"},
                {"data":"GROS"},
                {"data":"CIBLAGE"},
                {"data":"ciblage prox"},
                {"data":"04/10/2021 consignes RC"},
                {"data":"10/11/2021 consignes RC ciblages etc"},
                {"data":"09/07/2021 consignes RC"},
                {"data":"Suite 09/07/2021 consignes RC2"},
                {"data":"Suite 09/07/2021 consignes RC3"},
                {"data":"Remarques "},
                {"data":"Date"},
                {"data":"Gestionnaire de compte "},
                {"data":"24/11/2021 consignes RC"},
                {"data":"PUBLICATION RESEAUX SOCIAUX"},
                {"data":"CONSIGNES RC 17/01/2022"},
                {"data":"SECTEUR"},
                {"data":"RENOVATION Type"},
                {"data":"CONSTRUCTION Type"},
                {"data":"ROD INDUSTRIAL LOGISTICS"},
                {"data":"NOTE LAILA"},
                {"data":"ID_Seg",'visible' : false}
		],		
	} );
    $('#DataTable_actif tbody').on( 'click', 'tr', function () {
                    $(this).toggleClass('selected');
                } );
    $('#Btn_Enregistrer').click( function () {
                const Mydata = table.rows('.selected').data().toArray();
                $.ajax({
                    type: "post",
                    url: "serverSide/insertDataBrut2.php",
                    data: {data : Mydata},
                    success: (data) => {
                        alert(data);
                    },
                });
    } );
} );
const JSalert = (status, message, type) => {
            Swal.fire(status, message, type);
        };
        //
        const JSalertAfterValidate = (status, message, type, urlPage) => {
            // var url = 'index_Input.php';
            var url = urlPage;
            // var url = 'index_OutPutMailValid.php';
            //var win = window.open('/nosnihcsdosCorp/index_validmails.php', '_blank');
            Swal.fire(status, message, type).then(function () {
                window.open(url, '_self');
            });

        };
        //auto close timer
        const JSalertWait = (text) => {
            Swal.fire({
                title: 'Traitement en cours',
                html: text,
                //timerProgressBar: false,
                didOpen: () => {
                    Swal.showLoading()
                },
            })
        };
   $("#Btn_suivant").click(function (e) {
                e.preventDefault();
                JSalertWait('Supression des Mails Valid');
                $.ajax({
                    url: ".php",
                    success: (result) => {
                        if (result.trim() == "Terminer") {
                            JSalertAfterValidate("Succès", "Les Mails ont été bien Supprimer  !", "success","index_Input.php");
                        } else {
                            JSalert("Erreur", "Une erreur est survenue lors de la Supression !", "error");
                        };
                    },
                }); 
            });
           
</script>
<script>

</script>



</body>


</html>

