import xlsxwriter
import mysql.connector
import smtplib,ssl
from email.mime.multipart import MIMEMultipart
from email.mime.base import MIMEBase
from email.mime.text import MIMEText
from email.utils import formatdate
from email.mime.image import MIMEImage
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from email import encoders
import html
import mimetypes
from email.headerregistry import Address
from email.message import EmailMessage
from email.utils import make_msgid
from pathlib import Path
import pyodbc
import pandas as pd
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

mess= """<html><div>
<span style="font-family: 'Cinzel', serif; font-size: 20px; line-height: 26px; color: #195387;"><strong>Paul FREEMAN</strong></span><br />\
<span style="font-family: 'Montserrat', Arial, sans-serif; font-size: 14px; line-height: 17px; font-weight: 400; color: #4d4d4d; padding: 10px 0 10px 0; margin-bottom: 20px;"><strong>Head Manager of Global Real Estate and M&A</strong></span>
		<hr />
		<table border="0" cellpadding="0" cellspacing="0" width="700px">
			<tbody>
				<tr>
					<td valign="top">
						<table border="0" cellpadding="0" cellspacing="0" width="700px">
							<tbody>
								<tr>
									<td bgcolor="#195387" style="-webkit-border-radius: 10px; -webkit-border-top-right-radius: 30px; -webkit-border-bottom-left-radius: px; -moz-border-radius: 30px; -moz-border-radius-topright: 30px; -moz-border-radius-bottomleft: 0px; border-radius: 5px; border-top-right-radius: 30px; border-bottom-left-radius: 0px;">
										<table border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td>
														<img alt="" src="https://rodschinson.com/wp-content/uploads/2021/12/RODSCHINSON_LOGO_Medium_Negatif_RVB_v2-4.png" style="align: left; position: relative; margin-left: 0px;" width="100px" /></td>
													<td style="padding: 10px 10px;">
														<table border="0" cellpadding="0" cellspacing="0" width="400px">
															<tbody>
																<tr>
																	<td valign="top">
																		<table border="0" cellpadding="0" cellspacing="0" width="100%">
																			<tbody>
																				<tr>
																					<td style="font-family: 'Montserrat', Arial, sans-serif; font-size: 11px; line-height: 14px; font-weight: 400; color: #fff;">
																						<b>Tel </b>: <a href="tel:+32 2 898 09 11" style="text-decoration: underline; color: #0092ff;"><span style="color: #fff; text-decoration: none;">+32 2 898 09 11</span></a><br />
																						<b>E-mail </b>: <a href="mailto:paul.freeman@rodschinson.com"><span style="color:#fff;"><u>paul.freeman@rodschinson.com</u></span></a></td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td style="padding-top: 5px;" valign="top">
																		<table border="0" cellpadding="0" cellspacing="0" width="100%">
																			<tbody>
																				<tr>
																					<td>
																						<table border="0" cellpadding="0" cellspacing="0">
																							<tbody>
																								<tr>
																									<td style="font-family: 'Montserrat', Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: 400; color: #fff;">
																										<span style="margin: 0 !important;color: #fff;"><strong>RODSCHINSON INVESTMENT</strong><br />
																										Bastion Tower</span><br />
																										<span style="color: #fff;">5 Place du Champ de Mars - 1050 Brussels, Belgium</span></td>
																								</tr>
																							</tbody>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td style="font-family: 'Montserrat', Arial, sans-serif; font-size: 9px; line-height: 14px; letter-spacing: 1.5px; font-weight: bold; color: #555555; text-align: center; padding-top: 5px;">
										<span style="color: #195387; text-decoration: none;">LONDON - BRUSSELS - DUBAI - HONG KONG - CASABLANCA</span>
										<hr />
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<br />
</body></html>"""
#mydb.commit()
mycursor1 =mydb.cursor()
mycursor1.execute("SELECT Email ,[Preferred Language] ,[Salutation Emails],[Salutation] ,[First Name],[Contact Owner],[Business Finder Name],[collegue]  from Import_Zoho_Contact_test WHERE [Lead Status]='ACHETEUR / VENDEUR'")

