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
			.content p {
				padding: 5px 0;
			}
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
			<h2>Day in the BA Life</h2>
			<video width="600" height="400" controls id="webm-vid" style="margin-left: 200px;" playsinline autoplay loop>
        <source src="../assets/video/Contract-Validation-UI-Overview.webm" type="video/webm">
        Your browser does not support this video.
      </video>
			<p style="margin-top: 40px;">I translate business needs into functional requirements through comprehensive documentation, including use cases, process flows, and data mapping. This involves conducting interviews, workshops, and surveys with relevant teams.</p>
			<p>Data Analysis and Reporting:</p>
			<p>By analyzing data trends and key performance indicators (KPIs), I provide insights that help drive decision-making. I often create reports and dashboards to visualize data for stakeholders, using tools such as Excel, SQL, and Power BI.</p>
			<p>Liaising with Development Teams:</p>
			<p>Once requirements are documented, I work closely with developers, providing them with the necessary details and clarifications to ensure the solution is designed accurately. I also facilitate sprint planning and review sessions with Agile teams.</p>
			<p>User Acceptance Testing (UAT):</p>
			<p>I oversee UAT processes, ensuring that the final product aligns with the documented requirements. This involves coordinating testing sessions with users and resolving any issues that arise before deployment.</p>
			<p>Cross-functional Collaboration:</p>
			<p>One of the key aspects of my role is facilitating cross-departmental collaboration. I ensure that various teams—including IT, operations, and finance—are aligned and working towards a common objective.</p>
			<p>Project Management Support:</p>
			<p style="margin-bottom: 40px;">I assist project managers by tracking project progress, maintaining documentation, and ensuring that deadlines are met. This often involves using project management tools like Jira, Trello, or Microsoft Project.</p>
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
      document.getElementById('webm-vid').play();
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