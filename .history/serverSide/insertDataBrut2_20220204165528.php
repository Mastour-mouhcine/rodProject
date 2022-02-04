<?php
/* $dataArray = $_POST['data'];
foreach($dataArray as $item){
    print_r($item["Email"]);
} */
$serverName = "rods-data-server-01.database.windows.net"; // update me
$connectionOptions = array(
    "Database" => "Data-Rod-Input", // update me
    "Uid" => "admin-rods", // update me
    "PWD" => "roods-pwd@1", // update me
    "CharacterSet"=>"UTF-8"
   );
   //Establishes the connection
   $conn = sqlsrv_connect($serverName, $connectionOptions);
   // Check connection
   if( $conn === false){
      die( print_r( sqlsrv_errors(), true));
   }     
   $dataArray = $_POST['data'];
   foreach($dataArray as $item) {
      $no = $item["No"];
      $statut = $item["STATUT"];/* 
      $priorite_call = $item["Priorité call"];
      $avtif = $item["ACTIF"];
      $dossier_nom = $item["DOSSIER NOM"];
      $date_der_contact = $item["date dernier contact"];
      $ref = $item["REF"];
      $ref_old = $item["REF_old"];
      $titre_fr = $item["TITRE FR"];
      $titre_nl = $item["TITRE NL"];
      $comm_imm = $item["COMMUNE immoweb"];
      $comm = $item["COMMUNE"];
      $province = $item["PROVINCE"];
      $region = $item["REGION"];
      $pays = $item["PAYS"];
      $prix = $item["PRIX"];
      $reg_ord_dans_list2 = $item["Région ordre dans liste2"];
      $sec_ord_list2 = $item["Secteur ordre dans liste2"];
      $sf = $item["SECTEUR FR"];
      $sn = $item["SECTEUR NL"];
      $reg_lc = $item["REGLE LC"];
      $brok = $item["BROKERS CONSIGNE"];
      $stop = $item["stop"];
      $desc_fr = $item["DESCRIPTION FR"];
      $desc_nl = $item["DESCRIPTION NL"];
      $desc_en = $item["DESCRIPTION EN"];
      $detail_fr = $item["detail FR"];
      $detail_nl = $item["detail NL"];
      $blacklist = $item["BLACKLIST"];
      $nom_doss = $item["NOM DOSSIER"];
      $cmp = $item["COMPTE"];
      $vat = $item["VAT"];
      $client = $item["CLIENT"];
      $mail = $item["MAIL"];
      $mail2 = $item["MAIL2"];
      $gsm = $item["GSM"];
      $tel = $item["TEL"];
      $tel2 = $item["TEL2"];
      $duree_cntr = $item["DURÉE CONTRAT (MOIS)"];
      $debut_cntr = $item["DEBUT CONTRAT"];
      $fin_contr = $item["FIN CONTRAT"];
      $t_contr = $item["TYPE CONTRAT"];
      $commiss = $item["% COMISSION"];
      $lang = $item["LANGUAGE"];
      $gmaps = $item["Gmaps"];
      $whise = $item["WHISE"];
      $whise_ok = $item["WHISE OK"];
      $mot_cle = $item["mot clé"];
      $titre_z_s = $item["TITRE ZOHO SELECT"];
      $dans_z_s = $item["dans zoho select"];
      $cible_rend = $item["CIBLAGE RENDEMENT"];
      $cible_prom = $item["CIBLAGE PROMOTION"];
      $gros = $item["GROS"];
      $ciblage = $item["CIBLAGE"];
      $ciblage_pr = $item["ciblage prox"];
      $consign_rc = $item["04/10/2021 consignes RC"];
      $rc_etc = $item["10/11/2021 consignes RC ciblages etc"];
      $rc = $item["09/07/2021 consignes RC"];
      $rc2 = $item["Suite 09/07/2021 consignes RC2"];
      $rc3 = $item["Suite 09/07/2021 consignes RC3"];
      $remarque = $item["Remarques "];
      $date = $item["Date"];
      $gdc = $item["Gestionnaire de compte "];
      $cons_rc = $item["24/11/2021 consignes RC"];
      $pub_res_soc = $item["PUBLICATION RESEAUX SOCIAUX"];
      $bn = $item["BN"];
      $id_seg = $item["ID_Seg"]; */
      $sql = "INSERT INTO [Actifs_input] ([No],[STATUT])
           VALUES (?,?)"; 

   $params = array($no,$statut);    
   $result = sqlsrv_query($conn,$sql,$params);
   
   
}
if( $result === false ) {
   die( print_r( sqlsrv_errors(), true));
}
else{
   echo('New Records Created Successfully');
}
sqlsrv_close($conn);

?>