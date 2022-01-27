import pyodbc
# Establish the connection
server = 'rods-data-server-01.database.windows.net'
database = 'Data-Rod-Input'
username = 'admin-rods'
password = 'roods-pwd@1'
driver= '{ODBC Driver 17 for SQL Server}'
mydb = pyodbc.connect('DRIVER=' + driver + ';SERVER=' +
    server + ';PORT=1433;DATABASE=' + database +
    ';UID=' + username + ';PWD=' + password)


mycursor1 =mydb.cursor()
mycursor1.execute("DROP TABLE IF EXISTS Import_Zoho_all_test")
mycursor1.execute("DROP TABLE IF EXISTS Import_Zoho_Contact_test")
mycursor1.execute("DROP TABLE IF EXISTS Import_Zoho_Compte_test")
#mycursor1.execute("TRUNCATE TABLE dbo.Import_Zoho_all")
mycursor1.execute("DROP TABLE IF EXISTS input1_test")
mycursor1.execute("DROP TABLE IF EXISTS input2_test")
mycursor1.execute("DROP TABLE IF EXISTS input3_test")
mycursor1.execute("SELECT * INTO input1_test FROM data_input_test LEFT JOIN code_postaux_test ON data_input_test.code_postal= code_postaux_test.[CODE POSTAL2];")
mydb.commit()
mycursor1.execute("UPDATE input1_test SET sexe=CASE WHEN sexe IS NULL THEN 'M' ELSE sexe END ")
mycursor1.execute("UPDATE input1_test SET sexe=CASE WHEN sexe='' THEN 'M' ELSE sexe END ")

mycursor1.execute("EXEC sp_rename 'dbo.input1_test.adresse', 'Billing Street', 'COLUMN';")
mycursor1.execute("EXEC sp_rename 'dbo.input1_test.code_postal', 'Billing Code', 'COLUMN';")
mycursor1.execute("EXEC sp_rename 'dbo.input1_test.PAYS', 'Pays', 'COLUMN';")
mycursor1.execute("EXEC sp_rename 'dbo.input1_test.COMMUNE', 'Billing City', 'COLUMN';")
mycursor1.execute("EXEC sp_rename 'dbo.input1_test.REGION', 'Région', 'COLUMN';")
#mycursor1.execute("EXEC sp_rename 'dbo.input1.REGION', 'Région', 'COLUMN';")


#mycursor1.execute("ALTER TABLE input1 change column code_postal  [Billing Code] VARCHAR(255)")
#mycursor1.execute("ALTER TABLE input1 change column PAYS  Pays VARCHAR(255)")
#mycursor1.execute("ALTER TABLE input1 change column COMMUNE  [Billing City] VARCHAR(255)")
#mycursor1.execute("ALTER TABLE input1 change column REGION  Région VARCHAR(255)")
mycursor1.execute("UPDATE input1_test  SET [Billing City]= REPLACE([Billing City], '-', ' - ')")
mycursor1.execute("UPDATE input1_test SET [Billing City]= REPLACE([Billing City], '_', ' _ ')")
mycursor1.execute("UPDATE input1_test SET [Billing City]= REPLACE([Billing City], '?', 'e')")
mycursor1.execute("UPDATE input1_test SET commentaire_appel= REPLACE(commentaire_appel, '-', ' ')")
mycursor1.execute("UPDATE input1_test SET commentaire_appel= REPLACE(commentaire_appel, '_', ' _ ')")
mycursor1.execute("UPDATE input1_test SET commentaire_appel= REPLACE(commentaire_appel, '_', ' _ ')")
mycursor1.execute("UPDATE input1_test SET commentaire_appel= REPLACE(commentaire_appel, '_', '  ')")
mycursor1.execute("UPDATE input1_test SET commentaire_appel= REPLACE(commentaire_appel, 'x000D', ' ')")
mycursor1.execute("UPDATE input1_test SET commentaire_appel= REPLACE(commentaire_appel, 'x000d', ' ')")
mycursor1.execute("UPDATE input1_test SET commentaire_appel= REPLACE(commentaire_appel, '?', 'e')")

