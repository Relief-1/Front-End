<?php
 $names = $_POST['names'];
 $country = $_POST['country'];
 $email = $_POST['email_address'];
 $comment = $_POST['comment'];
 $ip = $_SERVER['REMOTE_ADDR'];
 $to ='carterl.092e8ea3@e-mail.marketing.relief1.podio.com';
 
 $message = "";
 $message .= "<small>- Email : " . htmlspecialchars($email, ENT_QUOTES) . "<br>\n</small>";
 $message .= "<small>- IP Adress : " . htmlspecialchars($ip, ENT_QUOTES). "<br>\n </small>";
 $lowmsg = strtolower($message);
  
 $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: \"" . $names . "\" <" . $email . ">\r\n";
 $headers .= "Reply-To: " .  $email . "\r\n";
 $message = utf8_decode($message);  mail($to, $email, $message, $headers);
 


 
 if ($message){
 	  echo 'sent';
 }else{
 	  echo 'Message failed';
 }
 
 
 
?>