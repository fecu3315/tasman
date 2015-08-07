<?php
include('header.php');

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'main';
}

include("views/$page.php");

include('footer.php');

$show = false;
if($show === true) {
	print 'show';
} else {
	print 'hidden';
}

print $show ? 'show' : 'hidden';
$unread_email_count = 3;
?>
<span class="badge"><?php echo $unread_email_count;?></span>
<div class="<?php print $show ? 'show' : 'hidden';?>">asdfasdfasd</div>
