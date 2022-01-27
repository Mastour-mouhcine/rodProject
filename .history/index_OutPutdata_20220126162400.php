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
    <link rel = "icon" href ="img/logoContent.jpg" type = "image/x-icon">
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
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->

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
                            <h6 class="m-0 font-weight-bold text-primary">Visualisation data</h6>
                        </div>



                        <!-- Bouton excel -->
                        <!-- <div class="btn btn-info">
                            <input type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" id="excel_file" />
                        </div> -->
                        <!-- Je l'ai ajouté -->
                        <button id="Btn_TransPhingo" class="btn btn-success">Transformation vers Phingoo</button>
                        <!-- <button id="Btn_Acceuil" class="btn btn-success">Page d'accueil</button> -->
                        <!-- <div class="btn btn-info">
                        <button id="submit" class="btn btn-success" >Afficher</button>
                        </div> -->

                    </div>
                    <div class="card-body" id="">
                        
                   <!-- Toggle column: <a class="toggle-vis" data-column="0">DIVISION</a> - <a class="toggle-vis" data-column="1">Salutation</a> - <a class="toggle-vis" data-column="2">Salutation</a> - <a class="toggle-vis" data-column="3">Age</a> - <a class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis" data-column="5">Salary</a> -->
                        <table data-mode="columntoggle" id='empTable' class='table display dataTable nowrap ' data-mode="columntoggle" cellspacing="0" width="100%">

                            <thead class="">
                            <tr>                              
                                     
                                          <th>DIVISION</th>
                                          <th>Salutation </th>
                                           <th>Salutaion Email</th> 
                                          <th>First Name</th>
                                          <th>Last Name</th> 
                                          <th>Sexe</th>
                                          <th>EMAIL</th>
                                          <th>Preferred Language</th>
                                           <th>Phone Account</th>
                                          <th>Mobile</th>
                                          <th>FAX</th>
                                          <th>Account Name</th>
                                          <th>Account Number</th>
                                          <th>Identifiant Source</th>
                                          <th>Pays</th>
                                          <th>Billing Code</th>
                                          <th>Région</th>
                                          <th>Billing City</th>
                                          <th>Billing Province</th>
                                          <th>Billing Street</th>
                                        <th>Tranding Name</th>
                                          <th>Code d'activité</th>
                                          <th>RSZ1</th>
                                          <th>RSZ2</th>
                                          <th>RSZ3</th>
                                          <th>SECTION</th>
                                          <th>Description</th>
                                          <th>VAT Number</th>
                                          <th>Date d'immatriculation</th>
                                          <th>Site Internet</th>
                                          <th>Score de solvabilité</th>
                                           <th>Definition du Score</th>
                                          <th>Score international</th>
                                          <th>Limite de credit</th>
                                          <th>Catégorie juridique</th>
                                          <th>Employés</th>
                                          <th>Devise</th>
                                          <th>Chiffres d'affaires</th>
                                          <th>Bénéfices</th>
                                          <th>Bénéfice avant impôts  </th>
                                          <th>Total des immobilisations</th>
                                          <th>Total des actifs courants</th>
                                          <th>Total des passifs courants</th>
                                          <th>Total des passifs a long terme</th>
                                          <th>Fonds d'actionnaires</th>
                                          <th>Fond de roulement</th>
                                          <th>Ratio de liquidité général</th>
                                          <th> Marge bénéficiaire avant impôt</th>
                                          <th>Return on Total Assets Employed</th>
                                          <th>Ratio d'endettement total</th>
                                          <th>Ratio d'endettement</th>
                                          <th>Capital social</th>
                                        <th>Forme juridique</th>
                                          <th>Dirigeant 1 Nom </th>
                                          <th>Dirigeant 1 Prénom </th>
                                          <th>Dirigeant 1 date de naissance</th>
                                          <th>Dirigeant 1 Fonction</th>
                                          <th>Dirigeant 1 Date de fonction </th>
                                          <th>Dirigeant 2 Nom </th>
                                          <th>Dirigeant 2 Prénom </th>
                                          <th>Dirigeant 2 date de naissance </th>
                                          <th>Dirigeant 2 Fonction</th>
                                          <th>Dirigeant 2 Date de Fonction</th>
                                          <th>Dirigeant 3 Nom</th>
                                          <th>Dirigeant 3 Prénom</th>
                                          <th>Dirigeant 3 date de naissance</th>
                                          <th>Dirigeant 3 Fonction</th>
                                          <th>Dirigeant 3  Date de fonction</th>
                                          <th>Dirigeant 4 Nom</th>
                                        <th>Dirigeant 4 Prénom</th>
                                          <th>Dirigeant 4 date de naissance</th>
                                          <th>Dirigeant 4 Fonction</th>
                                          <th>Dirigeant 4 Date de Fonction</th>
                                          <th>Dirigeant 5 Nom</th>
                                          <th>Dirigeant 5 Prénom</th>
                                          <th>Dirigeant 5 Date de naissance</th>
                                          <th>Dirigeant 5 Fonction</th>
                                          <th>Dirigeant 5 Date de Fonction</th>
                                          <th>Dirigeant 6 Nom</th>
                                          <th>Dirigeant 6 Prénom</th>
                                          <th>Dirigeant 6 Date de naissance</th>
                                          <th>Dirigeant 6 Fonction</th>
                                          <th>Dirigeant 6 Date de Fonction</th>
                                          <th>Dirigeant 7 Nom</th>
                                          <th>Dirigeant 7 Prénom</th>
                                          <th>Dirigeant 7 Date de naissance</th>
                                          <th>Dirigeant 7 Fonction</th>
                                          <th>Dirigeant 7 Date de Fonction</th>
                                          <th>Dirigeant 8 Nom</th>
                                          <th>Dirigeant 8 Prénom</th>
                                          <th>Dirigeant 8 Date de naissance</th>
                                          <th>Dirigeant 8 Fonction</th>
                                          <th>Dirigeant 8 Date de Fonction</th>
                                          <th>Dirigeant 9 Nom</th>
                                          <th>Dirigeant 9 Prénom</th>
                                          <th>Dirigeant 9 Date de naissance</th>
                                          <th>Dirigeant 9 Fonction</th>
                                          <th>Dirigeant 9 date de fonction</th>
                                          <th>Dirigeant 10 Nom</th>
                                          <th>Dirigeant 10 Prénom</th>
                                          <th>Dirigeant 10 Date de naissance</th>
                                          <th>Dirigeant 10 Fonction</th>
                                          <th>Dirigeant 10 Date Fonction</th>
                                          <th>Nom du Fichier</th>
                                          <th>Date du Fichier</th>
                                          <th>Lien Vers le Fichier </th>  
                                           <th>ID</th>    
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            </tbody>
                            <tfoot>
                                <tr>                              
                                     
                                    <th>DIVISION</th>
                                    <th>Salutation </th>
                                    <th> Salutaion Email</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Sexe</th>
                                    <th>EMAIL</th>
                                    <th>Preferred Language</th>
                                     <th>Phone Account</th>
                                    <th>Mobile</th>
                                    <th>FAX</th>
                                    <th>Account Name</th>
                                    <th>Account Number</th>
                                    <th>Identifiant Source</th>
                                    <th>Pays</th>
                                    <th>Billing Code</th>
                                    <th>Région</th>
                                    <th>Billing City</th>
                                    <th>Billing Province</th>
                                    <th>Billing Street</th>
                                   <th>Tranding Name</th>
                                    <th>Code d'activité</th>
                                    <th>RSZ1</th>
                                    <th>RSZ2</th>
                                    <th>RSZ3</th>
                                    <th>SECTION</th>
                                    <th>Description</th>
                                    <th>VAT Number</th>
                                    <th>Date d'immatriculation</th>
                                    <th>Site Internet</th>
                                    <th>Score de solvabilité</th>
                                    <th>Definition du Score</th>
                                    <th>Score international</th>
                                    <th>Limite de credit</th>
                                    <th>Catégorie juridique</th>
                                    <th>Employés</th>
                                    <th>Devise</th>
                                    <th>Chiffres d'affaires</th>
                                    <th>Bénéfices</th>
                                    <th>Bénéfice avant impôts  </th>
                                    <th>Total des immobilisations</th>
                                    <th>Total des actifs courants</th>
                                    <th>Total des passifs courants</th>
                                    <th>Total des passifs a long terme</th>
                                    <th>Fonds d'actionnaires</th>
                                    <th>Fond de roulement</th>
                                    <th>Ratio de liquidité général</th>
                                    <th> Marge bénéficiaire avant impôt</th>
                                    <th>Return on Total Assets Employed</th>
                                    <th>Ratio d'endettement total</th>
                                    <th>Ratio d'endettement</th>
                                    <th>Capital social</th>
                                    <th>Forme juridique</th>
                                   <th>Dirigeant 1 Nom </th>
                                    <th>Dirigeant 1 Prénom </th>
                                    <th>Dirigeant 1 date de naissance</th>
                                    <th>Dirigeant 1 Fonction</th>
                                    <th>Dirigeant 1 Date de fonction </th>
                                    <th>Dirigeant 2 Nom </th>
                                    <th>Dirigeant 2 Prénom </th>
                                    <th>Dirigeant 2 date de naissance </th>
                                    <th>Dirigeant 2 Fonction</th>
                                    <th>Dirigeant 2 Date de Fonction</th>
                                    <th>Dirigeant 3 Nom</th>
                                    <th>Dirigeant 3 Prénom</th>
                                    <th>Dirigeant 3 date de naissance</th>
                                    <th>Dirigeant 3 Fonction</th>
                                    <th>Dirigeant 3  Date de fonction</th>
                                    <th>Dirigeant 4 Nom</th>
                                     <th>Dirigeant 4 Prénom</th>
                                    <th>Dirigeant 4 date de naissance</th>
                                    <th>Dirigeant 4 Fonction</th>
                                    <th>Dirigeant 4 Date de Fonction</th>
                                    <th>Dirigeant 5 Nom</th>
                                    <th>Dirigeant 5 Prénom</th>
                                    <th>Dirigeant 5 Date de naissance</th>
                                    <th>Dirigeant 5 Fonction</th>
                                    <th>Dirigeant 5 Date de Fonction</th>
                                    <th>Dirigeant 6 Nom</th>
                                    <th>Dirigeant 6 Prénom</th>
                                    <th>Dirigeant 6 Date de naissance</th>
                                    <th>Dirigeant 6 Fonction</th>
                                    <th>Dirigeant 6 Date de Fonction</th>
                                    <th>Dirigeant 7 Nom</th>
                                    <th>Dirigeant 7 Prénom</th>
                                    <th>Dirigeant 7 Date de naissance</th>
                                    <th>Dirigeant 7 Fonction</th>
                                    <th>Dirigeant 7 Date de Fonction</th>
                                    <th>Dirigeant 8 Nom</th>
                                    <th>Dirigeant 8 Prénom</th>
                                    <th>Dirigeant 8 Date de naissance</th>
                                    <th>Dirigeant 8 Fonction</th>
                                    <th>Dirigeant 8 Date de Fonction</th>
                                    <th>Dirigeant 9 Nom</th>
                                    <th>Dirigeant 9 Prénom</th>
                                    <th>Dirigeant 9 Date de naissance</th>
                                    <th>Dirigeant 9 Fonction</th>
                                    <th>Dirigeant 9 date de fonction</th>
                                    <th>Dirigeant 10 Nom</th>
                                    <th>Dirigeant 10 Prénom</th>
                                    <th>Dirigeant 10 Date de naissance</th>
                                    <th>Dirigeant 10 Fonction</th>
                                    <th>Dirigeant 10 Date Fonction</th>
                                    <th>Nom du Fichier</th>
                                    <th>Date du Fichier</th>
                                    <th>Lien Vers le Fichier </th> 
                                    <th>ID</th>  
                      </tr>
                            </tfoot>
                         
                        </table>
                       
                        <!-- <div class="dataTables_info" id="empTable_info" role="status" aria-live="polite"><span id = "id_rowNumber"></span></div> -->
                    </div>
                  
                <button type="button" class="btn btn-success" onClick="window.location.reload();">Clear Filter</button>
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






