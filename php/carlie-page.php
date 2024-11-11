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
			<h2>Day in the QA Life</h2>
			
			<video width="600" height="400" autoplay muted id="vid" style="margin-left: 200px;">
        <source src="../assets/video/InDesign-Time-Lapse-1.mp4" type="video/mp4">
        Your browser does not support this video.
      </video>

			<h3>Key Responsibilities</h3>
			<p  style="margin-bottom: 10px;">Visual Inspection and Testing:</p>

			<p  style="margin-bottom: 10px;">Conduct thorough visual inspections of web pages to ensure they match design specifications and maintain consistent branding. This includes checking for alignment, spacing, font consistency, and color accuracy across various devices and browsers.</p>
			<p  style="margin-bottom: 10px;">Using Design Tools</p>
			<p  style="margin-bottom: 10px;">Leverage tools like Figma to compare the final output against design mockups. Figma allows me to inspect design elements, measure sizes, and verify placements, ensuring that the implemented web pages align perfectly with the intended design.</p>
			<p  style="margin-bottom: 10px;">Utilize alignment tools and grids within Figma to check dimensions and spacing. These tools help identify any discrepancies in margins, padding, and overall layout, facilitating a smooth transition from design to development.</p>
			<h3>Cross-browser and Responsive Testing:</h3>
			<p  style="margin-bottom: 10px;">Perform testing across different browsers (e.g., Chrome, Firefox, Safari) and devices (desktops, tablets, smartphones) to ensure consistent performance and appearance. This includes checking for responsiveness and adaptability to varying screen sizes.</p>
			<p  style="margin-bottom: 10px;">Verify that all interactive elements, such as buttons, forms, and links, function as intended. This includes testing for any JavaScript or CSS-related issues that may affect usability.</p>
			<h3>Documentation and Reporting</h3>
			<p  style="margin-bottom: 10px;">Document findings and create detailed reports of any identified issues, categorizing them based on severity and providing actionable feedback for developers. This ensures that all problems are tracked and addressed in a timely manner.</p>
			<p  style="margin-bottom: 10px;">A critical aspect of a QA role is possessing a keen eye for detail. This attention to detail is essential for identifying subtle discrepancies that could impact the user experience. It involves not only spotting obvious errors but also recognizing inconsistencies that might not be immediately apparent.</p>
			<p  style="margin-bottom: 10px;">Ensuring that every pixel is in place requires a meticulous approach. Minor misalignments can lead to a disjointed user experience, so it's vital to compare designs against the final output carefully.</p>
			<h3>Quality Assurance Mindset:</h3>
			<p  style="margin-bottom: 10px;">Adopting a QA mindset means constantly questioning and validating every element on the page. This proactive approach helps catch issues early, reducing the risk of costly fixes after deployment.</p>
			<p  style="margin-bottom: 10px;">By combining a thorough understanding of web design principles with the ability to use modern tools effectively, I contribute to delivering high-quality web pages that meet user expectations and uphold the brand's integrity.</p>
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
	</body>
</html>