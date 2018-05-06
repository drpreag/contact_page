<?php 
require "vendor/autoload.php";

use Contact\Contact;
use Contact\SendEmail;

$sendername = $senderemail = $message = $attachment = null;

if (! $_POST) 
    header($error_location.'Not a POST request');

try {
    $sendername = trim($_POST ["name"]);
    if (strlen($sendername)==0) 
        throw new Exception ("Name field can not be empty"); 

    $senderemail = trim($_POST ["email"]);
    if (strlen($senderemail)==0) 
        throw new Exception ("Email field can not be empty"); 

    $message = trim($_POST ["message"]);
    if (strlen($message)==0) 
        throw new Exception ("Message field can not be empty"); 

    $contact = new Contact;
    $sendEmail = new SendEmail;
    $filename = $target_file = null;

    $attachment = $_FILES['filename']['tmp_name']; 

    if (! is_null ($attachment) and strlen($attachment)>3) { 
        $attachment_type = $_FILES['filename']['type']; 
        $attachment_name = $_FILES['filename']['name'];
        $filename = $attachment_name;
        $target_file = UPLOAD_DIR . $sendername . '_' . basename($_FILES["filename"]["name"]);     
        if (move_uploaded_file($attachment,$target_file) === false) 
            header(ERROR_PAGE.'Error while saving uploaded file');                                     
    }
    if ($contact->save ($senderemail, $sendername, $message, $target_file) === false)         
        header(ERROR_PAGE.'Error saving to database');    

    if ($sendEmail->send ($senderemail, $sendername, $message, $filename) === false)
        header(ERROR_PAGE.'Error sending e-mail');                 

    header(SUCCESS_PAGE);
} catch (Exception $e) {    
    header(ERROR_PAGE.$e->getMessage());
    die();
}  
