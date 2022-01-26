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


    <title>Rodschinson</title>
    <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/fc-4.0.1/datatables.min.css"/>
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
                            <h6 class="m-0 font-weight-bold text-primary">Rapport Des Mails Envoyée</h6>
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
                        
                   <!-- Toggle column: <a class="toggle-vis" data-column="0">DIVISION</a> - <a class="toggle-vis" data-column="1">Salutation</a> - <a class="toggle-vis" data-column="2">Salutation</a> - <a class="toggle-vis" data-column="3">Age</a> - <a class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis" data-column="5">Salary</a> -->
                        <table  id="import_zoho_contact1" class='table display dataTable nowrap ' cellspacing="0" width="100%">

                        <thead>
                                <tr>
                                      <th></th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                        </table>
                        <div style="display: flex; justify-content: flex-end; align-items: center"> 
                            <div> 
                            <button id="Btn_Truncate" class="btn btn-success" style="margin-top:25%;">Purger La Liste</Table></Table></button>
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
   <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.11.3/api/fnFilterAll.js"></script> -->
<script  src="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/fc-4.0.1/datatables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script> -->
<!-- <script src="plugin/jquery-2.2.3.min.js"></script> -->
                                                                                                                                                                                                                                                                                        
<!-- <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script> -->
<!-- <script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script> -->

<!-- <script src=""></script>

<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
 -->


<!-- src="js/dataTable_OutPut001.js" type="text/javascript" -->
<!-- <script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script> -->
<script  >
$(document).ready(function() {
var table=	$('#import_zoho_contact1').DataTable( {
	
		"scrollX": true,
		"bProcessing": true,
		"responsive": true,
      "autoWidth": true,
		dom: 'Bfrtip',  
		"ajax" : {
			"url":"serverSide/ConnectionDataBaseValidMail.php",
			"dataSrc" : ""
		},
		columns : [
            {
          data: null,
          defaultContent: "",
          className: "select-checkbox",
          orderable: false,
        },
			{"data":"First Name"},
			{"data":"Last Name"},
			{"data":"Email"},
			
		],
        
      select: true,
	
	
		
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
   $("#Btn_Truncate").click(function (e) {
                e.preventDefault();
                JSalertWait('Supression des Mails Valid');
                $.ajax({
                    url: "serverSide/ScriptSupression.php",
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

</body>


</html>
