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
        <style>
            .item-img .img-wrap {
			    text-align: center;
			}
        </style>
	</head>
	<body class="loggedin">
		<div class="topnav desktop-topnav" id="myTopnav">
			<img src="../assets/images/cds-logo.png" alt="CDS Logo" style="width: 38px; height: 38px; margin: 10px 10px;">
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
			<!-- <a href="profile.php"><i class="fas fa-user-circle"></i></a> -->
			<!-- <a href="games.php">Games</a> -->
			<a href="shout-out.php">Shout Outs</a>
			<a href="dayInTheLife.php">Mentor Program</a>
      <a href="home.php">Home</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div class="content">
			<div class="the-team" style="text-align: center;">
				<img src="../assets/images/newsletter_header.png" alt="" style="width: 150px; border-radius: 50%; margin-right: 10px; margin-top: 40px; margin-bottom: 20px;">
				<br>
				<h2>The Leadership Team</h2>
				<img src="../assets/images/ted-sampson-headshot.png" alt="" style="width: 80px; height: 89px; border-radius: 50%; margin-right: 10px; margin-bottom: 20px;">
				<img src="../assets/images/dave-hamstead-headshot.png" alt="" style="width: 80px; border-radius: 50%; margin-right: 10px; margin-bottom: 20px;">
				<img src="../assets/images/eric-powell-headshot.png" alt="" style="width: 80px; border-radius: 50%; margin-right: 10px; margin-bottom: 20px;">
				<img src="../assets/images/ashutosh-pandey-headshot.png" alt="" style="width: 80px; border-radius: 50%; margin-right: 10px; margin-bottom: 20px;">
				<img src="../assets/images/danielle-king-headshot.png" alt="" style="width: 80px; border-radius: 50%; margin-right: 10px; margin-bottom: 20px;">
				<img src="../assets/images/dave-roman-headshot.png" alt="" style="width: 80px; border-radius: 50%; margin-right: 10px; margin-bottom: 20px;">
				<img src="../assets/images/jess-mcgonigal-headshot.png" alt="" style="width: 80px; border-radius: 50%; margin-right: 10px; margin-bottom: 20px;">
				<img src="../assets/images/nidhi-borgaonkar-headshot.png" alt="" style="width: 80px; border-radius: 50%; margin-right: 10px; margin-bottom: 20px;">
			</div>
			<div class="grid">
				<div class="item">
					<h2>Welcome to Our Newsletter!</h2>
					<p style="margin: 10px 0;">We're excited to launch our company newsletter, your go-to source for all the latest happenings and insights within our organization! Each edition will feature important updates, including news about upcoming events, in-office schedules, and innovative ideas from our talented team members.</p>
					<p style="margin: 10px 0;">We believe that everyone's voice matters, and we encourage you to contribute! If you have suggestions for features or new functionalities you'd like to see on our website or in the newsletter, please share your thoughts. Your input is invaluable in shaping our collaborative space.</p>
					<p style="margin: 10px 0;">In addition to the latest news, we'll spotlight exceptional employees in each issue, giving you a glimpse into their accomplishments and contributions. We're also introducing a “Day in the Life” section, where team members will share their daily routines and experiences, helping us all understand the diverse roles within our company.</p>
					<p style="margin: 10px 0;">We look forward to building a vibrant and engaging newsletter together. Thank you for being a part of our community!</p>
					<p style="margin-bottom: 10px;">Best,</p>
					<p>The Funatics</p>
				</div>
				<div class="item">
					<h3>Image Gallery</h3>
					<img src="../assets/images/party0.jpg" alt="" style="display: block; width: 220px; margin: 0 0 10px 10%;">
					<img src="../assets/images/party3.jpg" alt="" style="display: block; width: 220px; margin: 0 0 10px 10%;">
					<a href="under-construction.php" style="display: block;"><button class="spotlight-btn">Full Gallery</button></a>
				</div>
				<div class="item">
					<h2>Day in The Design Life</h2>
					<p>Working as a designer in today's digital landscape requires proficiency with a range of creative tools.</p>
					<a href="alison-page.php">Read Article</a>
					<h2>Day in The Dev Life</h2>
					<p>Spend a day in development. Creating web pages from design files.</p>
					<a href="aaron-page.php">Read Article</a>
					<h2>Day in The QA Life</h2>
					<p>Quality Assurance primary responsibilities are to ensure that all web interfaces function as expected.</p>
					<a href="carlie-page.php">Read Article</a>
				 	<a href="dayInTheLife.php" style="display: block;"><button class="RSS-Feed spotlight-btn">Day In The Life</button></a>
				</div>
				<div class="item item-img">
					<h3>Employee Spotlight: Celebrating Our Team's Achievements</h3>
					<div class="img-wrap">
					   <img src="../assets/images/breanna-headshot.jpg" alt="Breanna's Employee Spotlight Headshot" style="width: 70%; margin: 0 auto; padding-bottom: 20px;">
					</div>
					
					<p>Our Employee Spotlight section is dedicated to recognizing the outstanding contributions and accomplishments of our team members.</p>
					<p style="margin-bottom: 10px;">This is a space to celebrate success stories, whether it's leading a critical project, mentoring colleagues, or bringing fresh ideas that drive the company forward. We're proud of the talent and hard work within our team, and this spotlight is our way of saying "thank you" for your exceptional efforts.</p>
					<a href="employee-spotlight.php"><button class="spotlight-btn">Spotlight</button></a>
				</div>
				<div class="item front-page-final-item">
					<a href="https://norstella--simpplr.vf.force.com/apex/simpplr__app?u=/site/a148W0000077YjKQAU/dashboard" target="_blank" style="display: block;"><h2>Norstella<br>News</h2></a>
				</div>
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