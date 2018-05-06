<?php
namespace Contact;

class SendEmail {

  	public function send ($sender_email, $sender_name, $message, $filename) 
  	{	
    	$message = $sender_name . " has filled in a Contact html form with folowing content:" . "\n\n" . $message;
    	$headers = "From:" . $sender_email;
  		
  		try {
	    	mail(SEND_TO, "You got an email via Contact html page", $message, $headers);
	    	return true;
	    }
	    catch (Exception $e) {
	    	return false;
	    }
  	}
}