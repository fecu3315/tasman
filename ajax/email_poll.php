<?php
include('../function/functions.php');

$host="localhost"; // Host name 
$username="tasman"; // Mysql username 
$password="test1234"; // Mysql password 
$db_name="tutorial"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$query = 'SELECT * FROM `email` WHERE receiver_id = '.$_POST['receiver_id'].' AND created > "'.$_POST['last_time'].'" ORDER BY created DESC';

$result = mysql_query($query);
// if there is new email
if($result and mysql_num_rows($result) > 0) {
	$output = '';
	while($email = mysql_fetch_assoc($result)) {
		$output .= printRow($email);
	}
	echo $output;
// there is no new email
} else{
	echo false;
}
?>