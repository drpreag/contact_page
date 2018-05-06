<?php
namespace Contact;
define("HOST", "localhost");
define("USERNAME", "user");
define("PASSWORD", "");
define("DATABASE", "kudos");    

// default e-mail address to send email from a contact page
define("SEND_TO", "predrag.vlajkovic@gmail.com"); 

// default upload folder, be sure that web server can write to this folder
define("UPLOAD_DIR", "/home/predrag/sites/contact_page/uploads/");

// error page location
define("ERROR_PAGE", "Location: /error.php?error=");

// success page location
define("SUCCESS_PAGE", "Location: /thank_you.html");
