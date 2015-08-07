<html>
<head>
	<title>Week 10</title>
	<style>
	img.thumbnail {
		width: 150px;
	}
	</style>
</head>
<body>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Gender</td>
			<td>Country</td>
		</tr>
	</thead>
	<tbody>
<?php
$host="localhost"; // Host name 
$username="tasman"; // Mysql username 
$password="test1234"; // Mysql password 
$db_name="tutorial"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$query = "SELECT * FROM neighbours ORDER BY created_at DESC";

$result = mysql_query($query);
if($result and mysql_num_rows($result) > 0) {
	while($user = mysql_fetch_assoc($result)) {
		print '<tr>';
		print '<td>'.$user['id'].'</td>';
		print '<td>'.$user['firstname'].' '.$user['lastname'].'</td>';
		print '<td>'.$user['email'].'</td>';
		print '<td>'.$user['gender'].'</td>';
		print '<td>'.$user['country'].'</td>';
		print '</tr>';
	}
// there is no new email
} else{
	echo false;
}
?>
	</tbody>
</table>
</body>
</html>