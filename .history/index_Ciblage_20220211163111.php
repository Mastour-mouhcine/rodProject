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
   
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"> -->
        
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"> -->
    <!--DataTable Editable-->
    <link href="//cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css" rel="stylesheet">
    <link href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Swal Alert-->
    <!-- <link rel="stylesheet" href="alert/dist/sweetalert.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
    <!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script> 
    -->    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
        .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}
div.container {
        width: 20px;
    }

.dropdown:hover .dropdown-content {
  display: block;
}
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
                                <h6 class="m-0 font-weight-bold text-primary">Récapitulatif sur les segments d'acheteurs choisis:</h6>
                            </div>
                        </div>
                        <div class="card-body" id="">
                            <div class="card-body" >
                                        <div class="dropdown-content">
                                            
                            </div>
                        
                                    
                    </div> 

                    <!-- Toggle column: <a class="toggle-vis" data-column="0">DIVISION</a> - <a class="toggle-vis" data-column="1">Salutation</a> - <a class="toggle-vis" data-column="2">Salutation</a> - <a class="toggle-vis" data-column="3">Age</a> - <a class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis" data-column="5">Salary</a> -->
                        <table  id="Datable_cible_segment_input" class='table display dataTable nowrap ' cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th>City </th>
                                    <th>company </th> 
                                    <th>ID </th>
                                    <th>Salutation</th>
                                    <th>Salutation Email</th>
                                    <th>Last Name</th>
                                    <th>First Name</th> 
                                    <th>Sexe</th>
                                    <th>Title</th>
                                    <th>Preferred Language</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Mobile</th>
                                    <th>Addresse</th>
                                    <th>Country</th>
                                    <th>Region</th>
                                    <th>Source</th>
                                    <th>Segment 1</th>
                                    <th>Segment 2</th>
                                    <th>Segment 3</th>
                                    <th>Segment 4</th>
                                    <th>Segment 5</th>
                                    <th>Segment 6</th>
                                    <th>Segment 7</th>
                                    <th>Brand 1</th>
                                    <th>Brand 2</th>
                                    <th>Brand 3</th>
                                    <th>Secteur 1</th>
                                    <th>Solvabilité</th>
                                    <th>Status mail</th>
                                </tr>
                            </thead>
                        </table>
                    <div style="display: flex; justify-content: flex-end; align-items: center"> 
                      
                    </div> 
                </div>
                <div class="card-body" id="x">
                        <table id="Datable_actif_input" class="table display nowrap" cellspacing="0" width="100%">
                            <div class="card-header py-2" style="display: flex; justify-content: space-between; align-items: center; background-color: white;
                            margin-bottom: 10px; margin-top: -15px;  border-style: none;" >
                                <div>
                                    <h6 class="m-0 font-weight-bold text-primary"style="font-size: 18px;">Récapitulatif sur le(s) actif(s) choisi(s):</h6>
                                </div>
                            </div>
                            <thead>
                            <tr>
                                  <th>No  </th>
                                 <th>STATUT</th>
                                 <th>Priorité call </th>
                                 <th>ACTIF </th>
                                 <th>DOSSIER NOM </th>
                                 <th>date dernier contact </th>
                                 <th>REF </th>
                                 <th>REF_old </th>
                                 <th>TITRE FR </th>
                                 <th>TITRE NL </th>
                                 <th>COMMUNE immoweb </th>
                                 <th>COMMUNE </th>
                                 <th>PROVINCE </th>
                                 <th>REGION </th>
                                 <th>PAYS </th>
                                 <th>PRIX </th>
                                 <th>Région ordre dans liste2 </th>
                                 <th>Secteur ordre dans liste2 </th>
                                 <th>SECTEUR FR </th>
                                 <th>SECTEUR NL </th>
                                 <th>REGLE LC </th>
                                 <th>BROKERS CONSIGNE </th>
                                 <th>stop </th>
                                 <th>DESCRIPTION FR </th>
                                 <th>DESCRIPTION NL </th>
                                 <th>DESCRIPTION EN </th>
                                 <th>detail FR </th>
                                 <th>detail NL </th>
                                 <th>BLACKLIST </th>
                                 <th>NOM DOSSIER </th>  
                                 <th>COMPTE </th>
                                 <th>VAT </th>
                                 <th>CLIENT </th>
                                 <th>MAIL </th>
                                 <th>MAIL2 </th>
                                 <th>GSM </th>
                                 <th>TEL </th>
                                 <th>TEL2 </th>
                                 <th>DURÉE CONTRAT (MOIS) </th>
                                 <th>DEBUT CONTRAT </th>
                                 <th>FIN CONTRAT </th>
                                 <th>TYPE CONTRAT </th>
                                 <th>% COMISSION </th>
                                 <th>LANGUAGE </th>
                                 <th>Gmaps </th>
                                 <th>WHISE </th>
                                 <th>WHISE OK </th>
                                 <th>mot clé </th>
                                 <th>TITRE ZOHO SELECT </th>
                                 <th>dans zoho select </th>
                                 <th>CIBLAGE RENDEMENT </th>
                                 <th>CIBLAGE PROMOTION </th>
                                 <th>GROS </th>
                                 <th>CIBLAGE </th>
                                 <th>ciblage prox </th>
                                 <th>04/10/2021 consignes RC </th>
                                 <th>10/11/2021 consignes RC ciblages etc </th>
                                 <th>09/07/2021 consignes RC </th>
                                 <th>Suite 09/07/2021 consignes RC2 </th>
                                 <th>Suite 09/07/2021 consignes RC3 </th>
                                 <th>Remarques   </th>
                                 <th>Date </th>
                                 <th>Gestionnaire de compte  </th>
                                 <th>24/11/2021 consignes RC </th>
                                 <th>PUBLICATION RESEAUX SOCIAUX </th>
                                 <th>BN </th>
                                 <th>ID_Seg </th>
                            </tr>
                            </thead>
                        </table>
                        <div style="display: flex; justify-content: flex-end; align-items: center"> 
                       <div> 
                            <button id="Btn_verif_mail" class="btn btn-success" style="margin-top:10%;">Vérification d'email</button>
                            <button id="Btn_send_mail" class="btn btn-success" style="margin-top:10%;">Envoyer Les e-mails</button>
                        </div> 
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
      <!--DataTable Editable Js-->
    <!-- <script src="//code.jquery.com/jquery-1.9.1.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script type="text/javascript" src="js/demo/Editor-2.0.5/js/dataTables.editor.min.js"></script>
    <script type="text/javascript" src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
    
    <script  >
        var MyRequestsCompleted = (function() {
        var numRequestToComplete, 
            requestsCompleted, 
            callBacks, 
            singleCallBack; 

        return function(options) {
            if (!options) options = {};

            numRequestToComplete = options.numRequest || 0;
            requestsCompleted = options.requestsCompleted || 0;
            callBacks = [];
            var fireCallbacks = function () {
                // alert("we're all complete");
                for (var i = 0; i < callBacks.length; i++) callBacks[i]();
            };
            if (options.singleCallback) callBacks.push(options.singleCallback);
            this.addCallbackToQueue = function(isComplete, callback) {
                if (isComplete) requestsCompleted++;
                if (callback) callBacks.push(callback);
                if (requestsCompleted == numRequestToComplete) fireCallbacks();
            };
            this.requestComplete = function(isComplete) {
                if (isComplete) requestsCompleted++;
                if (requestsCompleted == numRequestToComplete) fireCallbacks();
            };
            this.setCallback = function(callback) {
                callBacks.push(callBack);
            };
        };
        })();
   $(document).ready(function(){
    let editor;
    editor = new $.fn.dataTable.Editor({
      
      //ajax: "serverSide/ActionEditDelete.php",
      ajax: "serverSide/staff001.php",
      table: "#Datable_cible_segment_input",
      idSrc:  'DT_RowId', 
      fields: [{                                             
                label: "City",
                name: "City"
            }
            ,{                                             
                label: "Company",
                name: "company"
            },{
                label: "DT_RowId",
                name: "DT_RowId"
            },{
                label: "Salutation",
                name: "Salutation"
            },{
                label: "Salutation_Email",
                name: "Salutation_Email"
            },{
                label: "Last Name",
                name: "Last_Name"
            },{
                label: "First Name",
                name: "First_Name"
            },{
                label: "Sexe",
                name: "Sexe"
            },{
                label: "Preferred Language",
                name: "Preferred_Language"
            },{
                label: "Email",
                name: "Email"
            },{
                label: "Mobile",
                name: "Mobile"
            },{
                label: "Address",
                name: "Address"
            },{
               label: "Country",
                name: "Country"
            },{
                label: "Region",
                name: "Region"
            },{
                label: "Source",
                name: "Source"
            },{
                label: "Segment 1",
                name: "Segment_1"
            },{
                label: "Segment 2",
                name: "Segment_2"
            },{
                label: "Segment 3",
                name: "Segment_3"
            },{
                label: "Segment 4",
                name: "Segment_4"
            },{
                label: "Segment 5",
                name: "Segment_5"
            },{
                label: "Segment 6",
                name: "Segment_6"
            },{
                label: "Segment 7",
                name: "Segment_7"
            },{
                label: "Brand 1",
                name: "Brand_1"
            },{
                label: "Brand_2",
                name: "Brand_2"
            },{
                label: "Brand_3",
                name: "Brand_3"
            },{
                label: "Secteur",
                name: "Secteur",
            },{
                label: "Solvabilite",
                name: "Solvabilite",
            }
        ]
      });
      var  table  = $('#Datable_cible_segment_input').DataTable({
                 scrollY: "400px",
                "scrollX": true,
                pageLength: 50,
                "bProcessing": true,
                "responsive": true,
                "autoWidth": true,
                /* order: [[ 27, 'asc' ],[ 1, 'asc' ]], //added 
                fixedColumns:   {
                    left: 1,
                }, */
        "ajax" : {
                    "url":"serverSide/get_Datable_cible_segment_input.php",
                    "dataSrc" : ""
                },
                columns : [
                    {
                        data: null, 
                        defaultContent: "",
                        className: "select-checkbox",
                        orderable: false,
                    },
                    {"data":"City"},
                    {"data":"company"}, 
                    {"data":"DT_RowId",'visible' : false},
                    {"data":"Salutation"},
                    {"data":"Salutation_Email"},
                    {"data":"Last_Name"},
                    {"data":"First_Name"},
                    {"data":"Sexe"},
                    {"data":"Title"},
                    {"data":"Preferred_Language"},
                    {"data":"Email"},
                    {"data":"Phone"},
                    {"data":"Mobile"},
                    {"data":"Address"},
                    {"data":"Country"},
                    {"data":"Region"},
                    {"data":"Source"},
                    {"data":"Segment_1",'visible' : false},
                    {"data":"Segment_2",'visible' : false},
                    {"data":"Segment_3",'visible' : false},
                    {"data":"Segment_4",'visible' : false},
                    {"data":"Segment_5",'visible' : false},
                    {"data":"Segment_6",'visible' : false},
                    {"data":"Segment_7",'visible' : false},
                    {"data":"Brand_1",'visible' : false},
                    {"data":"Brand_2",'visible' : false},
                    {"data":"Brand_3",'visible' : false},
                    {"data":"Secteur",'visible' : false},
                    {"data":"Solvabilite"},
                    {"data":"mail_status",'visible':false},
            ],	
            select: {
                style: "os",
                selector: "td:first-child",
            },
            select: true,
            "fnRowCallback": function(row, aData, iDisplayIndex, iDisplayIndexFull) {
            if (aData['mail_status'] == "Valid") {
            //$('td', row).css('background-color', '#69E495');
            $('td', row).css('background-color', '#a2f2ac');
            } else  {
            //$('td', row).css('background-color', '#E6C3C3');
            $('td', row).css('background-color', '#f5c4c4');
            }
            },
            dom: "Bfrtip",
            buttons: [
                {
                extend: "edit",
                editor: editor,
                text: "Modifier",
                formTitle: "Modifier l'enregistrementfier ",
                formButtons: ["Modifier"],
                },
            ],
        });
        $("#Btn_verif_mail").click(function (e) {
                        e.preventDefault();
                        JSalertWait("Vérification d'emails");
                        //Ouvrir lien when click ok
                        //JSalertAfterValidate("Succès", "Les mails ont été bien vérifiés !","success");
                        $.ajax({
                            url: "serverSide/Cible_Verif_Mail.php",
                            success: function (result) {
                                if (result.trim() === "verification est bonne") {
                                    JSalert("Succès", "Les emails ont été bien vérifiées !","success");
                                } else {
                                    JSalert("Erreur", "Une erreur est survenue lors de vérification des emails !", "error");
                                };
                            },
                        });
        });
        $('#Btn_send_mail').click(function() {
        var requestCallback = new MyRequestsCompleted({
            numRequest: 2,
            singleCallback: function(){
                // alert( "I'm the callback");
            }
        });
        $.ajax({
            url: 'serverSide/Mail-Conn-segmentation2.php',
            success: function(data) {
                requestCallback.requestComplete(true);
            }
        });
        $.ajax({
            /* url: 'serverSide/',
            success: function(data) {
                requestCallback.requestComplete(true);
                JSalertAfterValidate("Succès", "Les emails ont été bien envoyées !","success","index_costumer_valid.php");
                
            } */
            window.open("index_costumer_valid.php", '_self');
        });
    
});
                    
    });
    const JSalert = (status, message, type) => {
            Swal.fire(status, message, type);
        };

        const JSalertAfterValidate = (status, message, type, urlPage) => {
            Swal.fire(status, message, type).then(function () {
                window.open(urlPage, '_self');
            });
        };

        //auto close timer
        const JSalertWait = (text) => {
            Swal.fire({
                title: 'Traitement en cours',
                html: text,
                didOpen: () => {
                    Swal.showLoading()
                },
            })
        };

        
    </script>
     <script  >
   $(document).ready(function(){
    var  table  = $('#Datable_actif_input').DataTable({
                 scrollY: "400px",
                "scrollX": true,
                "bProcessing": true,
                "responsive": true,
                "autoWidth": true,
        "ajax" : {
                    "url":"serverSide/get_Datable_actif_input.php",
                    "dataSrc" : ""
                },
                columns : [
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
                    {"data":"BN"},
                    {"data":"ID_Seg"},
                                ],	
                                
                                
        });
    });
    </script>
</body>
</html>
