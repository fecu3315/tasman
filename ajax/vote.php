<?php
$host="localhost"; // Host name 
$username="tasman"; // Mysql username 
$password="test1234"; // Mysql password 
$db_name="tutorial"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$query = "SELECT question_id, vote_count FROM answer WHERE id = ".$_POST['answer'];
$result = mysql_query($query);

if($result) {
	$data = mysql_fetch_array($result);
	$vote_count = $data['vote_count'];
	$vote_count++;
	
	$update_query = "UPDATE answer SET vote_count = ".$vote_count." WHERE id = ".$_POST['answer'];
	mysql_query($update_query);
	
	$a_query = "SELECT id, vote_count FROM answer WHERE question_id = ".$data['question_id'];
	$a_result = mysql_query($a_query);
	$vote_counts = array();
	if($a_result) {
		while($answer = mysql_fetch_array($a_result)) {
			$vote_counts[$answer['id']] = $answer['vote_count'];
		}
		print json_encode($vote_counts);
	}	
}
?>