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
                                <h6 class="m-0 font-weight-bold text-primary">Rapport Des Mails Envoyée</h6>
                            </div>
                        </div>
                        <div class="card-body" id="">
                            <div class="card-body" >
                                        <button type="button" class="btn btn-success" id="clear-choices">Vider les choix</button>                                                
                        <table id="selections_seg" style="width:60%;border-spacing: 15px;">
                            <thead>
                                <tr>
                                    <th>Segments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="seg-1-choice" name="seg1" value="0-500">
                                        <label>0-500$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-2-choice" name="seg2" value="500-1M">
                                        <label>500$-1M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-3-choice" name="seg3" value="1M-2M">
                                        <label>1M$-2M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-4-choice" name="seg4" value="2M-5M">
                                        <label>2M$-5M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-5-choice" name="seg5" value="5M-10M">
                                        <label>5M$-10M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-6-choice" name="seg6" value="10M-40M">
                                        <label>10M$-40M$</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="seg-7-choice" name="seg7" value="40M >">
                                        <label>> 40M$ </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            </div>
                        </div>
                                    
                    </div> 

                    <form id="data_actif">
                    <!-- Toggle column: <a class="toggle-vis" data-column="0">DIVISION</a> - <a class="toggle-vis" data-column="1">Salutation</a> - <a class="toggle-vis" data-column="2">Salutation</a> - <a class="toggle-vis" data-column="3">Age</a> - <a class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis" data-column="5">Salary</a> -->
                        <table  id="import_zoho_contact1" class='table display dataTable nowrap ' cellspacing="0" width="100%">
                            <thead>
                                <tr>
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
                                </tr>
                            </thead>
                        </table>
                    </form>
                    <div style="display: flex; justify-content: flex-end; align-items: center"> 
                        <div> 
                            <button id="Btn_Truncate" class="btn btn-success" style="margin-top:10%;">Enregistrer</button>
                            <button id="Btn_selected" class="btn btn-success" style="margin-top:10%;">Selected</button>
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
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
    <script  >
        $(document).ready(function() {
            var table=	$('#import_zoho_contact1').DataTable( {
                scrollY: "400px",
                "scrollX": true,
                "bProcessing": true,
                "responsive": true,
                "autoWidth": true,
                columnDefs: [
                    {
                    orderable: false, 
                    }
                ],
                dom: 'lfirtp',
                "ajax" : {
                    "url":"serverSide/SrvS_Seg_Achteur.php",
                    "dataSrc" : ""
                },
                columns : [
                    {"data":"City"},
                    {"data":"company"}, 
                    {"data":"ID"},
                    {"data":"Salutation"},
                    {"data":"Salutation Email"},
                    {"data":"Last Name"},
                    {"data":"First Name"},
                    {"data":"Sexe"},
                    {"data":"Title"},
                    {"data":"Preferred Language"},
                    {"data":"Email"},
                    {"data":"Phone"},
                    {"data":"Mobile"},
                    {"data":"Address"},
                    {"data":"Country"},
                    {"data":"Region"},
                    {"data":"Source"},
                    {"data":"Segment_1", render: function(data, type, row) {
                            if (row.Segment_1 == 1) {
                                return "0-500";
                            }
                            return "No data";
                        }},
                    {"data":"Segment_2", render: function(data, type, row) {
                            if (row.Segment_2 == 1) {
                                return "500-1M";
                            }
                            return "No data";
                        }},
                    {"data":"Segment_3", render: function(data, type, row) {
                            if (row.Segment_3 == 1) {
                                return "1M-2M";
                            }
                            return "No data";
                        }},
                    {"data":"Segment_4", render: function(data, type, row) {
                            if (row.Segment_4 == 1) {
                                return "2M-5M";
                            }
                            return "No data";
                        }},
                    {"data":"Segment_5", render: function(data, type, row) {
                            if (row.Segment_5 == 1) {
                                return "5M-10M";
                            }
                            return "No data";
                        }},
                    {"data":"Segment_6", render: function(data, type, row) {
                            if (row.Segment_6 == 1) {
                                return "10M-40M";
                            }
                            else{
                                return "No data";
                            }
                        }},
                    {"data":"Segment_7", render: function(data, type, row) {
                            if (row.Segment_7 == 1) {
                                return "40M >";
                            }
                            return "No data";
                        }},
                    {"data":"Brand_1"},
                    {"data":"Brand_2"},
                    {"data":"Brand_3"},
                    {"data":"Secteur"},
                    {"data":"Solvabilite"},
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
                    seg_1_col = 17;
                    table.draw();
                }else {
                    seg_1_col = 'e';
                    table.draw();
                }
            });
            $('#seg-2-choice').click(function(){
                if($(this).is(':checked')){
                    seg_2_col = 18;
                    table.draw();
                } else {
                    seg_2_col = 'e';
                    table.draw();
                }
            });
            $('#seg-3-choice').click(function(){
                if($(this).is(':checked')){
                    seg_3_col = 19;
                    table.draw();
                } else {
                    seg_3_col = 'e';
                    table.draw();
                }
            });
            $('#seg-4-choice').click(function(){
                if($(this).is(':checked')){
                    seg_4_col = 20;
                    table.draw();
                } else {
                    seg_4_col = 'e';
                    table.draw();
                }
            });
            $('#seg-5-choice').click(function(){
                if($(this).is(':checked')){
                    seg_5_col = 21;
                    table.draw();
                } else {
                    seg_5_col = 'e';
                    table.draw();
                }
            });
            $('#seg-6-choice').click(function(){
                if($(this).is(':checked')){
                    seg_6_col = 22;
                    table.draw();
                } else {
                    seg_6_col = 'e';
                    table.draw();
                }
            });
            $('#seg-7-choice').click(function(){
                if($(this).is(':checked')){
                    seg_7_col = 23;
                    table.draw();
                } else {
                    seg_7_col = 'e';
                    table.draw();
                }
            });

            $.fn.dataTable.ext.search.push(function( settings, searchData, index, rowData, counter ) {
                return (
                    searchData[seg_1_col] === '0-500'
                    || searchData[seg_2_col] === '500-1M'
                    || searchData[seg_3_col] === '1M-2M'
                    || searchData[seg_4_col] === '2M-5M'
                    || searchData[seg_5_col] === '5M-10M'
                    || searchData[seg_6_col] === '10M-40M'
                    || searchData[seg_7_col] === '40M >'
                    || (seg_1_col === 'e' && seg_2_col === 'e' && seg_3_col === 'e' && seg_4_col === 'e' && seg_5_col === 'e' && seg_6_col === 'e' && seg_7_col === 'e')
                );
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

            $('#import_zoho_contact1 tbody').on( 'click', 'tr', function () {
                $(this).toggleClass('selected');
            } );

            $('#Btn_Truncate').click( function () {
                // /alert( table.rows('.selected').data().length +' row(s) selected' );
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
            $('#Btn_selected').click( function () {
                
                let string_segment = '';
                if($('#seg-1-choice:checked').val() == '0-500'){
                    string_segment += "'"+$('#seg-1-choice').val()+"',";
                }
                if($('#seg-2-choice:checked').val() == '500-1M'){
                    string_segment += "'"+$('#seg-2-choice').val()+"',";
                }
                console.log(string_segment.slice(0, -1));
                /* if($('#seg-1-choice:checked').text() == '0-500'){
                    string_segment += "'"+$('#seg-1-choice').val()+"',";
                }
                if($('#seg-2-choice :selected').text() == '500-1M'){
                    string_segment += "'"+$('#seg-2-choice').find(":selected").text()+"',";
                }
                if($('#seg-3-choice :selected').text() == '1M-2M'){
                    string_segment += "'"+$('#seg-3-choice').find(":selected").text()+"',";
                }
                if($('#seg-4-choice :selected').text() == '2M-5M'){
                    string_segment += "'"+$('#seg-4-choice').find(":selected").text()+"',";
                }
                if($('#seg-5-choice :selected').text() == '5M-10M'){
                    string_segment += "'"+$('#seg-5-choice').find(":selected").text()+"',";
                }
                if($('#seg-6-choice :selected').text() == '10M-40M'){
                    string_segment += "'"+$('#seg-6-choice').find(":selected").text()+"',";
                }
                if($('#seg-7-choice :selected').text() == '40M >'){
                    string_segment += "'"+$('#seg-7-choice').find(":selected").text()+"',";
                }
                console.log(string_segment.slice(0, -1));
                sessionStorage.setItem("jsAaarray", JSON.stringify(string_segment.slice(0, -1))); */
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

