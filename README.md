# Robot_control🛠 مشروع التحكم في حركة قاعدة الروبوت
📌 وصف المشروع

يتيح هذا المشروع التحكم في حركة قاعدة الروبوت عبر واجهة ويب، حيث يمكن للمستخدم تحديد الاتجاهات (أمام، خلف، يسار، يمين، توقف). يتم تخزين بيانات الاتجاه في قاعدة بيانات MySQL، ويمكن استرجاع آخر اتجاه محفوظ من خلال صفحة PHP.


⚙️ مكونات المشروع :

(HTML + CSS + JavaScript)واجهة ويب
       
        
        صفحة تحتوي على أزرار للتحكم في الاتجاهات.
       JavaScript استخدام  
       
       AJAX لإرسال البيانات إلى الخادم عبر .
        

قاعدة بيانات (MySQL)

    تحتوي على جدول directions 
    لتخزين الاتجاهات مع الوقت.
    
   
    صفحات PHP
        controller_php → لحفظ الاتجاهات في قاعدة البيانات.
        last_direction.php → لاسترجاع آخر اتجاه محفوظ وعرضه.

🛠 كيفية تشغيل المشروع


1️⃣ إعداد الخادم المحلي

    قم بتثبيتها XAMPP  .
  (إذا كنت تستخدم XAMPP). ضع ملفات المشروع في مجلد   htdocs

2️⃣ إنشاء قاعدة البيانات

    افتح phpMyAdmin 
    وقم بتنفيذ الأمر التالي لإنشاء قاعدة البيانات والجداول:

CREATE DATABASE robot_control;
USE robot_control;

CREATE TABLE directions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    direction VARCHAR(10) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

3️⃣ تشغيل المشروع

افتح index.html في المتصفح للتحكم في الروبوت.
    عند الضغط على أي زر، سيتم إرسال الاتجاه إلى الخادم وتخزينه في قاعدة البيانات.
   last_direction.php لرؤية آخر اتجاه محفوظ.

📌 ملاحظات

    تأكد من تشغيلها Apache و MySQL ( XAMPPفي)
تأكد من أن بيانات الاتصال بقاعدة البيانات ,, في ملفات PHP صحيحة.


📷 صورة توضيحية

        صفحة تحتوي على أزرار للتحكم في الاتجاهات.

https://github.com/rahafadl/Robot_control/blob/a9bc6ee19600128df56f51c1bebb47b2ec4d69f1/%D8%AD%D8%B1%D9%83%D8%A9%20%D8%A7%D9%84%D8%B1%D9%88%D8%A8%D9%88%D8%AA..JPG


   last_direction.php لرؤية آخر اتجاه محفوظ.

https://github.com/rahafadl/Robot_control/blob/5e8d63c43e08aee831f53072bbf34d8f2996f62b/%D8%AD%D8%B1%D9%83%D8%A9%20%D8%A7%D9%84%D8%B1%D9%88%D8%A8%D9%88%D8%AA...JPG

    عند الضغط على أي زر، سيتم إرسال الاتجاه إلى الخادم وتخزينه في قاعدة البيانات.

https://github.com/rahafadl/Robot_control/blob/4199118136998b4e3e15dd9412f8808ff54df011/%D8%AD%D8%B1%D9%83%D8%A9%20%D8%A7%D9%84%D8%B1%D9%88%D8%A8%D9%88%D8%AA.JPG

(
