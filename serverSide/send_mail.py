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
#!/usr/bin/env python3
import html
import mimetypes
from email.headerregistry import Address
from email.message import EmailMessage
from email.utils import make_msgid
from pathlib import Path
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



def send_mail(send_from,send_to,subject,html,files,server,port,username='',password='',isTls=True):
    msg = MIMEMultipart()
    msg['From'] = send_from
    msg['To'] = send_to
    msg['Date'] = formatdate(localtime = True)
    msg['Subject'] = subject
    #msg.attach(MIMEText(html, 'html'))
    msg.attach(MIMEText(html))
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
    
import pandas as pd

df = pd.read_excel (r'C:\Users\Admiral\Documents\import_zoho_contact.xlsx')
data = pd.DataFrame(df)
#data=data.dropna(how='any',axis=0)

#files=['import_zoho_all.xlsx','import_zoho_compte.xlsx','import_zoho_contact.xlsx']
files=['RodMicroCapPortfolioFRNovembre21.pdf']
send_from = 'paul.freeman@rodschinson.com'
sender_pass = 'Lan03993'
#send_to = 'tony.kyrie@gmail.com '




server='smtp-mail.Outlook.com'
port=587

li =data['Email']
length = len(li)
for i in range(length):
    if data['Preferred Language'][i]=='French':
        subject='Suite à l\'échange téléphonique'
        html = data['Salutation Emails'][i]+' '+data['Salutation'][i]+' '+data['First Name'][i]+ '\n'+'''Suite à nos récents échanges avec votre collègue '''+data['Business Finder Name'][i]+'''  Suite à vos récents échanges avec ma '''+data['Contact Owner'][i]+''', je me permets de vous transmettre nos coordonnées personnelles.

Comme mentionné, Rodschinson Investment est une société à couverture internationale spécialisée en immobilier d’investissement et en fusions et acquisitions de sociétés.

A titre d’exemple, nous couvrons les secteurs de l’immobilier de rendement, développement, logistique ainsi que ceux liés aux hôtels ou maison de repos.

De plus amples informations sont disponibles sur notre site : www.rodschinson.com

Si vous désirez céder ou acquérir, nous pourrions certainement vous proposer des contreparties parmi nos investisseurs belges ou internationaux.

Pourrions-nous convenir d’un entretien téléphonique en cas d’acquisition ou éventuellement une rencontre si vous avez un projet de cession à court terme ?

Bien à vous,\n\n'''+''''\nPaul FREEMAN\n'''+'''
Head Manager of Global Real Estate and M&A'''
        send_to = li[i]
        send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
    else:
        subject='Naar aanleiding van het telefoongesprek'
        html = data['Salutation Emails'][i]+' '+data['Salutation'][i]+' '+data['First Name'][i]+ '\n'+'''
Zoals vermeld tijdens het recente telefoongesprek met mijn collega, '''+data['Business Finder Name'][i]+''' heeft ons bedrijf Rodschinson Investment (www.rodschinson.com) een internationale marktdekking en zijn we gespecialiseerd in vastgoedbeleggingen en bedrijfsfusies en -overnames.

We richten ons bijvoorbeeld op de sectoren opbrengsteigendommen, projectontwikkeling, logistiek, hotels en verpleeg-en rusthuizen.

 

Ik neem hierbij de vrijheid u in bijlage ons portfolio van onze Microcap-afdeling (assets onder 40M€) te sturen.  

Schroom u niet om aan te geven welke referenties uw interesse opwekken zodat wij u de dossiers kunnen toesturen.

Graag neem ik binnenkort contact met u op om uw eventuele interesses te vernemen.


Indien u trouwens zelf bepaalde activa te koop heeft die onze Belgische of internationale investeerders kunnen interesseren, willen wij met genoegen dit met u bespreken.

 

Met vriendelijke groeten,\n\n'''+''''\nPaul FREEMAN\n'''+'''
Head Manager of Global Real Estate and M&A'''
    
        send_to = li[i]
        send_mail(send_from,send_to,subject,html,files,server,port,username='paul.freeman@rodschinson.com',password='Lan03993',isTls=True)
                 
            
print("mail est envoyer avec succée")