mycursor1.execute("UPDATE input1_test SET [Billing Street]= REPLACE([Billing Street], '?', 'e')")
mycursor1.execute("UPDATE input1_test SET nace_description= REPLACE(nace_description, '-', ' ')")
mycursor1.execute("UPDATE input1_test SET nace_description= REPLACE(nace_description, '?', 'e')")
mycursor1.execute("ALTER TABLE input1_test ADD Salutation VARCHAR(255)")
mycursor1.execute("ALTER TABLE input1_test ADD [Salutation Emails]  VARCHAR(255)")
#mycursor1.execute("UPDATE `input1` SET sexe=IF(sexe="" or sexe IS NULL,'M',sexe)")
mycursor1.execute("SELECT * INTO input2_test  FROM input1_test LEFT JOIN languageagent_test ON input1_test.agent= languageagent_test.NomAgent")
mydb.commit()
#mycursor1.execute("UPDATE `input2` SET `Prefered Language`= Preferred Language'")
mycursor1.execute("EXEC sp_rename 'dbo.input2_test.[ Prefered Language]', 'Preferred Language', 'COLUMN';")
#mycursor1.execute("ALTER TABLE input2 change column [ Prefered Language]  [Preferred Language] VARCHAR(255)")
mycursor1.execute("UPDATE input2_test SET [Preferred Language]= REPLACE([Preferred Language], ' ', '')")
mycursor1.execute("UPDATE input2_test SET Salutation=IIF(sexe='M' AND [Preferred Language]='NL','heer',IIF(sexe='F' AND [Preferred Language]='NL','mevrouw',IIF(sexe='M' AND [Preferred Language]='FR','Monsieur',IIF(sexe='F' AND [Preferred Language]='FR','Madame',Salutation))))")
mycursor1.execute("UPDATE input2_test SET [Salutation Emails]=IIF(sexe='M' AND [Preferred Language]='NL','Geachte',IIF(sexe='F' AND [Preferred Language]='NL','Geachte',IIF(sexe='M' AND [Preferred Language]='FR','Cher',IIF(sexe='F' AND [Preferred Language]='FR','Chère',[Salutation Emails]))))")
mycursor1.execute("SELECT * INTO input3_test FROM input2_test WHERE statut='OPPORTUNITES' or statut='ACHETEUR' or statut='ACHETEUR / VENDEUR' OR statut='VENDEUR' OR statut='VENDEUR FUTUR' OR statut='RDV'")
mydb.commit()

mycursor1.execute("ALTER TABLE input3_test ADD Acheteur VARCHAR(255)")
mycursor1.execute("ALTER TABLE input3_test ADD Vendeur VARCHAR(255)")
mycursor1.execute("UPDATE input3_test SET Acheteur=IIF(statut='ACHETEUR' or statut='ACHETEUR / VENDEUR','True','False')")
mycursor1.execute("UPDATE input3_test SET Vendeur=IIF(statut='VENDEUR' or statut='VENDEUR FUTUR'  or statut='ACHETEUR / VENDEUR' ,'True','False')")
mycursor1.execute("ALTER TABLE input3_test ADD [Origine du Prospect] VARCHAR(255)")
mycursor1.execute("ALTER TABLE input3_test ADD [Other Street] VARCHAR(255)")
mycursor1.execute("ALTER TABLE input3_test ADD [Other Zip] VARCHAR(255)")
mycursor1.execute("ALTER TABLE input3_test ADD [Other City] VARCHAR(255)")
mycursor1.execute("ALTER TABLE input3_test ADD [Converting Agent] VARCHAR(255)")
mycursor1.execute("ALTER TABLE input3_test ADD [Phone (Account)] VARCHAR(255)")
mycursor1.execute("UPDATE input3_test SET [Origine du Prospect]='Prospection phone call'")
mycursor1.execute("UPDATE input3_test SET tel_direct=IIF(LEFT(tel_direct,2)='32' or LEFT(tel_direct,1)='+' or tel_direct IS NULL,tel_direct,CONCAT('32',tel_direct))")
mycursor1.execute("UPDATE input3_test SET telephone=IIF(LEFT(telephone,2)='32' or LEFT(telephone,1)='+' or  telephone IS NULL,telephone,CONCAT('32',telephone))")
#mycursor1.execute("UPDATE `input3` SET `gsm`=IF(LEFT(`gsm`,2)<>'32' or LEFT(`gsm`,1)<>'+' and `gsm` IS NOT NULL,CONCAT('32',`gsm`),`gsm`)")
mycursor1.execute("UPDATE input3_test SET gsm=IIF(LEFT(gsm,2)='32' or LEFT(gsm,1)='+' or gsm IS NULL,gsm,CONCAT('32',gsm))")


