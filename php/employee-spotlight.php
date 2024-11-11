<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cross Collaboration</title>
		<link rel="stylesheet" href="../assets/css/pure-css/set.css">
		<link href="../assets/css/cds-library.css" rel="stylesheet" type="text/css">
		<link href="../assets/css/app.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

	</head>
	<body class="loggedin">
		<div class="topnav desktop-topnav" id="myTopnav">
			<img src="../assets/images/cds-logo.png" alt="CDS Logo" style="width: 38px; height: 38px; margin: 10px 10px;">
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
			<!-- <a href="profile.php"><i class="fas fa-user-circle"></i></a> -->
			<!-- <a href="games.php">Games</a> -->
			<a href="dayInTheLife.php">Day in the Life</a>
			<a href="newsletter.php">Newsletter</a>
      <a href="home.php">Home</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div class="content">
			<h2>Employee Spotlight</h2>
			<img src="../assets/images/breanna-headshot.jpg" alt="" style="width: 140px; border-radius: 10px;">
			<h2>Breanna Carter</h2>
			<div class="grid">
				<div class="item">
					<p style="margin-bottom: 10px;">In this edition of our Employee Spotlight, we're thrilled to introduce Breanna, a dedicated Business Analyst whose diverse training and experiences have paved the way for her significant contributions to our team.</p>
					<p style="margin-bottom: 10px;">Breanna's journey began with foundational training in configuration, where she learned the intricacies of customizing systems to meet specific business needs. This experience instilled in her a deep understanding of how technology can align with organizational objectives, laying the groundwork for her analytical mindset.</p>
					<p style="margin-bottom: 10px;">Transitioning into project management, Breanna honed her skills in coordinating teams and managing timelines, essential for ensuring that projects run smoothly. This role taught her the importance of communication and collaboration, skills that are vital in her current position as a Business Analyst. Breanna's ability to juggle multiple projects simultaneously has made her a linchpin within our organization.</p>
					<p style="margin-bottom: 10px;">Her training in data analysis and reporting further expanded her toolkit. Breanna became adept at interpreting complex data sets and generating reports that inform decision-making. This analytical prowess allows her to provide actionable insights to stakeholders, helping the organization make informed choices based on empirical evidence.</p>
					<p style="margin-bottom: 10px;">Perhaps one of the most crucial steps in her journey was her involvement in user acceptance testing (UAT). Through UAT, Breanna gained firsthand experience in validating that systems meet user requirements and function as intended. This role not only sharpened her attention to detail but also deepened her empathy for end-users, a quality that enhances her effectiveness as a Business Analyst.</p>
					<p style="margin-bottom: 10px;">Together, these diverse training experiences opened the door for Breanna to step into her large role as a Business Analyst. Her holistic understanding of both technical and business processes enables her to bridge gaps between stakeholders and development teams effectively. Breanna's contributions have been instrumental in driving our projects forward, ensuring that we meet our goals while maintaining high standards of quality and user satisfaction.</p>
					<p style="margin-bottom: 10px;">We're proud to have Breanna as part of our team, and we look forward to seeing her continued growth and impact in the role!</p>
				</div>
				<div class="item">
					<a href="breanna-page.php">
						<div class="ditlCard">
							<h3>Cross Collab with Me</h3>
							<p style="margin: 30px 0;">Take a look at an overview of a day in my life and reach out if you would like to learn even more.</p>
							<a href="breanna-page.php"><button class="spotlight-btn">Check out a day in my work life!</button></a>
						</div>
					</a>
				</div>
				<!-- <div class="item">Some More Spotlight</div>
				
				<div class="item">
          <h3>Spotlight Spotlight</h3>
				</div>
				<div class="item">The Last Spotlight</div> -->
			</div>
		</div>

		<div class="footer-container">
			<div class="link-list">
				<div class="services">
					<h3>Services</h3>
					<a href="newsletter.php"><p>Newsletter</p></a>
					<a href="dayInTheLife.php"><p>Day In The Life</p></a>
					<a href="games.php"><p>Games</p></a>
				</div>
				<div class="careers">
					<h3>Lorem</h3>
					<a href="under-construction.php"><p>Lorem</p></a>
					<p href="under-construction.php">Lorem</p>
					<p href="under-construction.php">Lorem</p>
				</div>
				<div class="about">
					<h3>About</h3>
					<a href="https://productionandhtml.com/"><p>Production and Design</p></a>
					<p href="under-construction.php">Team</p>
					<p href="under-construction.php">Employee success</p>
				</div>
			</div>
			<div class="link-icons">
				<a href="under-construction.php"><i class="fa-solid fa-face-smile"></i></a>
				<a href="under-construction.php"><i class="fa-solid fa-mug-hot"></i></a>
				<a href="under-construction.php"><i class="fa-solid fa-gear"></i></a>
				<a href="under-construction.php"><i class="fa-solid fa-globe"></i></a>
			</div>
			<div class="copyright">
				<p>CDS Funatics &#169; All Rights Reserved</p>
			</div>
		</div>


		<script>
			/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		</script>

		<!-- <script src="../assets/js/main.js"></script> -->
	</body>
</html>