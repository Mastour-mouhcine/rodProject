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
    <link href="//cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.dataTables.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
                        <button id="Btn_Acceuil" class="btn btn-success">Page d'accueil</button>
                    </div>
                        <div class="card-body" id="x">

                            <table id="Edit_zoho_compte" class="table display nowrap" cellspacing="0" width="100%">
                                <div class="card-header py-2" style="display: flex; justify-content: space-between; align-items: center; background-color: white;     margin-bottom: 10px;  border-style: none;" >
                                    <div>
                                        <h6 class="m-0 font-weight-bold text-primary"style="font-size: 18px;">Import Zoho Contact</h6>
                                    </div>
                                </div>
                                <thead>
                                <tr>
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

    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <!-- DAtaTAbleExcel -->
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <!-- Filtre table -->
    <script src="//cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    



    <script src="js/dataTable_OutPut.js" type="text/javascript" ></script>


    <!-- Page Index_OutPut Mail -->
    <script type="text/javascript">

        $('#Btn_Acceuil').click(function () {
              location.href = "index001.php";  
        });

        let editor;
    $(document).ready(function() {
    // EDIT OT DELETE
    editor = new $.fn.dataTable.Editor({
      
      //ajax: "serverSide/ActionEditDelete.php",
      ajax: "serverSide/staffEditContact.php",
      table: "#Confirm_mail",
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
          label: "Forme Juridique",
          name: "forme_juridique"
        },{
          label: "Nace Code",
          name: "nace_code"
        },{
              
              
              
              Account Name
              Lead Status
              Acheteur
              Vendeur
              Prospect Source
              Converting Agent
              Source list name
              Vendor Assessment Notes
              New Import
              Contact Owner
              Business Finder Name
              Home Phone
              Secondary Email
              Mandataire
              Mail du commentaire
              Description
            label: "Nace Description",
            name: "nace_description"
          },{
            label: "Contact Position",
            name: "contact_position"
          },{
            label: "Numero Entreprise",
            name: "numero_entreprise"
          },{
            label: "Province",
            name: "province"
          },{
            label: "Website",
            name: "website"
          },{
            label: "Sexe",
            name: "sexe"
          },{
            label: "Mail Direct",
            name: "mail_direct"
          },{
            label: "Mail General",
            name: "mail_general"
          },{
            label: "Gsm",
            name: "gsm"
          },{
            label: "Tel Direct",
            name: "tel_direct"
          },{
            label: "Commentaire Appel",
            name: "commentaire_appel"
          },{
            label: "Prenom Inter",
            name: "prenom2"
          },{
            label: "Nom Inter",
            name: "nom2"
          },{
            label: "Status Mail",
            name: "mail_status",
            type:"hidden"
          }
        ]
      });
      // GET DATA
      let myTable = $("#Confirm_mail").DataTable({
      scrollX: true,
      processing: true,
      pageLength: 100,
      ajax: {
        url: "serverSide/ConnectionValidateMail.php",
       //url: "serverSide/staff.php",
        dataSrc: "",
      },
      dataSrc: "",
      //"pageLength": 25, //taille page
      order: [[ 27, 'asc' ],[ 1, 'asc' ]], //added 
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
      /* "aaSorting": [
        [27, "asc"]
      ], */
      "fnRowCallback": function(row, aData, iDisplayIndex, iDisplayIndexFull) {
        if (aData['mail_status'] == "valid") {
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
          filename: "export zoho ",
          text: "Exporter tout (Excel)",
        },
        {
          extend: "csv",
          title: "export zoho ",
          text: "Exporter tout (CSV)",
          fieldSeparator: ";",
        },
        //'selectNone',
        {
          extend: "excel",
          title: '',
          filename: "export zoho invalid mail",
          text: "Télécharger emails non valides",
          exportOptions: {
            columns: ':not(:first-child)',
            //columns: ':not(:last-child)',
            rows: function(idx, data, node) {
              if ( data['mail_status'] != "valid") {
                return true;
              }
            }
          }
        },
      ],
    });
} );


    </script>



</body>


</html>
