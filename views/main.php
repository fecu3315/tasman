<link rel="stylesheet" href="web/css/main.css" />	
<script>
$(document).ready(function() { // 이 부분은 document 가 load 가 끝나면 이라는 뜻입니다.
	//$('#slides').superslides();
	
	$('.main-contents1 .column').hover(function() {
		$(this).css('border', '1px solid red');
		$(this).css('background-color', '#cccccc');
		$(this).css('cursor', 'pointer');
	}).mouseleave(function() {
		$(this).css('border', 'none');
		$(this).css('background-color', '#ffffff');
		$(this).css('cursor', 'normal');
	});
});
</script>

<!-- <div id="slides">
	<div class="slides-container">
	  <img src="web/image/people.jpeg" alt="Cinelli">
	  <img src="web/image/surly.jpeg" width="1024" height="682" alt="Surly">
	  <img src="web/image/cinelli-front.jpeg" width="1024" height="683" alt="Cinelli">
	  <img src="web/image/affinity.jpeg" width="1024" height="685" alt="Affinity">
	</div>
	
	<nav class="slides-navigation">
	  <a href="#" class="next">Next</a>
	  <a href="#" class="prev">Previous</a>
	</nav>
</div> -->


<div class="container-fluid main-contents1">
  <div class="row">
	  <div class="col-md-4 column">
	  	<div class="title"><i class="fa fa-book"></i> English</div>
	  	We offer different levels of General English and IELTS preparation courses. Our classes are small which means we give students individual attention and help with their specific problems.
	  </div>
	  <div class="col-md-4 column">
	  	<div class="title">Business</div>
	  	The National Diplomas in Business (Level 5 & 6) are well-established national qualifications respected by employers, polytechnics and universities.
	  </div>
	  <div class="col-md-4 column">
	  	<div class="title">Information Technology</div>
	  	Our IT department is our most diverse. We offer a National Diploma in Computing (Level 5), Diploma in Support & Opperations (Level 7) and a Diploma in Multimedia (Level 7).
	  </div>
  </div>
</div>

<div class="container-fulid main-contents2">
	<div class="row">
		<div class="col-md-3 column">
			<div class="img"><img src="http://www.tasman.ac.nz/assets/img/main/2.jpg" /></div>
			<div class="title">Maritime Museum</div>
			<p>Tasman's English Classes visit to the New Zealand Maritime Museum.</p>
		</div>
		
		<div class="col-md-3 column">
			<div class="img"><img src="http://www.tasman.ac.nz/assets/img/main/3.jpg" /></div>
			<div class="title">Shakespear Park</div>
			<p>Tasman's annual school-wide trip to Auckland's Shakespear Park.</p>
		</div>
		
		<div class="col-md-3 column">
			<div class="img"><img src="http://www.tasman.ac.nz/assets/img/main/9.jpg" /></div>
			<div class="title">Shakespear Park</div>
			<p>Tasman's annual school-wide trip to Auckland's Shakespear Park.</p>
		</div>
		
		<div class="col-md-3 column">
			<div class="img"><img src="http://www.tasman.ac.nz/assets/img/main/10.jpg" /></div>
			<div class="title">Shakespear Park</div>
			<p>Tasman's annual school-wide trip to Auckland's Shakespear Park.</p>
		</div>
	</div>
</div>
