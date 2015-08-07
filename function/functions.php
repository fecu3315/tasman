<?php
function printRow($email) {
	// Conditional statement
	$email_class = $email['opened'] == 1 ? 'success' : 'warning';
	
	// Same as above conditional statement
	// if($email['opened'] == 1) {
		// $email_class = 'success';
	// } else {
		// $email_class = 'warning';
	// }
	
	return '
	<li class="list-group-item list-group-item-'.$email_class.'">
		<ul class="list-inline">
			<li>Moon go eun</li>
			<li>'.$email['subject'].'</li>
			<li>'.date('H:i A', strtotime($email['created'])).'</li>
			<input type="hidden" class="last_time" value="'.$email['created'].'" />
		</ul>
	</li>
	';
}
?>