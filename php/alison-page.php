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
		<link href="../assets/css/app.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/cds-library.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>


    </style>
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
			<h2>Day in the Design Life</h2>
			
      <video width="600" height="400" autoplay muted id="vid" style="margin-left: 200px;">
        <source src="../assets/video/InDesign-Time-Lapse-1.mp4" type="video/mp4">
        Your browser does not support this video.
      </video>

      <p style="margin-bottom: 10px;">Working as a designer in today's digital landscape requires proficiency with a range of creative tools and an understanding of current design trends. Below are some of the key skills and applications I utilize in my work:</p>
			<p style="margin-bottom: 10px;">Adobe Creative Cloud is a comprehensive suite of design tools, including:</p>
			<ul>
				<li style="margin-bottom: 10px;">Photoshop: Essential for image editing, photo manipulation, and creating pixel-perfect designs.</li>
				<li style="margin-bottom: 10px;">Illustrator: Vector design tool used for creating logos, icons, and illustrations with precision and scalability.</li>
				<li style="margin-bottom: 10px;">InDesign: Ideal for layout design, such as brochures, magazines, and multi-page documents.</li>
				<li style="margin-bottom: 10px;">Adobe XD: A powerful tool for wireframing, prototyping, and designing user interfaces for web and mobile applications.</li>
				<li style="margin-bottom: 10px;">After Effects: For motion graphics and video effects, adding dynamic elements to visual storytelling.</li>
				<li style="margin-bottom: 10px;">Premiere Pro: Video editing software that allows designers to create, edit, and refine video content for marketing and presentations.</li>
			</ul>
			<p style="margin-bottom: 10px;">Figma has emerged as a collaborative tool that streamlines design workflows:</p>
			<ul>
				<li style="margin-bottom: 10px;">Collaborative Design: Figma allows multiple users to work on a design simultaneously, making it ideal for team projects and design sprints.
				Prototyping and UI Design: Figma's strength lies in its simplicity for wireframing, designing user interfaces, and creating interactive prototypes that can be tested with real users.</li>
				<li style="margin-bottom: 10px;">Design Systems: With Figma, I can create scalable design systems that maintain consistency across large projects and teams.
				Other Relevant Tools & Skills</li>
				<li style="margin-bottom: 10px;">Sketch: Another popular design tool, used primarily for UI/UX design, wireframing, and prototyping, especially favored for macOS users.</li>
				<li style="margin-bottom: 10px;">InVision: For building clickable prototypes, collaboration with stakeholders, and sharing designs interactively.</li>
				<li style="margin-bottom: 10px;">Canva: While less advanced than Adobe tools, Canva is useful for creating quick graphics and presentations with ready-made templates.</li>
				<li style="margin-bottom: 10px;">Webflow: Combines design and development, allowing me to visually design responsive websites and export clean code.</li>
				<li style="margin-bottom: 10px;">HTML/CSS Basics: A fundamental understanding of HTML and CSS allows me to effectively communicate with developers and ensure that designs are accurately implemented.</li>
				<li style="margin-bottom: 10px;">UX Research: Conducting user research and usability testing is key to ensuring the designs I create meet the needs and expectations of users.</li>
				<li style="margin-bottom: 10px;">Typography and Color Theory: Mastery of typography and color theory ensures that designs are not only visually appealing but also communicate the intended message effectively.</li>
			</ul>
      <video width="600" height="400" autoplay muted id="vid" style="margin-left: 200px;">
        <source src="../assets/video/Formwriter-Time-Lapse-1.mp4" type="video/mp4">
        Your browser does not support this video.
      </video>

      <p>FormWriter</p>

		 	<a href="aaron-page.php">
				<button class="spotlight-btn" style="width: 250px; margin-bottom: 40px;">Follow this Design to Development</button>
			</a>
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
      document.getElementById('vid').play();
    </script>

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
	</body>
</html>