</body>

<script>
  
 
$(document).ready(function(){
    // IfExistRowDataBase();
    $('#empTable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
    var  table  = $('#empTable').DataTable({
        
            initComplete: function () {
            // Apply the search
            this.api().columns().every(function () {
                    var that = this;
                    $('input', this.footer()).keypress(function (e) {
                        if (e.keyCode == 13) { //search only when Enter key is pressed to avoid wasteful calls
                            e.preventDefault(); 
                             if (that.search() !== this.value) {
                                 that
                                    .search(this.value)
                                    .draw(); 
                            } 
                        }
                       
                    });
            } );
            
        }, 
            scrollY: "500px",
            "scrollX": true,
            "paging": true,
            "bDeferRender": true,
            "bProcessing": true,
            // "processing": true,
        "language": {
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '},
            "bServerSide": true,
            // "responsive":true,
            //"bScrollCollapse" : true,
            "ajax": "serverSide/ConnectionDataBase_001.php", 
            'pageLength': 100,
            lengthChange: false,
            "columnDefs": [
            {
                "targets": [ 1 ],
                "visible": true,
          
            },
            {
                "targets": [ 2 ],
                "visible": false
            },
            {
                "targets": [ 10 ],
                "visible": false
            },
            {
                "targets": [ 15 ],
                "visible": false
            },
            {
                "targets": [ 20],
                "visible": false
            },
            {
                "targets": [ 22 ],
                "visible": false
            },
            {
                "targets": [ 23 ],
                "visible": false
            },
            {
                "targets": [ 24 ],
                "visible": false
            },
            {
                "targets": [ 25 ],
                "visible": false
            },
            {
                "targets": [ 27 ],
                "visible": false
            },
            {
                "targets": [ 28 ],
                "visible": false
            },
            {
                "targets": [ 29 ],
                "visible": false
            },
            {
                "targets": [ 32 ],
                "visible": false
            },
            {
                "targets": [ 33 ],
                "visible": false
            },
            {
                "targets": [ 34 ],
                "visible": false
            },
            {
                "targets": [ 35 ],
                "visible": false
            },
            {
                "targets": [ 36 ],
                "visible": false
            },
            {
                "targets": [ 37 ],
                "visible": false
            },
            {
                "targets": [ 38 ],
                "visible": false
            },
            {
                "targets": [ 39 ],
                "visible": false
            },
            {
                "targets": [ 40 ],
                "visible": false
            },
            {
                "targets": [ 42 ],
                "visible": false
            },
            {
                "targets": [ 43 ],
                "visible": false
            },
            {
                "targets": [ 44],
                "visible": false
            },
            {
                "targets": [ 45 ],
                "visible": false
            },
            {
                "targets": [ 46 ],
                "visible": false
            },
            {
                "targets": [ 47 ],
                "visible": false
            },
            {
                "targets": [ 48 ],
                "visible": false
            },
            {
                "targets": [ 49 ],
                "visible": false
            },
            {
                "targets": [ 50 ],
                "visible": false
            },
            {
                "targets": [ 51 ],
                "visible": false
            },
            {
                "targets": [ 52 ],
                "visible": false
            },
            {
                "targets": [ 53 ],
                "visible": false
            },
            {
                "targets": [ 54 ],
                "visible": false
            },
            {
                "targets": [ 55 ],
                "visible": false
            },
            {
                "targets": [ 56 ],
                "visible": false
            },{
                "targets": [ 57 ],
                "visible": false
            },{
                "targets": [ 58 ],
                "visible": false
            },{
                "targets": [ 59 ],
                "visible": false
            },{
                "targets": [ 60 ],
                "visible": false
            },{
                "targets": [ 61 ],
                "visible": false
            },{
                "targets": [ 62 ],
                "visible": false
            },{
                "targets": [ 63 ],
                "visible": false
            },{
                "targets": [ 64 ],
                "visible": false
            },{
                "targets": [ 65 ],
                "visible": false
            },{
                "targets": [ 66 ],
                "visible": false
            },{
                "targets": [ 67 ],
                "visible": false
            },{
                "targets": [ 68 ],
                "visible": false
            },{
                "targets": [ 69 ],
                "visible": false
            },{
                "targets": [ 70 ],
                "visible": false
            },{
                "targets": [ 71 ],
                "visible": false
            },{
                "targets": [ 72 ],
                "visible": false
            },{
                "targets": [ 73 ],
                "visible": false
            },{
                "targets": [ 74 ],
                "visible": false
            },{
                "targets": [ 75 ],
                "visible": false
            },{
                "targets": [ 76 ],
                "visible": false
            },{
                "targets": [ 77 ],
                "visible": false
            },{
                "targets": [ 78 ],
                "visible": false
            },{
                "targets": [ 79 ],
                "visible": false
            },{
                "targets": [ 80 ],
                "visible": false
            },{
                "targets": [ 81 ],
                "visible": false
            },{
                "targets": [ 82 ],
                "visible": false
            },{
                "targets": [ 83 ],
                "visible": false
            },{
                "targets": [ 84 ],
                "visible": false
            },{
                "targets": [ 85 ],
                "visible": false
            },{
                "targets": [ 86 ],
                "visible": false
            },{
                "targets": [ 87 ],
                "visible": false
            },{
                "targets": [ 88 ],
                "visible": false
            },{
                "targets": [ 89 ],
                "visible": false
            },{
                "targets": [ 90 ],
                "visible": false
            },{
                "targets": [ 91 ],
                "visible": false
            },{
                "targets": [ 92 ],
                "visible": false
            },{
                "targets": [ 93 ],
                "visible": false
            },
            {
                "targets": [ 94 ],
                "visible": false
            },
            {
                "targets": [ 95 ],
                "visible": false
            },
            {
                "targets": [ 96 ],
                "visible": false
            },
            {
                "targets": [ 97 ],
                "visible": false
            },
            {
                "targets": [ 98 ],
                "visible": false
            },
            {
                "targets": [ 99 ],
                "visible": false
            },
            {
                "targets": [ 100 ],
                "visible": false
            },
            {
                "targets": [ 101 ],
                "visible": false
            },
            {
                "targets": [ 102 ],
                "visible": false
            },
            {
                "targets": [ 104 ],
                "visible": false
            },
            {
                "targets": [ 105 ],
                "visible": false
            },
            {
                "targets": [ 106 ],
                "visible": false
            },
        ],
            dom: 'Bfrtip',            
            //colReorder: true,
           "buttons" : [
             {
                    extend: 'excelHtml5',
                    text: 'EXCEL',
                    title: '',
				    filename: 'Data Target all',
                //    "action": newexportaction,
                   page:'all',
                },
                {
                    extend: 'csv',
                    text: 'CSV ',
                    fieldSeparator: ';',
                    title: '',
                    filename: 'Data Target all'
                },
            
           
                 {
        extend: 'colvis',
               }], 
            //    columns:[0,1,2,3],
        });
    });
   
    
 /*    const IfExistRowDataBase = () => {
  let nbr_row;
    $.ajax({
      url: "serverSide/NumberOfRows.php",
      success: function (result) {
        nbr_row = result; 
        $('#id_rowNumber').empty();
        $('#id_rowNumber').append("Il y a  "+" "+result+" "+ "enregistrements filtrer");
      },
    });
}; */
   
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
    const JSalert = (status, message, type) => {
        Swal.fire(status, message, type);
    };
    
    $('#Btn_TransPhingo').click(function () {
        JSalertWait('Transformation de données');
        $.ajax({
        url: "serverSide/ScriptPhingoo.php",
        success: (result) => {
        if(result.trim() == "Bien" ){ 
            JSalert("Succès", "Les donnèes ont été bien transformer !","success");
          }
          else{
            JSalert("Erreur", "Une erreur est survenue lors de la transformation !", "error");
          }
        },
      });
   });
   
</script>
</html>