liste1=[]
myresult1 = mycursor1.fetchall()
for x in myresult1:
    liste1.append(x)
data=pd.DataFrame(liste1,columns=['Email'])

import warnings

warnings.filterwarnings("ignore")
import webbrowser

#f = open('helloworld.html','w')


#f = open('helloworld.html','w')


#f= open('helloworld.html','w')





#mess=webbrowser.open_new_tab('helloworld.html')
def send_mail(send_from,send_to,subject,html,files,server,port,username='',password='',isTls=True):
    msg = MIMEMultipart()
    msg['From'] = send_from
    msg['To'] = send_to
    msg['Date'] = formatdate(localtime = True)
    msg['Subject'] = subject
    #msg.attach(MIMEText(html, 'html'))
    msg.attach(MIMEText(html,'html'))
    #msg.attach(MIMEText(mess,"html"))
    for f in files:
        part = MIMEBase('application', "octet-stream")
        part.set_payload(open(f, "rb").read())
        encoders.encode_base64(part)
        part.add_header('Content-Disposition', 'attachment; filename='+f)
    msg.attach(part)
   
    #context = ssl.SSLContext(ssl.PROTOCOL_SSLv3)
    #SSL connection only working on Python 3+
    smtp = smtplib.SMTP(server, port)
    if isTls:
        smtp.starttls()
    smtp.login(username,password)
    smtp.sendmail(send_from, send_to, msg.as_string())
    smtp.quit
    


#df = pd.read_excel (r'C:\Users\CHANCHAF\Downloads\import_zoho_all.xlsx')
#data = pd.DataFrame(df)
#data=data.dropna(how='any',axis=0)

#files=['import_zoho_all.xlsx','import_zoho_compte.xlsx','import_zoho_contact.xlsx']
files=['RodMicroCapPortfolioFRFevrier22.pdf']
files2=['RodMicroCapPortfolioNLFebruari22.pdf']
send_from = 'paul.freeman@rodschinson.com'
sender_pass = 'Lan03993'
#send_to = 'tony.kyrie@gmail.com '


server='smtp-mail.Outlook.com'
port=587


