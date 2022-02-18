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
$City = $item["City"];
$company = $item["company"];
$ID = $item["ID"];
$Salutation = $item["Salutation"];
$Salutation_Email = $item["Salutation_Email"];
$Last_Name = $item["Last_Name"];
$First_Name = $item["First_Name"];
$Sexe = $item["Sexe"];
$Title = $item["Title"];
$Preferred_Language = $item["Preferred_Language"];
$Email = $item["Email"];
$Phone = $item["Phone"];
$Mobile = $item["Mobile"];
$Addresse = $item["Address"];
$Country = $item["Country"];
$Region = $item["Region"];
$Source = $item["Source"];
$Segment_1= $item["Segment_1"];
$Segment_2 = $item["Segment_2"];
$Segment_3 = $item["Segment_3"];
$Segment_4 = $item["Segment_4"];
$Segment_5 = $item["Segment_5"];
$Segment_6 = $item["Segment_6"];
$Segment_7 = $item["Segment_7"];
$Brand_1 = $item["Brand_1"];
$Brand_2 = $item["Brand_2"];
$Brand_3 = $item["Brand_3"];
$Secteur = $item["Secteur"];
$Solvabilité = $item["Solvabilite"];


    $sql = "INSERT INTO [dbo].[Seg_Input] (
      [City]
      ,[company]
      ,[ID]
      ,[Salutation]
      ,[Salutation_Email]
      ,[Last_Name]
      ,[First_Name]
      ,[Sexe]
      ,[Title]
      ,[Preferred_Language]
      ,[Email]
      ,[Phone]
      ,[Mobile]
      ,[Address]
      ,[Country]
      ,[Region]
      ,[Source]
      ,[Segment_1]
      ,[Segment_2]
      ,[Segment_3]
      ,[Segment_4]
      ,[Segment_5]
      ,[Segment_6]
      ,[Segment_7]
      ,[Brand_1]
      ,[Brand_2]
      ,[Brand_3]
      ,[Secteur]
      ,[Solvabilite] )
                     
       VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; 

   $params = array($City,$company,$ID,$Salutation,$Salutation_Email,$Last_Name,$First_Name,$Sexe,$Title,$Preferred_Language,$Email,$Phone,$Mobile,$Addresse,$Country,$Region,$Source,$Segment_1,$Segment_2,$Segment_3,$Segment_4,$Segment_5,$Segment_6,$Segment_7,$Brand_1,$Brand_2,$Brand_3,$Secteur,$Solvabilité);    
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