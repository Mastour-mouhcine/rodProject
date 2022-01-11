
<?php

$table = 'data_rods_test';
//$table = 'data_rods';

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
    array('db' => "[Code d'activité]", 'dt' => 21),
    array('db' => "[RSZ1]", 'dt' => 22),
    array('db' => "[RSZ2]", 'dt' => 23),
    array('db' => "[RSZ3]", 'dt' => 24),
    array('db' => "[SECTION]", 'dt' => 25),
    array('db' => "[Description]", 'dt' => 26),
    array('db' => "[VAT Number]", 'dt' => 27),
    array('db' => "[Date d'immatriculation]", 'dt' => 28),
    array('db' => '[Site Internet]', 'dt' => 29),
    array('db' => '[Score de solvabilité]', 'dt' => 30),
    array('db' => '[Definition du score]', 'dt' => 31),
    array('db' => '[Score international]', 'dt' => 32),
    array('db' => '[Limite de crédit]', 'dt' => 33),
    array('db' => '[Catégorie juridique]', 'dt' => 34),
    array('db' => '[Employés]', 'dt' => 35),
    array('db' => '[Devise]', 'dt' => 36),
    array('db' => "[Chiffres d'affaires]", 'dt' => 37),
    array('db' => "[Bénéfices]", 'dt' => 38),
    array('db' => "[Bénéfice avant impôts]", 'dt' => 39),
    array('db' => "[Total des immobilisations]", 'dt' => 40),
    array('db' => "[Total des actifs courants]", 'dt' => 41),
    array('db' => "[Total des passifs courants]", 'dt' => 42),
    array('db' => "[Total des passifs à long terme]", 'dt' => 43),
    array('db' => "[Fonds d'actionnaires]", 'dt' => 44),
    array('db' => '[Fonds de roulement]', 'dt' => 45),
    array('db' => '[Ratio de liquidité général]', 'dt' => 46),
    array('db' => '[Marge bénéficiaire avant impôt]', 'dt' => 47),
    array('db' => '[Return on Total Assets Employed]', 'dt' => 48),
    array('db' => "[Ratio d'endettement total]", 'dt' => 49),
    array('db' => "[Ratio d'endettement]", 'dt' => 50),
    array('db' => '[Capital social]', 'dt' => 51),
    array('db' => '[Forme juridique]', 'dt' => 52),
    array('db' => '[Dirigeant 1 Nom]', 'dt' => 53),
    array('db' => '[Dirigeant 1 Prénom]', 'dt' => 54),
    array('db' => '[Dirigeant 1 date de naissance]', 'dt' => 55),
    array('db' => '[Dirigeant 1 Fonction]', 'dt' => 56),
    array('db' => '[Dirigeant 1 Date de fonction]', 'dt' => 57),
    array('db' => '[Dirigeant 2 Nom]', 'dt' => 58),
    array('db' => '[Dirigeant 2 Prénom]', 'dt' => 59),
    array('db' => '[Dirigeant 2 date de naissance]', 'dt' => 60),
    array('db' => '[Dirigeant 2 Fonction]', 'dt' => 61),
    array('db' => '[Dirigeant 2 Date de fonction]', 'dt' => 62),
    array('db' => '[Dirigeant 3 Nom]', 'dt' => 63),
    array('db' => '[Dirigeant 3 Prénom]', 'dt' => 64),
    array('db' => '[Dirigeant 3 date de naissance]', 'dt' => 65),
    array('db' => '[Dirigeant 3 Fonction]', 'dt' => 66),
    array('db' => '[Dirigeant 3 Date de fonction]', 'dt' => 67),
    array('db' => '[Dirigeant 4 Nom]', 'dt' => 68),
    array('db' => '[Dirigeant 4 Prénom]', 'dt' => 69),
    array('db' => '[Dirigeant 4 date de naissance]', 'dt' => 70),
    array('db' => '[Dirigeant 4 Fonction]', 'dt' => 71),
    array('db' => '[Dirigeant 4 Date de fonction]', 'dt' => 72),
    array('db' => '[Dirigeant 5 Nom]', 'dt' => 73),
    array('db' => '[Dirigeant 5 Prénom]', 'dt' => 74),
    array('db' => '[Dirigeant 5 date de naissance]', 'dt' => 75),
    array('db' => '[Dirigeant 5 Fonction]', 'dt' => 76),
    array('db' => '[Dirigeant 5 Date de fonction]', 'dt' => 77),
    array('db' => '[Dirigeant 6 Nom]', 'dt' => 78),
    array('db' => '[Dirigeant 6 Prénom]', 'dt' => 79),
    array('db' => '[Dirigeant 6 date de naissance]', 'dt' => 80),
    array('db' => '[Dirigeant 6 Fonction]', 'dt' => 81),
    array('db' => '[Dirigeant 6 Date de fonction]', 'dt' => 82),
    array('db' => '[Dirigeant 7 Nom]', 'dt' => 83),
    array('db' => '[Dirigeant 7 Prénom]', 'dt' => 84),
    array('db' => '[Dirigeant 7 date de naissance]', 'dt' => 85),
    array('db' => '[Dirigeant 7 Fonction]', 'dt' => 86),
    array('db' => '[Dirigeant 7 Date de fonction]', 'dt' => 87),
    array('db' => '[Dirigeant 8 Nom]', 'dt' => 88),
    array('db' => '[Dirigeant 8 Prénom]', 'dt' => 89),
    array('db' => '[Dirigeant 8 date de naissance]', 'dt' => 90),
    array('db' => '[Dirigeant 8 Fonction]', 'dt' => 91),
    array('db' => '[Dirigeant 8 Date de fonction]', 'dt' => 92),
    array('db' => '[Dirigeant 9 Nom]', 'dt' => 93),
    array('db' => '[Dirigeant 9 Prénom]', 'dt' => 94),
    array('db' => '[Dirigeant 9 date de naissance]', 'dt' => 95),
    array('db' => '[Dirigeant 9 Fonction]', 'dt' => 96),
    array('db' => '[Dirigeant 9 Date de fonction]', 'dt' => 97),
    array('db' => '[Dirigeant 10 Nom]', 'dt' => 98),
    array('db' => '[Dirigeant 10 Prénom]', 'dt' => 99),
    array('db' => '[Dirigeant 10 date de naissance]', 'dt' => 100),
    array('db' => '[Dirigeant 10 Fonction]', 'dt' => 101),
    array('db' => '[Dirigeant 10 Date de fonction]', 'dt' => 102),
    array('db' => '[Nom Fichier]', 'dt' => 103),
    array('db' => '[Date du Ficher]', 'dt' => 104),
    array('db' => '[Lien Vers le Fichier]', 'dt' => 105),
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


