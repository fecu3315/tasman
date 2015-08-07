<html>
<head>
	<title>Tasman</title>
	
	<!-- Load jQuery -->
	
	<!-- Load jQuery from local source -->
	<!-- <script src="web/javascript/jquery-1.11.2.js"></script> -->
	
	<!-- Load jQuery from CDN - requires internet -->
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	
	<script src="web/javascript/jquery.superslides.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="web/css/header.css" />
	<link rel="stylesheet" href="web/css/superslides.css" />	
	
	<script>
	$(document).ready(function() { // 이 부분은 document 가 load 가 끝나면 이라는 뜻입니다.
		$('.menuList li').hover(function() {
			if($(this).children('.subMenu').length > 0){
				$(this).children('ul.subMenu').show();
			}
		}).mouseleave(function() {
			if($(this).children('ul.subMenu').length > 0){
				$(this).children('ul.subMenu').hide();
			}
		});
	});
	</script>
</head>
<body>
	
<div class="header clearfix">
	
	<div class="section logo">
		<img src="https://www.google.co.nz/images/srpr/logo11w.png" />
	</div>
	
	<div class="section menu">
		<ul class="menuList">
			<?php
			// PHP array 와 loop을 써서 메뉴를구현하는 방법
			// $menus = array();
			// $menus[] = array('page' => 'main', 'label' => 'Home');
			// $menus[] = array('page' => 'aboutus', 'label' => 'About');
			// $menus[] = array('page' => 'course', 'label' => 'Courses');
			// $menus[] = array('page' => 'enrolment', 'label' => 'Enrolment');
			// $menus[] = array('page' => 'support', 'label' => 'Support');
			// $menus[] = array('page' => 'contactus', 'label' => 'Contact Us');
// 
			// foreach($menus as $menu) {
				// echo "<li><a href='index.php?page=".$menu['page']."'>".$menu['label']."</a></li> ";
			// }
			?>
			
			<li><a href="index.php">Home</a></li>
			<li>
				<a href="index.php?page=aboutus">About</a>
				<ul class="subMenu">
					<li><a href="#">About TIA</a></li>
					<li><a href="#">About Auckland</a></li>
					<li><a href="#">About New Zealand</a></li>
				</ul>
			</li>
			<li>
				<a href="index.php?page=course">Courses</a>
				<ul class="subMenu">
					<li>
						<a href="#"><i class="fa fa-book"></i> English</a>
						<ul class="subMenu">
							<li>General English</li>
							<li>IELTS</li>
						</ul>
					</li>
					<li><a href="#">Business</a></li>
					<li><a href="#">IT</a></li>
				</ul>
			</li>
			<li><a href="index.php?page=enrolment">Enrolment</a></li>
			<li><a href="index.php?page=support">Support</a></li>
			<li><a href="index.php?page=contactus">Contact</a></li>

		</ul>
	</div>
	
</div>