mycursor1.execute("UPDATE input3_test SET gsm=IIF(LEN(gsm)<4,NULL,gsm)")
mycursor1.execute("UPDATE input3_test SET tel_direct=IIF(LEN(tel_direct)<4,NULL,tel_direct)")
#mycursor1.execute("UPDATE `input3` SET `Phone (Account)`=Phone ")
mycursor1.execute("ALTER TABLE input3_test ADD Mobile VARCHAR(255)")
mycursor1.execute("ALTER TABLE input3_test ADD Phone VARCHAR(255)")
mycursor1.execute("UPDATE input3_test SET Mobile=IIF(gsm IS NOT NULL and LEFT(gsm,1)<>'+',CONCAT('+',gsm),gsm)")
mycursor1.execute("UPDATE input3_test SET Phone=IIF(LEFT(tel_direct,2)='32' And tel_direct IS NOT NULL,CONCAT('+',tel_direct) ,IIF(LEFT(telephone,2)='32',CONCAT('+',telephone),telephone))")
mycursor1.execute("UPDATE input3_test SET [Other Street]=[Billing Street]")
mycursor1.execute("UPDATE input3_test SET [Phone (Account)]=Phone ")
mycursor1.execute("UPDATE input3_test SET [Other Zip]=[Billing Code]")
mycursor1.execute("UPDATE input3_test SET [Other City]=[Billing City]")
mycursor1.execute("UPDATE input3_test SET [Converting agent]=IIF(Vendeur='True',agent,NULL)")
mycursor1.execute("ALTER TABLE input3_test ADD [Province (BE)] VARCHAR(255)")
mycursor1.execute("UPDATE input3_test SET [Province (BE)]=province")
mycursor1.execute("ALTER TABLE input3_test ADD [Vendor Assessment Notes] VARCHAR(655)")
mycursor1.execute("UPDATE input3_test SET [Vendor Assessment Notes]=IIF(Vendeur='True',commentaire_appel,NULL)")
mycursor1.execute("ALTER TABLE input3_test ADD [New Import] VARCHAR(655) ")
mycursor1.execute("UPDATE input3_test SET [New Import]='400'")
mycursor1.execute("UPDATE input3_test SET [Other Street]=IIF(statut='RDV' or statut='VENDEUR',[Billing Street],NULL)")
mycursor1.execute("UPDATE input3_test SET [Other Zip]=IIF(statut='RDV' or statut='VENDEUR',[Billing Code],NULL)")
mycursor1.execute("UPDATE input3_test SET [Other City]=IIF(statut='RDV' or statut='VENDEUR',[Billing City],NULL)")
mycursor1.execute("ALTER TABLE input3_test ADD [Source list name] VARCHAR(655)")
mycursor1.execute("UPDATE input3_test SET [Source list name]=CONCAT(liste_appel,' ',date_appel)")
mycursor1.execute("UPDATE input3_test SET [Preferred Language]=IIF([Preferred Language]='FR','French',IIF([Preferred Language]='NL','Dutch',[Preferred Language]))")
mycursor1.execute("ALTER TABLE input3_test ADD [Contact Owner] VARCHAR(655)")
mycursor1.execute("UPDATE input3_test SET [Contact Owner]=IIF((statut='ACHETEUR' AND [Preferred Language]='Dutch') OR (statut='OPPORTUNITES' AND [Preferred Language]='Dutch'),'michel.gysels@rodschinson.com',IIF((statut='VENDEUR' AND [Preferred Language]='Dutch') OR (statut='ACHETEUR / VENDEUR' AND [Preferred Language]='Dutch') OR (statut='VENDEUR FUTUR' AND [Preferred Language]='Dutch'),'wim.hoste@rodschinson.com',IIF((statut='ACHETEUR'  AND [Preferred Language]='French') OR (statut='OPPORTUNITES' AND [Preferred Language]='French'),'m.bariaz@rodschinson.com',IIF((statut='VENDEUR' AND [Preferred Language]='French') OR (statut='ACHETEUR / VENDEUR' AND [Preferred Language]='French') OR (statut='VENDEUR FUTUR' AND [Preferred Language]='French'),'m.bariaz@rodschinson.com',NULL))))")
mycursor1.execute("ALTER TABLE input3_test ADD [Business Finder Name] VARCHAR(655)")
mycursor1.execute("UPDATE input3_test SET [Business Finder Name]=Agent")
mycursor1.execute("ALTER TABLE input3_test ADD [Home Phone] VARCHAR(655)")
mycursor1.execute("UPDATE input3_test SET [Home Phone]=IIF(tel_direct<>telephone ,CONCAT('+',telephone),NULL)")
mycursor1.execute("ALTER TABLE input3_test ADD [Secondary Email] VARCHAR(655)")
mycursor1.execute("UPDATE input3_test SET [Secondary Email]=[mail_general]")
mycursor1.execute("ALTER TABLE input3_test ADD TelDerect text ")
mycursor1.execute("ALTER TABLE input3_test ADD Mandataire text")
mycursor1.execute("UPDATE input3_test SET TelDerect=IIF(telephone IS NOT NULL ,CONCAT('+',telephone),telephone)")
mycursor1.execute("ALTER TABLE input3_test ADD Description text")
mycursor1.execute("EXEC sp_rename 'dbo.input3_test.prenom', 'Account Name', 'COLUMN';")
mycursor1.execute("EXEC sp_rename 'dbo.input3_test.prenom2 ', 'First Name', 'COLUMN';")
mycursor1.execute("EXEC sp_rename 'dbo.input3_test.nom2', 'Last Name', 'COLUMN';")
mycursor1.execute("EXEC sp_rename 'dbo.input3_test.statut', 'Lead Status', 'COLUMN';")
mycursor1.execute("EXEC sp_rename 'dbo.input3_test.telephone', 'Telephone', 'COLUMN';")

