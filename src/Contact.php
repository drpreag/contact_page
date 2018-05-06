<?php
namespace Contact;

class Contact {

  	public function save ($senderemail, $sendername, $message, $filename) 
    {	
        try {  
            $db = Database::getInstance();
            $conn = $db->getConnection();           

			$query = $conn->prepare("INSERT INTO contact (senderemail, sendername, message, filename) VALUES (?, ?, ?, \"$filename\")");

			$query->bind_param("sss", $senderemail, $sendername, $message); 

            if ($query->execute() !== TRUE) 
                return false;
            return true;
        }
        catch (Exception $e) {
            return false;
        }
  	}
}