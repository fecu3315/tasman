<?php
$host="localhost"; // Host name 
$username="tasman"; // Mysql username 
$password="test1234"; // Mysql password 
$db_name="tutorial"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$query = "SELECT * FROM `users` WHERE email = '".$_POST['email']."'";

$result = mysql_query($query);
if(mysql_num_rows($result) === 0) {
	echo 'OK';
} else {
	echo 'EXIST';
}
?>