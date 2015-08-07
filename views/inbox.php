<?php
include('function/functions.php');

function vdump($string) {
	print '<pre>';
	print_r($string);
	print '</pre>';
}

$host="localhost"; // Host name 
$username="tasman"; // Mysql username 
$password="test1234"; // Mysql password 
$db_name="tutorial"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


?>

<script>
$(document).ready(function() { // 이 부분은 document 가 load 가 끝나면 이라는 뜻입니다.
	
	setInterval(function(){ 
		$.post( "ajax/email_poll.php", { receiver_id: 1, last_time: $('ul.emailList .last_time').first().val() })
		.done(function( data ) {
			// if there is no new email
			if(data == false) {
				
			// if there is new email then prepend to email list
			} else {
				$('.emailList').prepend(data);
			}
		}).error(function(e) {
			
		});
	 }, 3000);
});
</script>

<ul class="list-group emailList">
<?php
$inbox_query = "SELECT * FROM `email` WHERE receiver_id = 1 ORDER BY created DESC";
$result = mysql_query($inbox_query);
if($result and mysql_num_rows($result) > 0) {
	while($email = mysql_fetch_assoc($result)) {
		print printRow($email);
	}
}
?>
	
</ul>