#mycursor1.execute("ALTER TABLE input3 change column prenom  [Account Name] VARCHAR(255)")
#mycursor1.execute("ALTER TABLE input3 change column prenom2   [First Name] VARCHAR(255)")
#mycursor1.execute("ALTER TABLE input3 change column nom2   [Last Name] VARCHAR(255)")
#mycursor1.execute("ALTER TABLE input3 change column statut   [Lead Status] VARCHAR(255)")
#mycursor1.execute("ALTER TABLE input3 change column telephone  Telephone VARCHAR(255)")
mycursor1.execute("UPDATE input3_test SET [Account Name]= REPLACE([Account Name], '?', 'e')")
mycursor1.execute("EXEC sp_rename 'dbo.input3_test.numero_entreprise', 'Account Number', 'COLUMN';")
#mycursor1.execute("ALTER TABLE input3 change column numero_entreprise  [Account Number] VARCHAR(255)")
mycursor1.execute("EXEC sp_rename 'dbo.input3_test.agent', 'AGdata', 'COLUMN';")


#mycursor1.execute("ALTER TABLE input3 change column agent   AGdata VARCHAR(255)")
mycursor1.execute("UPDATE input3_test SET [Last Name]= REPLACE([Last Name], '?', 'e')")
mycursor1.execute("UPDATE input3_test SET [First Name]= REPLACE([First Name], '?', 'e')")
mycursor1.execute("UPDATE input3_test set Description=CONCAT_WS('\n',[Account Name],' ','(',[Billing Code],' ',[Billing City],')','\n',nace_description,'Tel: ',TelDerect,'\n','prospection tel, agent ',AGdata+':','\n',[Lead Status],'\n',[First Name],' ',[Last Name],' ',sexe,'\n','\n',commentaire_appel,'\n',date_appel)")


#mycursor1.execute("UPDATE input3 SET Description=CONCAT_WS('\n',CONCAT([Account Name],' ','(', [Billing Code],' ',[Billing City],')'), CONCAT(nace_description),CONCAT('Tel: ',TelDerect),CONCAT('agent ',AGdata,':'),CONCAT([Lead Status]),CONCAT([First Name],' ',[Last Name],' ',sexe),CONCAT(commentaire_appel),CONCAT('\n',date_appel))")

                           

