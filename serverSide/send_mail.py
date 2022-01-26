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
mycursor1.execute("SELECT Email ,[Preferred Language] ,[Salutation Emails],[Salutation] ,[First Name],[Contact Owner],[Business Finder Name]  from Import_Zoho_Contact_test")

liste1=[]
myresult1 = mycursor1.fetchall()
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
files=['RodMicroCapPortfolioFRNovembre21.pdf']
files2=['RodMicroCapPortfolioNLNovember21.pdf']
send_from = 'paul.freeman@rodschinson.com'
sender_pass = 'Lan03993'
#send_to = 'tony.kyrie@gmail.com '




server='smtp-mail.Outlook.com'
port=587


length =len(liste1)
for i in range(length):
    if liste1[i][1]=='French':
        subject='Suite à l\'échange téléphonique'
        html = str(liste1[i][2])+' '+str(liste1[i][3])+' '+str(liste1[i][4])+','+'''\n\n <html><body><p>Suite à vos récents échanges avec notre collègue '''+str(liste1[i][6])+''', je me permets de vous transmettre nos coordonnées personnelles.</p>

<p>Comme mentionné, Rodschinson Investment est une société à couverture internationale spécialisée en immobilier d’investissement et en fusions et acquisitions de sociétés.</p>

<p>A titre d’exemple, nous couvrons les secteurs de l’immobilier de rendement, développement, logistique ainsi que ceux liés aux hôtels ou maison de repos.</p>

<p>De plus amples informations sont disponibles sur notre site : www.rodschinson.com</p>

<p>Si vous désirez céder ou acquérir, nous pourrions certainement vous proposer des contreparties parmi nos investisseurs belges ou internationaux.</p>

<p>Pourrions-nous convenir d’un entretien téléphonique en cas d’acquisition ou éventuellement une rencontre si vous avez un projet de cession à court terme ?</p>

<p>Bien à vous,</p></body></html>\n'''+mess
        send_to = str(liste1[i][0])
        send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
    if liste1[i][1]=='Dutch':
        subject='Naar aanleiding van het telefoongesprek'
        html = str(liste1[i][2])+' '+str(liste1[i][3])+' '+str(liste1[i][4])+ '''\n\n <html><body><p>Zoals vermeld tijdens het recente telefoongesprek met mijn collega,  heeft ons bedrijf Rodschinson Investment (www.rodschinson.com) een internationale marktdekking en zijn we gespecialiseerd in vastgoedbeleggingen en bedrijfsfusies en -overnames.</p>

<p>We richten ons bijvoorbeeld op de sectoren opbrengsteigendommen, projectontwikkeling, logistiek, hotels en verpleeg-en rusthuizen.</p>

 

<p>Ik neem hierbij de vrijheid u in bijlage ons portfolio van onze Microcap-afdeling (assets onder 40M€) te sturen.</p>  

<p>Schroom u niet om aan te geven welke referenties uw interesse opwekken zodat wij u de dossiers kunnen toesturen.</p>

<p>Graag neem ik binnenkort contact met u op om uw eventuele interesses te vernemen.</p>


<p>Indien u trouwens zelf bepaalde activa te koop heeft die onze Belgische of internationale investeerders kunnen interesseren, willen wij met genoegen dit met u bespreken.</p>

 

<p>Met vriendelijke groeten,</p></body></html>\n'''+mess
        send_to =str(liste1[i][0])
        send_mail(send_from,send_to,subject,html,files2,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
    else:
        pass
                 
            
print("mail est envoyer avec succée")