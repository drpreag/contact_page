# Contact page #
  
This is a small peace of code then can be used for a contact page on every site.

Purpose is to provide clients with option of sending a message to webmaster 
with possiblity to upload a file along with a message. File goes to upload folder, 
email message goes to webmaster (if smtp is available on locahost), 
and also message is stored in a simple database table (under new name).

Entry point is page: contact.html which on post trigs contact_post.php.
contact_post.php redirect to a thank-you.html if success or error.php if any error ocured.