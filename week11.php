<?php
$host="localhost"; // Host name 
$username="tasman"; // Mysql username 
$password="test1234"; // Mysql password 
$db_name="tutorial"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$q_query = "SELECT * FROM `question` WHERE id = 1";

$q_result = mysql_query($q_query);
if($q_result) {
	$question = mysql_fetch_array($q_result);
	$a_query = "SELECT * FROM `answer` WHERE question_id = ".$question['id'];
	$a_result = mysql_query($a_query);
	$answers = array();
	if($a_result) {
		while($answer = mysql_fetch_array($a_result)) {
			$answers[] = $answer;
		}
	}
} else {
	echo 'EXIST';
}
?>
<html>
	<head>
		<title>Vote</title>
		<!-- Load jQuery from CDN - requires internet -->
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	</head>
	
	<body>
		<p><b>Q.<?php print $question['question'] ?>?</b><br><br>
	    Answer.<br>
	    <?php
	    foreach($answers as $answer) {
	    	print '<input type="radio" name="enterradio" id="answer_'.$answer['id'].'" value="'.$answer['id'].'">'.$answer['answer'].' <div id="sc'.$answer['id'].'"></div>';
	    }
	    ?>	 
		<input type="button" name="enterbutton" id="btn" value="button">    
		
		<script>
	$(document).ready(function() { // 이 부분은 document 가 load 가 끝나면 이라는 뜻입니다.
		$('#btn').click(function(e) {
			
			var answer =  $('input[name="enterradio"]:checked').val();

			var formValid = false;
			if(answer) {
				$.ajax({
				    url : "ajax/vote.php",
				    type: "POST",
				    data : {answer: answer},
				    success: function(data)
				    {
				        var result = JSON.parse(data);
				        $.each(result, function( index, value ) {
							$('#sc' + index).html(value);
						});
				    },
				    error: function (jqXHR, textStatus, errorThrown)
				    {
				 		alert('Woops. error');
				    }
				});
			}
			
		});
	
	});
	</script>
	
	</body> 
</html>