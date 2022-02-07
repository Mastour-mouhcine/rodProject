<?php
/* $dataArray = $_POST['data'];
foreach($dataArray as $item){
    print_r($item["Email"]);
} */
$serverName = "rods-data-server-01.database.windows.net"; // update me
$connectionOptions = array(
   "Database" => "Data_Rods", // update me
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
      $statut = $item["STATUT"];
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
      $bn = "";
      $id_seg = $item["ID_Seg"];
      $sql = "INSERT INTO Actifs_input ([No],[STATUT],[Priorité call]
      ,[ACTIF],[DOSSIER NOM],[date dernier contact],[REF],[REF_old],[TITRE FR],[TITRE NL],[COMMUNE immoweb],[COMMUNE],[PROVINCE],[REGION],[PAYS],[PRIX]
      ,[Région ordre dans liste2],[Secteur ordre dans liste2],[SECTEUR FR],[SECTEUR NL],[REGLE LC],[BROKERS CONSIGNE],[stop],[DESCRIPTION FR],[DESCRIPTION NL],[DESCRIPTION EN],[detail FR],[detail NL],[BLACKLIST],[NOM DOSSIER],[COMPTE]
      ,[VAT],[CLIENT],[MAIL],[MAIL2],[GSM],[TEL],[TEL2],[DURÉE CONTRAT (MOIS)],[DEBUT CONTRAT],[FIN CONTRAT],[TYPE CONTRAT],[% COMISSION]
      ,[LANGUAGE],[Gmaps],[WHISE],[WHISE OK],[mot clé],[TITRE ZOHO SELECT],[dans zoho select],[CIBLAGE RENDEMENT],[CIBLAGE PROMOTION],[GROS]
      ,[CIBLAGE],[ciblage prox],[04/10/2021 consignes RC],[10/11/2021 consignes RC ciblages etc],[09/07/2021 consignes RC],[Suite 09/07/2021 consignes RC2],[Suite 09/07/2021 consignes RC3],[Remarques ],[Date],[Gestionnaire de compte ],[24/11/2021 consignes RC],[PUBLICATION RESEAUX SOCIAUX],[BN],[ID_Seg]
                     )
           VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; 

   $params = array($no,$statut,$priorite_call,$avtif,$dossier_nom,$date_der_contact,$ref,$ref_old,$titre_fr,$titre_nl,$comm_imm,$comm,$province,$region,$pays,$prix,$reg_ord_dans_list2,$sec_ord_list2,$sf,$sn,$reg_lc,$brok,$stop,$desc_fr,$desc_nl,$desc_en,$detail_fr,$detail_nl,$blacklist,$nom_doss,$cmp,$vat,$client,$mail,$mail2,$gsm,$tel,$tel2,$duree_cntr,$debut_cntr,$fin_contr,$t_contr,$commiss,$lang,$gmaps,$whise,$whise_ok,$mot_cle,$titre_z_s,$dans_z_s,$cible_rend,$cible_prom,$gros,$ciblage,$ciblage_pr,$consign_rc,$rc_etc,$rc,$rc2,$rc3,$remarque,$date,$gdc,$cons_rc,$pub_res_soc,$bn,$id_seg);    
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