length =len(liste1)
for i in range(length):
    if liste1[i][1]=='French':
        if liste3[i][7]is not None:
            subject='Suite à l\'échange téléphonique'
            html = str(liste1[i][2])+' '+str(liste1[i][3])+' '+str(liste1[i][4])+','+'''\n\n <html><body><p>Comme présenté lors de notre récent appel téléphonique avec '''+str(liste1[i][7])+''', notre société, Rodschinson Investment (www.rodschinson.com) a une couverture internationale et est spécialisée en </p>
<p>immobilier d’investissement et en fusions et acquisitions de sociétés.</p>

<p>Nous couvrons par exemple les secteurs de l’immobilier de rendement, de développement, la logistique ainsi que ceux liés aux hôtels ou maisons de repos.</p>

<p>Nous disposons aussi d’une division spécialisée dans l’immobilier de particuliers, Barings & Barclay (www.baringsbarclay.com), afin de vous accompagner dans vos projets privés de vente ou d’acquisition.</p>

<p>Dans le cadre de votre éventuel projet de cession discuté, nous souhaiterions vous rencontrer. Pourriez-vous nous proposer quelques dates ?</p>

<p>Par la même occasion, veuillez trouver ci-joint la liste des actifs immobiliers issus de notre département Microcap (valeurs inférieures à 40M€).</p>

<p>Je vous contacterai prochainement pour découvrir vos intérêts éventuels.</p>

<p>N'hésitez pas à nous indiquer les numéros de références des actifs qui pourraient vous intéresser afin de vous envoyer les dossiers.</p>

<p>Bien à vous,</p></body></html>\n'''+mess
            send_to = str(liste1[i][0])
            send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
        else:
            subject='Suite à l\'échange téléphonique'
            html = str(liste1[i][2])+' '+str(liste1[i][3])+' '+str(liste1[i][4])+','+'''\n\n <html><body><p>Comme présenté lors de notre récent appel téléphonique avec notre collègue, notre société, Rodschinson Investment (www.rodschinson.com) a une couverture internationale et est spécialisée en </p>
<p>immobilier d’investissement et en fusions et acquisitions de sociétés.</p>

<p>Nous couvrons par exemple les secteurs de l’immobilier de rendement, de développement, la logistique ainsi que ceux liés aux hôtels ou maisons de repos.</p>

<p>Nous disposons aussi d’une division spécialisée dans l’immobilier de particuliers, Barings & Barclay (www.baringsbarclay.com), afin de vous accompagner dans vos projets privés de vente ou d’acquisition.</p>

<p>Dans le cadre de votre éventuel projet de cession discuté, nous souhaiterions vous rencontrer. Pourriez-vous nous proposer quelques dates ?</p>

<p>Par la même occasion, veuillez trouver ci-joint la liste des actifs immobiliers issus de notre département Microcap (valeurs inférieures à 40M€).</p>

<p>Je vous contacterai prochainement pour découvrir vos intérêts éventuels.</p>

<p>N'hésitez pas à nous indiquer les numéros de références des actifs qui pourraient vous intéresser afin de vous envoyer les dossiers.</p>

<p>Bien à vous,</p></body></html>\n'''+mess
            send_to = str(liste1[i][0])
            send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
            
    if liste1[i][1]=='Dutch':
        subject='Naar aanleiding van het telefoongesprek'
        html = str(liste1[i][2])+' '+str(liste1[i][3])+' '+str(liste1[i][4])+ '''\n\n <html><body><p>Naar aanleiding van uw recente uitwisselingen met mijn collega wil ik graag onze persoonlijke contactgegevens meedelen.</p>

<p>Zoals eerder vermeld, is Rodschinson Investment een internationaal bedrijf dat gespecialiseerd is in beleggingsvastgoed en bedrijfsfusies en -overnames.</p>
 
<p>We zijn bijvoorbeeld actief in onder andere opbrengsteigendommen, ontwikkeling, logistiek, hotels en verpleeg- en rusthuizen.</p>  

<p>Wij nodigen u uit om onze website te bezoeken voor meer inlichtingen: www.rodschinson.com</p>

<p>Wij beschikken ook over een gespecialiseerde afdeling voor particulier vastgoed, Barings & Barclay (www.baringsbarclay.com), om u te begeleiden in uw persoonlijke aan-of verkoopprojecten.</p>

<p>In het kader van uw eventueel verkoopproject zoals besproken, wensen wij u te ontmoeten. Kunt u ons enkele data voorstellen?</p>

<p>Omdat u mogelijk interesse heeft in nieuwe investeringen, neem ik hierbij ook de vrijheid om u in bijlage een actuele lijst van onze Marketcap-afdeling te sturen, waarin onroerende activa met een waarde </p>
<p>tot €40 mln zijn opgenomen.</p>

<p>Schroom niet om aan te geven welke referenties uw interesse opwekken zodat wij u de dossiers kunnen toesturen.</p>

<p>Graag neem ik binnenkort contact met u op om uw eventuele interesses te vernemen.</p>

<p>Indien u trouwens zelf bepaalde activa te koop heeft die onze Belgische of internationale investeerders kunnen interesseren, willen wij met genoegen dit met u bespreken.</p>

<p>Hoogachtend,</p></body></html>\n'''+mess
        send_to =str(liste1[i][0])
        send_mail(send_from,send_to,subject,html,files2,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
    else:
        pass
                 
mycursor2 =mydb.cursor()
mycursor2.execute("SELECT Email ,[Preferred Language] ,[Salutation Emails],[Salutation] ,[First Name],[Contact Owner],[Business Finder Name],[collegue]  from Import_Zoho_Contact_test WHERE [Lead Status]='OPPORTUNITES'")

liste2=[]
myresult2 = mycursor2.fetchall()
for x in myresult2:
    liste2.append(x)
data=pd.DataFrame(liste2,columns=['Email'])

import warnings

warnings.filterwarnings("ignore")
import webbrowser

length =len(liste2)
for i in range(length):
    if liste2[i][1]=='French':
        if liste3[i][7]is not None:
            subject='Suite à l\'échange téléphonique'
            html = str(liste2[i][2])+' '+str(liste2[i][3])+' '+str(liste2[i][4])+','+'''\n\n <html><body><p>Suite à vos récents échanges avec '''+str(liste2[i][7])+''', je me permets de vous transmettre nos coordonnées personnelles.</p>

<p>Comme mentionné, Rodschinson Investment est une société à couverture internationale spécialisée en immobilier d’investissement et en fusions et acquisitions de sociétés.</p>

<p>A titre d’exemple, nous couvrons les secteurs de l’immobilier de rendement, développement, logistique ainsi que ceux liés aux hôtels ou maison de repos.</p>

<p>De plus amples informations sont disponibles sur notre site : www.rodschinson.com</p>

<p>Si vous désirez céder ou acquérir, nous pourrions certainement vous proposer des contreparties parmi nos investisseurs belges ou internationaux.</p>

<p>Pourrions-nous convenir d’un entretien téléphonique en cas d’acquisition ou éventuellement une rencontre si vous avez un projet de cession à court terme ?</p>

<p>Bien à vous,</p></body></html>\n'''+mess
            send_to = str(liste2[i][0])
            send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
        else:
            subject='Suite à l\'échange téléphonique'
            html = str(liste2[i][2])+' '+str(liste2[i][3])+' '+str(liste2[i][4])+','+'''\n\n <html><body><p>Suite à vos récents échanges avec notre collègue, je me permets de vous transmettre nos coordonnées personnelles.</p>

<p>Comme mentionné, Rodschinson Investment est une société à couverture internationale spécialisée en immobilier d’investissement et en fusions et acquisitions de sociétés.</p>

<p>A titre d’exemple, nous couvrons les secteurs de l’immobilier de rendement, développement, logistique ainsi que ceux liés aux hôtels ou maison de repos.</p>

<p>De plus amples informations sont disponibles sur notre site : www.rodschinson.com</p>

<p>Si vous désirez céder ou acquérir, nous pourrions certainement vous proposer des contreparties parmi nos investisseurs belges ou internationaux.</p>

<p>Pourrions-nous convenir d’un entretien téléphonique en cas d’acquisition ou éventuellement une rencontre si vous avez un projet de cession à court terme ?</p>

<p>Bien à vous,</p></body></html>\n'''+mess
            send_to = str(liste2[i][0])
            send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
            
    if liste2[i][1]=='Dutch':
        subject='Naar aanleiding van het telefoongesprek'
        html = str(liste2[i][2])+' '+str(liste2[i][3])+' '+str(liste2[i][4])+ '''\n\n <html><body><p>Naar aanleiding van uw recente uitwisselingen met mijn collega wil ik graag onze persoonlijke contactgegevens meedelen.</p>

<p>Zoals eerder vermeld, is Rodschinson Investment een internationaal bedrijf dat gespecialiseerd is in beleggingsvastgoed en bedrijfsfusies en -overnames.</p>
 
<p>We zijn bijvoorbeeld actief in onder andere opbrengsteigendommen, ontwikkeling, logistiek, hotels en verpleeg- en rusthuizen.</p>  

<p>Wij nodigen u uit om onze website te bezoeken voor meer inlichtingen: www.rodschinson.com</p>

<p>Indien u trouwens zelf bepaalde activa te koop heeft die onze Belgische of internationale investeerders kunnen interesseren, willen wij met genoegen dit met u bespreken.</p>

<p>Kunnen we een telefonisch onderhoud plannen in geval van aankoop of een eventueel afspraak organiseren indien u een vastgoedproject ter verkoop heeft op korte termijn?</p>

<p>Hoogachtend,</p></body></html>\n'''+mess
        send_to =str(liste2[i][0])
        send_mail(send_from,send_to,subject,html,files2,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
    else:
        pass



    
mycursor3 =mydb.cursor()
mycursor3.execute("SELECT Email ,[Preferred Language] ,[Salutation Emails],[Salutation] ,[First Name],[Contact Owner],[Business Finder Name],[collegue]  from Import_Zoho_Contact_test WHERE [Lead Status]='ACHETEUR'")

liste3=[]
myresult3 = mycursor3.fetchall()
for x in myresult3:
    liste3.append(x)
data=pd.DataFrame(liste3,columns=['Email'])

import warnings

warnings.filterwarnings("ignore")
import webbrowser

length =len(liste3)
for i in range(length):
    if liste3[i][1]=='French':
        if liste3[i][7]is not None:
            subject='Immeubles à rénover ou de rendement, terrains, maisons de repos et résidences étudiants à céder'
            html = str(liste3[i][2])+' '+str(liste3[i][3])+' '+str(liste3[i][4])+','+'''\n\n <html><body><p>Comme présenté lors de votre récent appel téléphonique avec '''+str(liste3[i][7])+''', notre société, Rodschinson Investment (www.rodschinson.com) a une couverture internationale et est spécialisée en </p>
<p>immobilier d’investissement et en fusions et acquisitions de sociétés.</p>

<p>Nous couvrons par exemple les secteurs de l’immobilier de rendement, de développement, la logistique ainsi que ceux liés aux hôtels ou maisons de repos.</p>

<p>Vous trouverez ci-joint la liste des actifs immobiliers issus de notre département Microcap (valeurs inférieures à 40M€).</p>

<p>N'hésitez pas à nous indiquer les numéros de références des actifs qui pourraient vous intéresser afin de vous envoyer les dossiers.</p>

<p>Par ailleurs, si vous avez des actifs à céder destinés à nos clients belges ou internationaux, nous serions ravis d'en discuter.</p>

<p>Bien à vous,</p></body></html>\n'''+mess
            send_to = str(liste3[i][0])
            send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
        else:
            subject='Immeubles à rénover ou de rendement, terrains, maisons de repos et résidences étudiants à céder'
            html = str(liste3[i][2])+' '+str(liste3[i][3])+' '+str(liste3[i][4])+','+'''\n\n <html><body><p>Comme présentée lors de votre récent appel téléphonique avec notre collègue, notre société, Rodschinson Investment (www.rodschinson.com) a une couverture internationale et est spécialisée en </p>
<p>immobilier d’investissement et en fusions et acquisitions de sociétés.</p>

<p>Nous couvrons par exemple les secteurs de l’immobilier de rendement, de développement, la logistique ainsi que ceux liés aux hôtels ou maisons de repos.</p>

<p>Vous trouverez ci-joint la liste des actifs immobiliers issus de notre département Microcap (valeurs inférieures à 40M€).</p>

<p>N'hésitez pas à nous indiquer les numéros de références des actifs qui pourraient vous intéresser afin de vous envoyer les dossiers.</p>

<p>Par ailleurs, si vous avez des actifs à céder destinés à nos clients belges ou internationaux, nous serions ravis d'en discuter.</p>

<p>Bien à vous,</p></body></html>\n'''+mess
            send_to = str(liste3[i][0])
            send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
            
    if liste3[i][1]=='Dutch':
        subject='Panden te renovatie, opbrengsteigendommen, bouwgronden, rusthuizen en studentenresidenties te koop'
        html = str(liste3[i][2])+' '+str(liste3[i][3])+' '+str(liste3[i][4])+ '''\n\n <html><body><p>Zoals vermeld tijdens het recente telefoongesprek met mijn collega, heeft ons bedrijf Rodschinson Investment (www.rodschinson.com) een internationale marktdekking en zijn we gespecialiseerd in</p>
<p>vastgoedbeleggingen en bedrijfsfusies en -overnames.</p>
 
<p>We richten ons bijvoorbeeld op de sectoren opbrengsteigendommen, projectontwikkeling, logistiek, hotels en verpleeg-en rusthuizen.</p>  

<p>Ik neem hierbij de vrijheid u in bijlage ons portfolio van onze Microcap-afdeling (assets onder 40M€) te sturen.  </p>

<p>Schroom u niet om aan te geven welke referenties uw interesse opwekken zodat wij u de dossiers kunnen toesturen. </p>

<p>Graag neem ik binnenkort contact met u op om uw eventuele interesses te vernemen.</p>

<p>Indien u trouwens zelf bepaalde activa te koop heeft die onze Belgische of internationale investeerders kunnen interesseren, willen wij met genoegen dit met u bespreken.</p>

<p>Hoogachtend,</p></body></html>\n'''+mess
        send_to =str(liste3[i][0])
        send_mail(send_from,send_to,subject,html,files2,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
    else:
        pass



    
mycursor4 =mydb.cursor()
mycursor4.execute("SELECT Email ,[Preferred Language] ,[Salutation Emails],[Salutation] ,[First Name],[Contact Owner],[Business Finder Name],[collegue]  from Import_Zoho_Contact_test WHERE [Lead Status]='ACHETEUR FUTUR'")

liste4=[]
myresult4 = mycursor4.fetchall()
for x in myresult4:
    liste4.append(x)
data=pd.DataFrame(liste4,columns=['Email'])

import warnings

warnings.filterwarnings("ignore")
import webbrowser

length =len(liste4)
for i in range(length):
    if liste4[i][1]=='French':
        if liste4[i][7]is not None:
            subject='Suite à l\'échange téléphonique'
            html = str(liste4[i][2])+' '+str(liste4[i][3])+' '+str(liste4[i][4])+','+'''\n\n <html><body><p>Comme présenté lors de votre récent appel téléphonique avec '''+str(liste4[i][7])+''', notre société, Rodschinson Investment (www.rodschinson.com) a une couverture internationale et est spécialisée en  </p>
<p>immobilier d’investissement et en fusions et acquisitions de sociétés.</p>

<p>Nous couvrons par exemple les secteurs de l’immobilier de rendement, de développement, la logistique ainsi que ceux liés aux hôtels ou maisons de repos.</p>

<p>Dans le cadre de votre éventuel projet de cession futur discuté, pourriez-vous nous envoyer sans aucun engagement quelques informations complémentaires, afin d'étudier le dossier ?</p>

<p>Nous serions également ravis de vous rencontrer si vous désirez.</p>

<p>Bien à vous,</p></body></html>\n'''+mess
            send_to = str(liste4[i][0])
            send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
        else:
            subject='Suite à l\'échange téléphonique'
            html = str(liste4[i][2])+' '+str(liste4[i][3])+' '+str(liste4[i][4])+','+'''\n\n <html><body><p>Comme présentée lors de votre récent appel téléphonique avec notre collègue , notre société, Rodschinson Investment (www.rodschinson.com) a une couverture internationale et est spécialisée en  </p>
<p>immobilier d’investissement et en fusions et acquisitions de sociétés.</p>

<p>Nous couvrons par exemple les secteurs de l’immobilier de rendement, de développement, la logistique ainsi que ceux liés aux hôtels ou maisons de repos.</p>

<p>Dans le cadre de votre éventuel projet de cession futur discuté, pourriez-vous nous envoyer sans aucun engagement quelques informations complémentaires, afin d'étudier le dossier ?</p>

<p>Nous serions également ravis de vous rencontrer si vous désirez.</p>

<p>Bien à vous,</p></body></html>\n'''+mess
            send_to = str(liste4[i][0])
            send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
            
            
    if liste4[i][1]=='Dutch':
        subject='Naar aanleiding van het telefoongesprek'
        html = str(liste4[i][2])+' '+str(liste4[i][3])+' '+str(liste4[i][4])+ '''\n\n <html><body><p>Zoals vermeld tijdens het recente telefoongesprek met mijn collega, heeft ons bedrijf Rodschinson Investment (www.rodschinson.com), een internationale reikwijdte en zijn wij gespecialiseerd in </p>
<p>vastgoedbeleggingen en fusies en overnames van bedrijven.</p>
 
<p>Wij behandelen bijvoorbeeld de sectoren van opbrengsteigendommen, projectontwikkeling, logistiek, hotels en rusthuizen.</p>  

<p>Kunt u ons, in het kader van uw mogelijk toekomstig besproken verkoopproject, vrijblijvend aanvullende informatie toezenden, zodat wij het dossier kunnen bestuderen?</p>

<p>Wij zouden u ook met veel plezier ontmoeten als u dat wenst.</p>

<p>Hoogachtend,</p></body></html>\n'''+mess
        send_to =str(liste4[i][0])
        send_mail(send_from,send_to,subject,html,files2,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
    else:
        pass
    
    
print("mail est envoyer avec succée")