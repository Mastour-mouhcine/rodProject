
<?php


// $table = 'data_rods_test';
$table = 'Data_Rods_All';

$primaryKey = 'ID';
$serverName = "tcp:rods-data-server-01.database.windows.net,1433";
//$driver = '{SQL Server}';
/* "Driver" => "{ODBC Driver 17 for SQL Server}" */
/*  $connectionOptions = array("DataBase"=>"Data-Rods","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
'CharacterSet' => 'UTF-8'); */
$connectionOptions = array(
    "PWD" => "roods-pwd@1",
   "DataBase"=>"Data-Rods",
   "UID" => "admin-rods"
);


$columns = array(
   
   array('db' => 'DIVISION', 'dt' => 0),
   array('db' => 'Salutation', 'dt' => 1),
   array('db' => 'Salutaion email', 'dt' => 2),
   array('db' => 'First Name', 'dt' => 3),
   array('db' => 'Last Name', 'dt' => 4),
   array('db' => 'Sexe', 'dt' => 5),   
   array('db' => 'EMAIL', 'dt' => 6),
   array('db' => 'Preferred Language', 'dt' => 7),
   array('db' => 'Phone Account', 'dt' => 8),
   array('db' => 'Mobile', 'dt' => 9),
   array('db' => 'FAX', 'dt' => 10),
   array('db' => 'Account Name', 'dt' => 11),
   array('db' => 'Account Number', 'dt' => 12),
   array('db' => 'Identifiant Source', 'dt' => 13),
   array('db' => 'Pays', 'dt' => 14),
   array('db' => 'Billing Code', 'dt' => 15),
   array('db' => 'Billing City', 'dt' => 16),
   array('db' => 'Billing Province', 'dt' => 17),
   array('db' => 'Billing Street', 'dt' => 18),
   array('db' => 'Trading Name', 'dt' => 19),
   array('db' => 'RSZ1', 'dt' => 20),
   array('db' => 'RSZ2', 'dt' => 21),
   array('db' => 'RSZ3', 'dt' => 22),
   array('db' => 'SECTION', 'dt' => 23),
   array('db' => 'Description', 'dt' => 24),
   array('db' => 'VAT Number', 'dt' => 25),
   array('db' => "Date d'immatriculation", 'dt' => 26),
   array('db' => 'Site Internet', 'dt' => 27),
   array('db' => 'Definition du score', 'dt' => 28),
   array('db' => 'Score international', 'dt' => 29),
   array('db' => 'Devise', 'dt' => 30),
   array('db' => "Chiffres d'affaires", 'dt' => 31),
   array('db' => 'Total des immobilisations', 'dt' => 32),
   array('db' => 'Total des actifs courants', 'dt' => 33),
   array('db' => 'Total des passifs courants', 'dt' => 34),
   array('db' => "Fonds d'actionnaires", 'dt' => 35),
   array('db' => 'Fonds de roulement', 'dt' => 36),
   array('db' => 'Return on Total Assets Employed', 'dt' => 37),
   array('db' => "Ratio d'endettement total", 'dt' => 38),
   array('db' => "Ratio d'endettement", 'dt' => 39),
   array('db' => 'Capital social', 'dt' => 40),
   array('db' => 'Forme juridique', 'dt' => 41),
   array('db' => 'Dirigeant 1 Nom', 'dt' => 42),
   array('db' => 'Dirigeant 1 date de naissance', 'dt' => 43),
   array('db' => 'Dirigeant 1 Fonction', 'dt' => 44),
   array('db' => 'Dirigeant 1 Date de fonction', 'dt' => 45),
   array('db' => 'Dirigeant 2 Nom', 'dt' => 46),
   array('db' => 'Dirigeant 2 date de naissance', 'dt' => 47),
   array('db' => 'Dirigeant 2 Fonction', 'dt' => 48),
   array('db' => 'Dirigeant 2 Date de fonction', 'dt' => 49),
   array('db' => 'Dirigeant 3 Nom', 'dt' => 50),
   array('db' => 'Dirigeant 3 Fonction', 'dt' => 51),
   array('db' => 'Dirigeant 3 Date de fonction', 'dt' => 52),
   array('db' => 'Dirigeant 3 date de naissance', 'dt' => 53),
   array('db' => 'Nom Fichier', 'dt' => 54),
   array('db' => 'Date du Ficher', 'dt' => 55),
   array('db' => 'Lien Vers le Fichier', 'dt' => 56),
   array('db' => 'Région', 'dt' => 57),
   array('db' => 'code nace principal', 'dt' => 58),
   array('db' => 'Score de solvabilité', 'dt' => 59),
   array('db' => 'Limite de crédit', 'dt' => 60),
   array('db' => 'Catégorie juridique', 'dt' => 61),
   array('db' => 'Employés', 'dt' => 62),
   array('db' => 'Bénéfices', 'dt' => 63),
   array('db' => 'Bénéfice avant impôts', 'dt' => 64),
   array('db' => 'Total des passifs à long terme', 'dt' => 65),
   array('db' => 'Ratio de liquidité général', 'dt' => 66),
   array('db' => 'Marge bénéficiaire avant impôt', 'dt' => 67),
   array('db' => 'Dirigeant 1 Prénom', 'dt' => 68),
   array('db' => 'Dirigeant 2 Prénom', 'dt' => 69),
   array('db' => 'Dirigeant 3 Prénom', 'dt' => 70),
   array('db' => 'ID', 'dt' => 71),
   array('db' => 'code(s) nace', 'dt' => 72),
   array('db' => 'description(s) nace', 'dt' => 73),
   array('db' => 'description(s) des activités autres', 'dt' => 74),

);
$sql_details = array(
   'user' => $connectionOptions['UID'],
   'pass' => $connectionOptions['PWD'],
   'db'   => $connectionOptions['DataBase'],
   'host' => $serverName
   
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* If you just want to use the basic configuration for DataTables with PHP
* server-side, there is no need to edit below this line.
*/

require( 'ssp.class.php' );
// require '../../config/ssp.class.php';
echo json_encode(
   SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

?>


