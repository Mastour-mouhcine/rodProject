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
                    <div style="display: flex;">
                        <a href="index001.php"><img src="img/rod_logo.png"></a>
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
                        <button id="btn_envoyer_mail" disabled class="btn btn-success" >Envoyer les emails</button> 

                    </div>
                    <div class="card-body" id="x">
                        <table id="outPut-detail" class="table display nowrap" cellspacing="0" width="100%">
                            <div class="card-header py-2" style="display: flex; justify-content: space-between; align-items: center; background-color: white;
                            margin-bottom: 10px; margin-top: -15px;  border-style: none;" >
                                <div>
                                    <h6 class="m-0 font-weight-bold text-primary"style="font-size: 18px;">Import Zoho All</h6>
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
                                <th>Account Number</th>
                                <th>Billing Street</th>
                                <th>Billing Code</th>
                                <th>Billing City</th>
                                <th>Billing Province (BE)</th>
                                <th>Phone (Account)</th>
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
                    <div class="card-body" id="x">

                        <table id="import_zoho_compte" class="table display nowrap" cellspacing="0" width="100%">
                            <div class="card-header py-2" style="display: flex; justify-content: space-between; align-items: center; background-color: white;     margin-bottom: 10px;
                            margin-top: -15px;  border-style: none;" >
                                <div>
                                    <h6 class="m-0 font-weight-bold text-primary" style="font-size: 18px;">Import Zoho Compte</h6>
                                </div>
                            </div>
                            <thead>
                            <tr>
                                <th>Province (BE)</th>
                                <th>Account Name</th>
                                <th>Account Number</th>
                                <th>Billing Street</th>
                                <th>Billing Code</th>
                                <th>Billing City</th>
                                <th>Billing Province (BE)</th>
                                <th>Phone (Account)</th>
                                <th>Contact Owner</th>
                            </tr>
                            </thead>
                        </table>

                        <div class="card-body" id="x">

                            <table id="import_zoho_contact" class="table display nowrap" cellspacing="0" width="100%">
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
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>

    
    <!-- Filtre table -->
    <script src="//cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
    



    <script src="js/dataTable_OutPut.js" type="text/javascript" ></script>


    <!-- Page Index_OutPut Mail -->
    <script type="text/javascript">
         //Number Of rows if exist
         const IfExistRowDataBase = () => {
        let nbr_row;
            $.ajax({
            url: "serverSide/NumberOfRowsSendMail.php",
            success: function (result) {
                nbr_row = result; 
                if(nbr_row != 0){
                document.getElementById('btn_envoyer_mail').disabled=false;
                }
            },
            });
        };
        IfExistRowDataBase();              //call function
    </script>



</body>


</html>
