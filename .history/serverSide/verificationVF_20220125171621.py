import xlsxwriter
import mysql.connector
from selenium.webdriver.chrome.options import Options 
from selenium import webdriver
import time
from bs4 import BeautifulSoup
import numpy as np
import pandas as pd
import xlrd
from selenium import webdriver
import requests, time
import re
import os
from webdriver_manager.chrome import ChromeDriverManager
from selenium import webdriver
import os
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

mycursor1.execute("SELECT mail_direct from data_input_test WHERE mail_status!='Valid' or mail_status is null")
liste1=[]
myresult1 = mycursor1.fetchall()

#mydb.commit()
for x in myresult1:
    liste1.append(x)
data=pd.DataFrame(liste1,columns=['mail_direct'])

import warnings

warnings.filterwarnings("ignore")


options = Options()
options.add_argument('--headless') # Runs Chrome in headless mode.
options.add_argument('--no-sandbox') # Bypass OS security model
options.add_argument('--disable-gpu')  # applicable to windows os only
options.add_argument('start-maximized') #
options.add_argument('disable-infobars')
options.add_argument('--enable-extensions')
#driver = webdriver.Chrome(executable_path="/usr/lib/chromium-browser/chromedriver",chrome_options=options)
#driver = webdriver.Chrome(executable_path=r"C:\Users\CHANCHAF\.wdm\drivers\chromedriver\win32\96.0.4664.45\chromedriver.exe",chrome_options=options)
driver = webdriver.Chrome(executable_path="/usr/bin/chromedriver",chrome_options=options)
#driver = webdriver.Chrome(chrome_options=options, executable_path=ChromeDriverManager().install())
data.replace('', np.nan, inplace=True)
data=data.dropna(how='any',axis=0)
liste1=[]

username="tom.kalsan@rodschinson.com"
password="YuR9YrKB"
url="https://www.zerobounce.net/members/login/"
driver.get(url)
driver.find_element_by_name("fe_UserName").send_keys(username)
driver.find_element_by_name("fe_Password").send_keys(password)
driver.find_element_by_css_selector("input[type=\"submit\" i]").click()
for row in data['mail_direct']:
    try:
        driver.get("https://www.zerobounce.net/members/singleemailvalidator/")
        driver.find_element_by_name("ctl00$MainContent$fe_email_address").send_keys(row)
        driver.find_element_by_name("ctl00$MainContent$btnValidate").click()
        a=driver.find_element_by_class_name("item-status").text
        b=driver.find_element_by_id("MainContent_apiResults1").text
        liste1.append([row,b])
        time.sleep(3)
    except:
        pass

df=pd.DataFrame(liste1,columns=['Email','Status'])

data=data.dropna(how='any',axis=0)
import os
#os.remove("data_input.xlsx")
#os.remove("Verification.xlsx")
#writer = pd.ExcelWriter("/var/www/html/rodProject/serverSide/Verification.xlsx")
#writer = pd.ExcelWriter("Verification.xlsx")
#df.to_excel(writer, 'data')
#writer.save()
#dat= pd.read_excel('/var/www/html/rodProject/serverSide/Verification.xlsx', sheet_name='data')
# execute("""IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='Mail_s' AND xtype='U')
#         CREATE TABLE Mail_s (
#         Email varchar(50) NOT NULL,
#         Status nvarchar(50) NOT NULL
#         )""")
mycursor1.execute("""TRUNCATE TABLE Mail_s """)

mycursor1.execute("""IF NOT EXISTS (SELECT * FROM sysobjects WHERE name='Mail_s' AND xtype='U')
          CREATE TABLE Mail_s (
          Email varchar(255) NOT NULL,
          Status nvarchar(255) NOT NULL
          )""")
#mycursor1.execute('''
#        CREATE TABLE Mail_s (
#            Email varchar(255) NOT NULL,
#            Status nvarchar(255) NOT NULL
#            )
#               ''')

for row in liste1:
    s=str(row[0]).replace(",", "")
    y=s.replace(")", "")
    d=y.replace("(", "")
    c=d.replace(" ", "")
    k=c.replace("'", "")
    mycursor1.execute('''
                INSERT INTO Mail_s (Email, Status)
                VALUES (?,?)
                ''',
                k,
                str(row[1])     
                )
mycursor1.execute('''UPDATE t2 SET t2.mail_status = t1.Status FROM dbo.data_input_test t2 JOIN dbo.Mail_s t1 ON t2.mail_direct = t1.Email; ''')
mydb.commit()


print('verification est bonne')