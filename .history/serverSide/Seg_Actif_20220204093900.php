<?php
 $serverName = "rods-data-server-01.database.windows.net"; // update me
 $connectionOptions = array("DataBase"=>"Data_Rods","UID"=>"admin-rods","PWD"=>"roods-pwd@1",
 'CharacterSet' => 'UTF-8');
 //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if( $conn === false){
        die( print_r( sqlsrv_errors(), true));
    }
    /* $result_seg = $_GET['var_segmentation'];
    $result_sect = $_GET['var_secteur'];     
    $result_brand = $_GET['var_brand'];     
    $string_seg ='';
    $string_sect ='';
    $string_brand ='';
    // Condition 1 si champ selectionné 
    if ($result_seg != 'undefined') {
        $string_seg = " WHERE [First Name] in(". $result_seg . ") ";
    }
    if ($result_sect != 'undefined') {
        $string_sect = " AND [Last Name] in(". $result_sect . ") ";
        if($result_seg == 'undefined') {
            $string_sect = " WHERE [Last Name] in(". $result_sect . ") ";
        }
    }
    if ($result_brand != 'undefined') {
        $string_brand = " AND [Email] in(". $result_brand . ") ";
        if($result_seg == 'undefined' && $result_sect == 'undefined' ) {
            $string_brand = " WHERE [Email] in(". $result_brand . ") ";
        }
    } */
    $tsql= "SELECT  [No],[STATUT],[Priorité call],[ACTIF],[DOSSIER NOM],[date dernier contact],[REF],[REF_old],
    [TITRE FR],[TITRE NL],[COMMUNE immoweb],[COMMUNE],[PROVINCE],[REGION],[PAYS],[PRIX],[Région ordre dans liste2],
    [Secteur ordre dans liste2],[SECTEUR FR],[SECTEUR NL],[REGLE LC],[BROKERS CONSIGNE],[DESCRIPTION FR],
    [DESCRIPTION NL],[DESCRIPTION EN],[detail FR],[detail NL],[BLACKLIST],[NOM DOSSIER],[COMPTE],[VAT],[CLIENT],
    [MAIL],[MAIL2],[GSM],[TEL],[TEL2],[DURÉE CONTRAT (MOIS)],[DEBUT CONTRAT],[FIN CONTRAT],[TYPE CONTRAT],
    [% COMISSION],[LANGUAGE],[Gmaps],[WHISE],[WHISE OK],[mot clé],[TITRE ZOHO SELECT],[dans zoho select],
    [CIBLAGE RENDEMENT],[CIBLAGE PROMOTION],[GROS],[CIBLAGE],[ciblage prox],[Remarques ],[Date],
    [Gestionnaire de compte ],[PUBLICATION RESEAUX SOCIAUX],[BN] 
    FROM [dbo].[Actifs_test] ";
    $getResults= sqlsrv_query($conn, $tsql);
    //echo ("Reading data from table");
    $rows = array();
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
        $rows[] = array_map('stripslashes', $row);
        //echo "id: " . $row["Salutation"]. " <br>";
    }
    echo json_encode($rows);
    //sqlsrv_free_stmt($getResults);
    sqlsrv_close( $conn); 
?>