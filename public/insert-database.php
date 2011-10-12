<?php

 mysql_connect("localhost", "root", ""); // Replace with your db connection details
 mysql_select_db("relief1");

 $sql_check = ("SELECT email FROM email_teaser WHERE email='" . htmlspecialchars($_POST['email_address']) . "'"); // checking if email is in db already
 $sqlquery = mysql_query($sql_check);
 $numrows = mysql_num_rows($sqlquery);
  
 if($numrows != 1) //if emails is not there, add it to the db and send email
 {
 
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
	 
 $sql_add = "INSERT INTO email_teaser (id, email, timestamp, ip) VALUES ('', '" . htmlspecialchars($_POST['email_address']) . "', NOW(), '" . $ip . "' )";
 $result = mysql_query($sql_add);
 }
 
?>