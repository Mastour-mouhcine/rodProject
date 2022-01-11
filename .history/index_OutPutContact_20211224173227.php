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

    <title>Rodschinson</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.dataTables.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--DataTable Editable-->
    <link href="//cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css" rel="stylesheet">
    <link href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Swal Alert-->
    <!-- <link rel="stylesheet" href="alert/dist/sweetalert.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script> -->    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Button Hover tooltip -->
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

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
                    <div>
                        <img src="img/rod_logo.png">
                    </div>
                    <div>
                        <h1 class="h3 text-gray-800">Rodschinson</h1>
                    </div>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center">
                        <div>
                            <h5 class="m-0 font-weight-bold text-primary">Visualisation Data Phingoo</h6>

                        </div>
                        <!-- Bouton excel -->
                        <!-- <div class="btn btn-info">
                            <input type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" id="excel_file" />
                        </div> -->
                        <!-- Je l'ai ajouté -->
                        <button id="Btn_Acceuil" class="btn btn-success">Page d'aaaccueil</button>
                    </div>
                    <div class="card-body" id="x">
                        <form id="fr">
                        <table id="Confirm_mail" class="table display nowrap" cellspacing="0" width="100%">
                            <div class="card-header py-2" style="display: flex; justify-content: space-between; align-items: center; background-color: white;     margin-bottom: 10px;
                            margin-top: -15px;  border-style: none;" >
                                <div>
                                    <h6 class="m-0 font-weight-bold text-primary" style="font-size: 18px;">Liste importée de Phingo</h6>
                                </div>
                            </div>
                            <thead>
                            <tr>
                                    <th></th>
                                    <th>Salutation</th>
                                    <th>Salutation Emails</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Preferred Language</th>
                                    <th>Mobile</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Other Street</th>
                                    <th>Other Zip</th>
                                    <th>Other City</th>
                                    <th>Province (BE)</th>
                                    <th>Account Name</th>
                                    <th>Lead Status</th>
                                    <th>Acheteur</th>
                                    <th>Vendeur</th>
                                    <th>Prospect Source</th>
                                    <th>Converting Agent</th>
                                    <th>Source list name</th>
                                    <th>Vendor Assessment Notes</th>
                                    <th>New Import</th>
                                    <th>Contact Owner</th>
                                    <th>Business Finder Name</th>
                                    <th>Home Phone</th>
                                    <th>Secondary Email</th>
                                    <th>Mandataire</th>
                                    <th>Mail du commentaire</th>
                                    <th>Description</th>
                            </tr>
                            </thead>
                        </table>
                </form>
                    </div>
                    <div class="card-footer">
                        <div style="display: flex; justify-content: flex-end; align-items: center"> 
                            <div>
                            </div> 
                        </div> 
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>© RODSCHINSON INVESTMENT. ALL RIGHTS RESERVED.</span>
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
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!--DataTable Editable Js-->
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script type="text/javascript" src="js/demo/Editor-2.0.5/js/dataTables.editor.min.js"></script>
    <script type="text/javascript" src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
    <!-- DAtaTAbleExcel -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script> <!-- Top button to be deleted -->

    <!-- Filtre table -->
    <script src="//cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.0.1/js/dataTables.fixedColumns.min.js"></script>
    <script src="js/dataTable_ValidMail.js" type="text/javascript" ></script>
    <!-- Page Index_OutPut Mail -->
    <script type="text/javascript">      
        $('#Btn_Acceuil').click(function () {
              location.href = "index001.php";  
        });
        //let editor;
    $(document).ready(function() {
    // EDIT OT DELETE
    /* editor = new $.fn.dataTable.Editor({
      ajax: "serverSide/staffEditContact.php",
      table: "#Edit_zoho_compte",
      idSrc:  'DT_RowId', 
      fields: [{
                label: "DT_RowId",
                name: "DT_RowId",
                type:"hidden"
            },{                                             
                label: "Salutation",
                name: "Salutation"
            }
            ,{                                             
                label: "Salutation Emails",
                name: "Salutation Emails"
            },{
                label: "First Name",
                name: "First Name"
            },{
                label: "Last Name ",
                name: "Last Name "
            },{
                label: "Preferred Language",
                name: "Preferred Language"
            },{
                label: "Mobile",
                name: "Mobile"
            },{
                label: "Phone",
                name: "Phone"
            },{
                label: "Email",
                name: "Email"
            },
            {
                label: "Other Street",
                name: "Other Street"
            },{
                label: "Other Zip",
                name: "Other Zip"
            },{
                label: "Other City",
                name: "Other City"
            },{
                label: "Province (BE)",
                name: "Province (BE)"   //should be changed
            },{
                label: "Account Name",
                name: "Account Name"
            },{
                label: "Lead Status",
                name: "Lead Status"
            },{
                label: "Acheteur",
                name: "Acheteur"
            },{
                label: "Vendeur",
                name: "Vendeur"
            },{
                label: "Prospect Source",
                name: "Prospect Source"
            },{
                label: "Converting Agent",
                name: "Converting Agent"
            },{
                label: "Source list name",
                name: "Source list name"
            },{
                label: "Vendor Assessment Notes",
                name: "Vendor Assessment Notes"
            },{
                label: "Business Finder Name",
                name: "Business Finder Name"
            },{
                label: "Secondary Email",
                name: "Secondary Email"
            },{
                label: "Mandataire",
                name: "Mandataire"
            },{
                label: "Mail du commentaire",
                name: "Mail du commentaire"
            },{
                label: "Description",
                name: "Description"
            }
        ]
      }); */
      // GET DATA
      let myTable = $("#Edit_zoho_compte").DataTable({
      scrollX: true,
      processing: true,
      ajax: {
        url: "serverSide/import_zoho_contact.php",
       //url: "serverSide/staff.php",
        dataSrc: "",
      },
      dataSrc: "",
      //order: [[ 27, 'asc' ],[ 1, 'asc' ]], //added 
      fixedColumns:   {
        left: 1,
        },
      columns: [
        {
          data: null,
          defaultContent: "",
          className: "select-checkbox",
          orderable: false,
        },
            {"data":"Salutation"},
			{"data":"Salutation Emails"},
			{"data":"First Name"},
			{"data":"Last Name"},
			{"data":"Preferred Language"},
			{"data":"Mobile"},
			{"data":"Phone"},
			{"data":"Email"},
			{"data":"Other Street"},
			{"data":"Other Zip"},
			{"data":"Other City"},
			{"data":"Province (BE)"},
			{"data":"Account Name"},
			{"data":"Lead Status"},
			{"data":"Acheteur"},
			{"data":"Vendeur"},
			{"data":"Prospect Source"},
			{"data":"Converting Agent"},
			{"data":"Source list name"},
			{"data":"Vendor Assessment Notes"},
			{"data":"New Import"},
			{"data":"Contact Owner"},
			{"data":"Business Finder Name"},
			{"data":"Home Phone"},
			{"data":"Secondary Email"},
			{"data":"Mandataire"},
			{"data":"Mail du commentaire"},
			{"data":"Description"},
        ],
      select: {
        style: "os",
        selector: "td:first-child",
      },
      select: true,
      dom: "Bfrtip",
      buttons: [
        {
          extend: "edit",
          editor: editor,
          text: "Modifier",
          formTitle: "Modifier l'enregistrementfier ",
          formButtons: ["Modifier"],
        },
        {
          extend: "remove",
          editor: editor,
          text: "Supprimer",
          formTitle: "Supprimer l'enregistrement",
          formButtons: ["Supprimer"],
          formMessage: "Etes-vous sûr de vouloir supprimer la ligne",
        },
        {
          extend: "excel",
          title: '',
          filename: "export zoho contact",
          text: "Exporter tout (Excel)",
        },
        {
          extend: "csv",
          title: "export zoho contact",
          text: "Exporter tout (CSV)",
          fieldSeparator: ";",
        },
        //'selectNone',  
      ],
    });
} );
    </script>
</body>
</html>
