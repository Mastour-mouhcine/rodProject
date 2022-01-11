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
    <!-- <link href=" https://datatables.net/plug-ins/api/fnFilterClear"> -->
   
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">

     <!-- Swal Alert-->
    <!-- <link rel="stylesheet" href="alert/dist/sweetalert.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
    <!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script> 
    -->    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


      <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/fc-4.0.1/datatables.min.css"/>
    
    <style>
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
                        
                        <table id='empTable' class='table display dataTable nowrap 'cellspacing="0" width="100%">

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
                            </tfoot>
                         
                        </table>
                       
                            
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

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


   <!-- Datatable JS -->
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<!-- <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.11.3/api/fnFilterAll.js"></script>
 --><!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>-->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/fc-4.0.1/datatables.min.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/b-html5-2.0.1/fc-4.0.1/datatables.min.js"></script>
 <!-- <script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
 --><script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</body>

<script>
  
 
$(document).ready(function(){
   
     function newexportaction(e, dt, button, config) {
         var self = this;
         var oldStart = dt.settings()[0]._iDisplayStart;
         dt.one('preXhr', function (e, s, data) {
             // Just this once, load all data from the server...
             data.start = 0;
             data.length = 2147483647;
             dt.one('preDraw', function (e, settings) {
                 // Call the original action function
                 if (button[0].className.indexOf('buttons-copy') >= 0) {
                     $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                     $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                     $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                 } 
                 dt.one('preXhr', function (e, s, data) {
                     // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                     // Set the property to what it was before exporting.
                     settings._iDisplayStart = oldStart;
                     data.start = oldStart;
                 });
                 // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                 setTimeout(dt.ajax.reload, 0);
                 // Prevent rendering of the full data to the DOM
                 return false;
             });
         });
         // Requery the server with the new one-time export settings
         dt.ajax.reload();
     } 
    $('#empTable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
    
    var  table  = $('#empTable').DataTable({
       /*  'search': {
    'smart': false,
    'regex': true
  }, */
            initComplete: function () {
            // Apply the search
            this.api().columns().every(function () {
                    var that = this;
                    $('input', this.footer()).keypress(function (e) {
                        if (e.keyCode == 13) { //search only when Enter key is pressed to avoid wasteful calls
                            e.preventDefault(); 
                          
                            //input is within <form> element which submits form when Enter key is pressed. e.preventDefault() prevents this
                             //table.search(this.value).draw();
                             if (that.search() !== this.value) {
                                 that
                                    .search(this.value)
                                    .draw(); 
                                    // table.search(this.value).draw();
                                    // oTable.column().search("|",true,false).draw();
                            } 
                        }
                       
                    });
            } );
            
        }, 
//   "lengthMenu": [[50, 250, 500, 1000], [50, 250, 500, 1000]],
            scrollY: "500px",
            "scrollX": true,
            "paging": true,
          //  "paging": true,
           /* "deferRender": true,
            "processing": true,
            "serverSide": true, */
            "bDeferRender": true,
            "bProcessing": true,
            "bServerSide": true,
            // "responsive":true,
            //"bScrollCollapse" : true,
            "ajax": "serverSide/ConnectionDataBase_001.php", 
            //"deferLoading": [ 10, 20 ],
            'pageLength': 10,
        //'lengthMenu': [[10, 20, 25, 50, -1], [10, 20, 25, 50, 'All']], 
           // sPaginationType: "full_numbers",
            // orderCellsTop: true,
            // fixedHeader: true,
          /* 'ajax': {
                'url':'serverSide/ConnectionDataBase_001.php',
               }, */
           
               
 
            //filterType: 'multiselect',
            dom: 'lBfrtip',
               
             "buttons": [
                 {
                    extend: 'colvis',
                 },
                {
                    extend: 'excelHtml5',
                    text: 'EXCEL Export',
                    customizeData: function( e, dt, node, config ) {
                            $("#empTable").DataTable().search('').draw()
                        },
            exportOptions: {
                modifier: {
                    selected: true
                }
            },
                    
                    title: '',
				    filename: 'Data Target all',
                   "action": newexportaction,
                   exportOptions: {
                rows: ':visible'
}
                },
                {
                    extend: 'csv',
                    text: 'CSV Export',
                    fieldSeparator: ';',
                    title: '',
                    filename: 'Data Target all',
                    "action": newexportaction,
                },
            ], 
            
        });
       
    });
//     var table = $('#empTable').DataTable({
//             initComplete: function () {
//             count = 0;
//             this.api().columns().every( function () {
//                 var title = this.header();
//                 //replace spaces with dashes
//                 title = $(title).html().replace(/[\W]/g, '-');
//                 var column = this;
//                 var select = $('<select id="' + title + '" class="select2" ></select>')
//                     .appendTo( $(column.footer()).empty() )
//                     .on( 'change', function () {
//                       //Get the "text" property from each selected data 
//                       //regex escape the value and store in array
//                       var data = $.map( $(this).select2('data'), function( value, key ) {
//                         return value.text ? '^' + $.fn.dataTable.util.escapeRegex(value.text) + '$' : null;
//                                  });
                      
//                       //if no data selected use ""
//                       if (data.length === 0) {
//                         data = [""];
//                       }
                      
//                       //join array into string with regex or (|)
//                       var val = data.join('|');
                      
//                       //search for the option(s) selected
//                       column
//                             .search( val ? val : '', true, false )
//                             .draw();
//                     } );
 
//                 column.data().unique().sort().each( function ( d, j ) {
//                     select.append( '<option value="'+d+'">'+d+'</option>' );
//                 } );
              
//               //use column title as selector and placeholder
//               $('#' + title).select2({
//                 multiple: true,
//                 closeOnSelect: false,
//                 placeholder: "Select a " + title
//               });
              
//               //initially clear select otherwise first option is selected
//               $('.select2').val(null).trigger('change');
//             } );
//         }
//   });
// } );

    $('#Btn_Acceuil').click(function () {
        
         location.href = "index001.php"; 
    });
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