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
    <!-- Checkbox -->
    <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <!-- <link href=" https://datatables.net/plug-ins/api/fnFilterClear"> -->
   
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"> -->
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">   -->
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
    <!-- Swal Alert-->
    <!-- <link rel="stylesheet" href="alert/dist/sweetalert.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script> -->    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                                <h6 class="m-0 font-weight-bold text-primary">Liste d'acheteurs</h6>
                            </div>
                        </div>
                        <div class="card-body" id="">
                            <div class="card-body" >
                                        <button type="button" class="btn btn-success" id="clear-choices">Vider les choix</button>                                                
                        <table id="selections_seg" style="border-collapse:separate; border-spacing:10px">
                                <tr>
                                    <th>Prix</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="seg-1-choice" name="seg1" value="1">
                                        <label>0-500$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-2-choice" name="seg2" value="2">
                                        <label>500$-1M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-3-choice" name="seg3" value="3">
                                        <label>1M$-2M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-4-choice" name="seg4" value="4">
                                        <label>2M$-5M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-5-choice" name="seg5" value="5">
                                        <label>5M$-10M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-6-choice" name="seg6" value="6">
                                        <label>10M$-40M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-7-choice" name="seg7" value="7">
                                        <label>> 40M$ </label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        </div>
                                    
                    </div> 

                    <form id="data_actif">
                    <!-- Toggle column: <a class="toggle-vis" data-column="0">DIVISION</a> - <a class="toggle-vis" data-column="1">Salutation</a> - <a class="toggle-vis" data-column="2">Salutation</a> - <a class="toggle-vis" data-column="3">Age</a> - <a class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis" data-column="5">Salary</a> -->
                        <table  id="DataTable_segment" class='table display dataTable nowrap ' cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <th></th>
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
                            <button id="Btn_suivant" class="btn btn-success" style="margin-top:10%;">Suivant</button>
                        </div> 
                    </div> 
                            <!-- <div class="dataTables_info" id="empTable_info" role="status" aria-live="polite"><span id = "id_rowNumber"></span></div> -->
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
                <!-- https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script> -->
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script> 
   <!-- Fixed Rows -->
   <link href="//cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.dataTables.min.css" rel="stylesheet">
    <script src="//cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.0.1/js/dataTables.fixedColumns.min.js"></script>
   <script  >
        $(document).ready(function() {
            var table=	$('#DataTable_segment').DataTable( {
                // "fixedHeader": true,
                scrollY: "400px",
                "scrollX": true,
                pageLength: 50,
                "bProcessing": true,
                "responsive": true,
                "autoWidth": true,
                "lengthChange": false,
                dom: 'Bfrtip',
                buttons: [
                {
                    extend: 'excelHtml5',
                    text: 'Exporter la liste en Excel',
                    title: '',
                        filename: 'Data Target all',
                    
                    },
                    {
                    text: 'sélectionner tout',
                    action: function () {
                        table.rows({ search: 'applied' }).select()
                    }
                    },
                    {
                        text: 'Ne rien sélectionner',
                        action: function () {
                            table.rows().deselect();
                        }
                    }
                ],
                columnDefs: [
                    {
                        defaultContent: "",
                        orderable: true,
                        className: 'select-checkbox',
                        targets: 0,
                        selectRow: true,
                    }],
                    select: {
                            style:    'multi',
                            selector: 'td:first-child'
                        },
                    order: [[ 1, 'asc' ]],
                    "ajax" : {
                        "url":"serverSide/SrvS_Find_Actif.php",
                        dataSrc : ""
                    },
                    fixedColumns:   {
                        left: 1,
                    },
                  columns : [
                    {"data":""},
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
                    {"data":"ID_Seg",'visible' : false},
                    ],		
            } );
           
            let seg_1_col = 'e';
            let seg_2_col = 'e';
            let seg_3_col = 'e';
            let seg_4_col = 'e';
            let seg_5_col = 'e';
            let seg_6_col = 'e';
            let seg_7_col = 'e';
            
            $('#seg-1-choice').click(function(){
                if($(this).is(':checked')){
                    seg_1_col = 73;
                    table.draw();
                }else {
                    seg_1_col = 'e';
                    table.draw();
                }
            });
            $('#seg-2-choice').click(function(){
                if($(this).is(':checked')){
                    seg_2_col = 73;
                    table.draw();
                } else {
                    seg_2_col = 'e';
                    table.draw();
                }
            });
            $('#seg-3-choice').click(function(){
                if($(this).is(':checked')){
                    seg_3_col = 73;
                    table.draw();
                } else {
                    seg_3_col = 'e';
                    table.draw();
                }
            });
            $('#seg-4-choice').click(function(){
                if($(this).is(':checked')){
                    seg_4_col = 73;
                    table.draw();
                } else {
                    seg_4_col = 'e';
                    table.draw();
                }
            });
            $('#seg-5-choice').click(function(){
                if($(this).is(':checked')){
                    seg_5_col = 73;
                    table.draw();
                } else {
                    seg_5_col = 'e';
                    table.draw();
                }
            });
            $('#seg-6-choice').click(function(){
                if($(this).is(':checked')){
                    seg_6_col = 73;
                    table.draw();
                } else {
                    seg_6_col = 'e';
                    table.draw();
                }
            });
            $('#seg-7-choice').click(function(){
                if($(this).is(':checked')){
                    seg_7_col = 73;
                    table.draw();
                } else {
                    seg_7_col = 'e';
                    table.draw();
                }
            });

            $('#clear-choices').on("click", function () {
                $('#seg-1-choice').prop('checked',false);
                $('#seg-2-choice').prop('checked',false);
                $('#seg-3-choice').prop('checked',false);
                $('#seg-4-choice').prop('checked',false);
                $('#seg-5-choice').prop('checked',false);
                $('#seg-6-choice').prop('checked',false);
                $('#seg-7-choice').prop('checked',false);
                seg_1_col = 'e';
                seg_2_col = 'e';
                seg_3_col = 'e';
                seg_4_col = 'e';
                seg_5_col = 'e';
                seg_6_col = 'e';
                seg_7_col = 'e';
                table.search( '' );
                table.columns().search( '' );
                table.draw();
            });

            $.fn.dataTable.ext.search.push(function( settings, searchData, index, rowData, counter ) {
                return (
                    searchData[seg_1_col] === '1'
                    || searchData[seg_2_col] === '2'
                    || searchData[seg_3_col] === '3'
                    || searchData[seg_4_col] === '4'
                    || searchData[seg_5_col] === '5'
                    || searchData[seg_6_col] === '6'
                    || searchData[seg_7_col] === '7'
                    || (seg_1_col === 'e' && seg_2_col === 'e' && seg_3_col === 'e' && seg_4_col === 'e' && seg_5_col === 'e' && seg_6_col === 'e' && seg_7_col === 'e')
                );
            });

            $('#DataTable_segment tbody').on( 'click', 'tr', function () {
                $(this).toggleClass('selected');
            } );

            $('#Btn_Enregistrer').click( function () {
                const Mydata = table.rows('.selected').data().toArray();
                JSalertWait();
                $.ajax({
                    type: "post",
                    url: "serverSide/insert_acteur_input.php",
                    data: {data : Mydata},
                    success: (data) => {
                        if(data.trim() === "New Records Created Successfully" ){ 
                            JSalert("Succès", "Les donnèes ont été bien enregistrées !","success");
                    } else {
                            JSalert("Erreur", "Une erreur est survenue lors de la sauvegarde !","error");
                    };
                    },
                });
            } );
            
            $('#Btn_suivant').click( function () {
                
                let string_segment = '';
                if($('#seg-1-choice:checked').is(':checked')){
                    string_segment += "WHERE Segment_1 in(1) ";
                }
                if($('#seg-2-choice:checked').is(':checked')){
                    string_segment += "WHERE Segment_2 in(1)";
                }
                if($('#seg-3-choice:checked').is(':checked')){
                    string_segment += "WHERE Segment_3 in(1)";
                }
                if($('#seg-4-choice:checked').is(':checked')){
                    string_segment += "WHERE Segment_4 in(1)";
                }
                if($('#seg-5-choice:checked').is(':checked')){
                    string_segment += "WHERE Segment_5 in(1)";
                }
                if($('#seg-6-choice:checked').is(':checked')){
                    string_segment += "WHERE Segment_6 in(1)";
                }
                if($('#seg-7-choice:checked').is(':checked')){
                    string_segment += "WHERE Segment_7 in(1)";
                }
                localStorage.setItem("Actif_ByAcheteur", JSON.parse(JSON.stringify(string_segment.slice(0, -1)))); 
                window.open("index_findBy_Acheteur.php", '_self');
            } );
        } );

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
</body>
</html>

