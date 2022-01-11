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
import os
#os.remove("data_input.xlsx")
#os.remove("Verification.xlsx")
#writer = pd.ExcelWriter("/var/www/html/nosnihcsdosCorp/serverSide/Verification.xlsx")
writer = pd.ExcelWriter("/var/www/html/rodProject/serverSide/Verification.xlsx")
df.to_excel(writer, 'data')
writer.save()
dat= pd.read_excel(r'/var/www/html/rodProject/serverSide/Verification.xlsx', sheet_name='data')
mycursor1.execute('''
        CREATE TABLE Mail_s (
            Email varchar(50) NOT NULL,
            Status nvarchar(50) NOT NULL
            )
               ''')
for row in dat.itertuples():
    mycursor1.execute('''
                INSERT INTO Mail_s (Email, Status)
                VALUES (?,?)
                ''',
                row.Email,
                row.Status
                )
mycursor1.execute('''UPDATE t2 SET t2.mail_status = t1.Status FROM dbo.data_input_test t2 JOIN dbo.Mail_s t1 ON t2.mail_direct = t1.Email; ''')
mydb.commit()


print('verification est bonne')