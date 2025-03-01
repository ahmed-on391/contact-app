<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

دي نسخة **احترافية وجميلة** لـ `README.md` لمشروع **Contact-App**، تقدر تنسخها وتعدل عليها حسب احتياجاتك. 🚀  

---

## **📞 Contact-App**  
**تطبيق لإدارة جهات الاتصال** باستخدام Laravel & MySQL.  
واجهة مستخدم بسيطة وسهلة تساعدك على **إضافة وتحديث وحذف جهات الاتصال** بسهولة.  

![Contact-App Banner](https://via.placeholder.com/1000x300?text=Contact+App+Banner)  

---

## **✨ الميزات**  
✅ إضافة، تعديل، وحذف جهات الاتصال بسهولة.  
✅ البحث عن جهات الاتصال باستخدام الاسم أو البريد الإلكتروني.  
✅ واجهة مستخدم **جميلة وبسيطة** تعتمد على Tailwind CSS.  
✅ **نظام صلاحيات المستخدمين** باستخدام Spatie Permissions.  
✅ توثيق API لاستخدام التطبيق في الأنظمة الخارجية.  

---

## **🚀 التثبيت والتشغيل**  
### **1️⃣ استنساخ المشروع**  
```bash
git clone https://github.com/ahmed-on391/contact-app.git
cd contact-app
```
### **2️⃣ تثبيت الحزم المطلوبة**  
```bash
composer install
npm install
```
### **3️⃣ ضبط ملف البيئة**  
```bash
cp .env.example .env
php artisan key:generate
```
**✏️ لا تنسَ تعديل إعدادات قاعدة البيانات في ملف `.env`**  

### **4️⃣ تشغيل المهاجرات وإنشاء البيانات الأساسية**  
```bash
php artisan migrate --seed
```
### **5️⃣ تشغيل السيرفر**  
```bash
php artisan serve
```
🔗 **افتح المتصفح على**: [http://127.0.0.1:8000](http://127.0.0.1:8000)  

---

## **🛠 المتطلبات**  
- PHP 8.1 أو أحدث  
- Composer  
- Node.js & NPM  
- MySQL أو SQLite  
- Laravel 11  

---

## **📷 لقطات من التطبيق**  
![واجهة لوحة التحكم](https://raw.githubusercontent.com/YourUsername/contact-app/main/screenshots/dashboard.png)

📌 *واجهة المستخدم للوحة التحكم.*  
![image](https://github.com/user-attachments/assets/abfaf13d-cd05-4969-8a5d-2509852ea795)

![image](https://github.com/user-attachments/assets/4e78194f-91d6-48ea-a599-5fbedfe5d81f)

![image](https://github.com/user-attachments/assets/f35b6a6d-f596-420d-83ea-fd1aed8e6ee5)

![image](https://github.com/user-attachments/assets/6571d352-7c5c-4281-8d59-11b8563c98a1)

![image](https://github.com/user-attachments/assets/86579d53-b6c5-4584-b227-6fb257f55fe9)

![image](https://github.com/user-attachments/assets/2fc46088-3366-41aa-bfa2-57c724188d2b)



---

## **📡 API Endpoints**  
| **المسار**       | **الوصف**                 | **الطريقة**  | **المصادقة** |
|-----------------|-------------------------|------------|------------|
| `/api/contacts` | الحصول على جميع جهات الاتصال | `GET`       | ✅ مطلوب |
| `/api/contacts` | إنشاء جهة اتصال جديدة   | `POST`      | ✅ مطلوب |
| `/api/contacts/{id}` | تحديث جهة اتصال      | `PUT`       | ✅ مطلوب |
| `/api/contacts/{id}` | حذف جهة اتصال        | `DELETE`    | ✅ مطلوب |

📜 *للمزيد من التفاصيل، راجع [توثيق API](#).*

---

## **👨‍💻 المساهمون**  
- **Ahmed Yassien** - Full Stack Laravel Developer  
🔗 [ملفي الشخصي على GitHub](https://github.com/ahmed-on391)  

---

## **📜 الرخصة**  
هذا المشروع مرخص تحت **MIT License** – يمكنك استخدامه وتعديله بحرية.  

💡 **محتاج أي مساعدة أو عندك اقتراح؟ افتح Issue وسأتواصل معك! 😊**
