<?php

 mysql_connect("localhost", "root", ""); // Replace with your db connection details
 mysql_select_db("relief1");

 $sql_check = ("SELECT email FROM email_teaser WHERE email='" . htmlspecialchars($_POST['email_address']) . "'"); // checking if email is in db already
 $sqlquery = mysql_query($sql_check);
 $numrows = mysql_num_rows($sqlquery);
  
 if($numrows != 1) //if emails is not there, add it to the db.
 {
 $sql_add = "INSERT INTO email_teaser (id, email, timestamp, ip) VALUES ('', '" . htmlspecialchars($_POST['email_address']) . "', NOW(), '" . $ip . "' )";
 $result = mysql_query($sql_add);
 }
 
?>