#mycursor1.execute("UPDATE input3 set Description=CONCAT([Account Name],' ','(', [Billing Code],' ',[Billing City],')'), CONCAT(nace_description),CONCAT('Tel: ',TelDerect),CONCAT('\n','prospection tel, agent ',AGdata,':'),[Lead Status],CONCAT([First Name],' ',[Last Name],' ',sexe),commentaire_appel,CONCAT('\n',[Date d'appel])")
#UPDATE `vendeur` set Description=CONCAT_WS('\n', CONCAT( `Account Name`,' ','(', `Billing Code`,' ',`Billing City`,')'), CONCAT(nace_description),CONCAT('Tel: ',TelDerect),CONCAT('\n','prospection tel, agent ',AGdata,':'),CONCAT(`Lead Status`),CONCAT(`First Name`,' ',`Last Name`,' ',sexe),CONCAT('\n',commentaire_appel),CONCAT('\n',`Date d'appel`))

#mycursor1.execute("ALTER TABLE input3 change column mail_direct   Email VARCHAR(255)")
mycursor1.execute("EXEC sp_rename 'dbo.input3_test.mail_direct', 'Email', 'COLUMN';")
mycursor1.execute("ALTER TABLE input3_test ADD [Billing Province (BE)] text")
mycursor1.execute("UPDATE input3_test SET [Billing Province (BE)]=province")
mycursor1.execute("ALTER TABLE input3_test ADD  [Prospect Source] text ")
mycursor1.execute("UPDATE input3_test SET [Prospect Source]='Prospection phone call'")
mycursor1.execute("ALTER TABLE input3_test ADD  [Mail du commentaire] text")

mycursor1.execute("UPDATE input3_test SET [Mail du commentaire]=IIF(commentaire_appel LIKE '%@%',commentaire_appel,NULL)")

mycursor1.execute("SELECT  Salutation , [Salutation Emails],[First Name],[Last Name],[Preferred Language],Mobile,Phone,Email,[Other Street],[Other Zip],[Other City],[Province (BE)],[Account Name],[Account Number],[Billing Street],[Billing Code],[Billing City],[Billing Province (BE)], [Phone (Account)],[Lead status],Acheteur,Vendeur,[Prospect Source],[Converting Agent],[Source list name],[Vendor Assessment Notes],[New Import],[Contact Owner],[Business Finder Name],[Home Phone],[Secondary Email],Telephone,Mandataire,[Mail du commentaire],Description INTO Import_Zoho_all_test FROM input3_test GROUP BY Salutation , [Salutation Emails],[First Name],[Last Name],[Preferred Language],Mobile,Phone,Email,[Other Street],[Other Zip],[Other City],[Province (BE)],[Account Name],[Account Number],[Billing Street],[Billing Code],[Billing City],[Billing Province (BE)], [Phone (Account)],[Lead status],Acheteur,Vendeur,[Prospect Source],[Converting Agent],[Source list name],[Vendor Assessment Notes],[New Import],[Contact Owner],[Business Finder Name],[Home Phone],[Secondary Email],Telephone,Mandataire,[Mail du commentaire]")
mycursor1.execute("SELECT  Salutation , [Salutation Emails],[First Name],[Last Name],[Preferred Language],Mobile,Phone,Email,[Other Street],[Other Zip],[Other City],[Province (BE)],[Account Name],[Lead status],Acheteur,Vendeur,[Prospect Source],[Converting Agent],[Source list name],[Vendor Assessment Notes],[New Import],[Contact Owner],[Business Finder Name],[Home Phone],[Secondary Email],Telephone,Mandataire,[Mail du commentaire],Description INTO Import_Zoho_Contact_test FROM input3_test GROUP BY Salutation , [Salutation Emails],[First Name],[Last Name],[Preferred Language],Mobile,Phone,Email,[Other Street],[Other Zip],[Other City],[Province (BE)],[Account Name],[Lead status],Acheteur,Vendeur,[Prospect Source],[Converting Agent],[Source list name],[Vendor Assessment Notes],[New Import],[Contact Owner],[Business Finder Name],[Home Phone],[Secondary Email],Telephone,Mandataire,[Mail du commentaire]")
mycursor1.execute("SELECT [Province (BE)],[Account Name],[Account Number],[Billing Street],[Billing Code],[Billing City],[Billing Province (BE)],[Phone (Account)],[Contact Owner] INTO Import_Zoho_Compte_test FROM input3_test")
mycursor1.execute("TRUNCATE TABLE dbo.data_input_test")
mydb.commit()
#mydb1.commit()

print('script ok')