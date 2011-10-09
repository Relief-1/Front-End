<?php
 $names = $_POST['names'];
 $country = $_POST['country'];
 $email = $_POST['email_address'];
 $comment = $_POST['comment'];
 $type = $_POST['type'];
 $ip = $_SERVER['REMOTE_ADDR'];
 $to ='relief1.org@gmail.com';
 
 $message = "";
 $message .= "<small>- Applying for :<strong>" . htmlspecialchars($type, ENT_QUOTES) . "</strong></small><br>\n";
 $message .= "<small>- Name :<strong>" . htmlspecialchars($names, ENT_QUOTES) . "</strong></small><br>\n";
 $message .= "<small>- Country :<strong>" . htmlspecialchars($country, ENT_QUOTES) . "</strong></small><br>\n";
 $message .= "<small>- Email : " . htmlspecialchars($email, ENT_QUOTES) . "<br>\n</small>";
 $message .= "<small>- What makes you special ? :" . htmlspecialchars($comment, ENT_QUOTES) . "<br>\n <p></small></p>";
 $message .= "<small>- IP Adress : " . htmlspecialchars($ip, ENT_QUOTES). "<br>\n </small>";
 $lowmsg = strtolower($message);
  
 $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: \"" . $names . "\" <" . $email . ">\r\n";
 $headers .= "Reply-To: " .  $email . "\r\n";
 $message = utf8_decode($message);  mail($to, "Relief1 job form", $message, $headers);
 


 
 if ($message){
 	  echo 'sent';
 }else{
 	  echo 'Message failed';
 }
 
 
 
?>