iShortener
===========

A simple iShortener & Image Hosting

In order to use this form you have to enter three things for set contact us:
- your reCAPTCHA private key in contactProcess.php (search for YOUR reCAPTCHA Private KEY = 6Leqf-USAAAAALAerlQxxze_LoKvp0KD1lh7iBK2)
- your reCAPTCHA public key in contact.php (search twice for YOUR reCAPTCHA PUBLIC KEY = 6Leqf-USAAAAALwY8sVy5KXdX0AsQ4IwxIi7G8Bh)
- your email address in contactProcess.php (search for YOUR EMAIL)

Screenshot
===========
<a href="http://pho.to/AHyjG" target="_blank"><img src="http://i.share.pho.to/814fb6e5_c.png"/></a>
[URL=http://pho.to/AHyjG][IMG]http://i.share.pho.to/814fb6e5_c.png[/IMG][/URL]

==========================================================

Get reCAPTCHA keys at http://www.google.com/recaptcha/whyrecaptcha

Specifications:
- jQuery (client-side) validation
- Send button is disabled if Javascript is disabled
- Server side validation
- Designed based on Twitter Bootstrap 5% and Materialize 95%
- Spam prevention using reCAPTCHA

==========================================================
Open about.php
Edit "yoururl/1"
Ex : "yourdomain.tk/1"

=======================================================
Open db.php and setting
mysql_connect('localhost', 'db_username', 'password') or die(mysql_error());
mysql_select_db('db_name') or die(mysql_error());

define('ADMIN', 'admin');
define('PASSWORD', 'password');

Installation is easy, go to hosting Cpanel and Create a MySQL Database & Username for it.

Once you've done that, go to PHPMyADmin and import the file called database.sql

Last step is to open db.php and update MySQL Credentials and admin area password (your admin area url is http://yourdomain.com/admin.php)

=Image Host=

///////////////////////////////////  iOPTIONS  ///////////////////////////////////////////


$siteurl = "yourdomain.com"; // Your domains or subdomains (e.g. yourdomain.com or yourdomain.com/folder)


$folder = "i"; // To upload the Folder (folder chmod to 777)


$maxsizekb = 5000; // Maximum file size allowed


$filetype = array("jpeg", "jpg", "gif", "bmp", "png", "ico", "psd"); // Allowed image formats


////////////////////////////////////////////////////////////////////////////////////////
