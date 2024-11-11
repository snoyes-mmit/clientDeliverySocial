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
      .main-content-wrapper {
        display: flex !important;
        justify-content: space-around;
      }

      .ditlCard {
        width: 200px;
      }

      .ditlCard img {
        border-radius: 10px;
        width: 200px;
      }
      #imgHover {
            margin: 0px;
            border-radius: 10px;
            height: 130px;
            width: 200px;
            background-image: url(
"https://clientdeliverysocial.com/assets/images/carlie-headshot.jpg");
            background-size: cover;
      }
      #imgHover:hover {
          background-image: url('https://clientdeliverysocial.com/assets/images/carlie-headshot-evil.jpg');
          border-radius: 10px;
          width: 200px;
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
			<a href="newsletter.php">Newsletter</a>
      <a href="home.php">Home</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>

		<div class="content">



			<h2>Day in the Life</h2>
			<div class="grid">

				<div class="item front-page-item-one">
          <p style="margin-top: 30px; margin-bottom: 10px;">Welcome to the "Day in the Life" page—a dynamic space designed to foster cross-collaboration and connection among team members! This page offers an inside look at the daily routines and responsibilities of various employees across our organization.</p>
          <p style="margin-bottom: 10px;">By exploring the "Day in the Life" profiles, you'll gain valuable insights into the diverse roles within our team and the unique contributions each person makes. This transparency encourages collaboration and helps us understand how we can support one another in our work.</p>
          <p style="margin-bottom: 10px;">In addition to showcasing daily activities, the "Day in the Life" page provides an opportunity for you to reach out for one-on-one sessions with colleagues. Whether you're seeking mentorship, have questions about a specific role, or want to discuss best practices, these sessions can help strengthen our team bonds and promote knowledge sharing.</p>
          <p style="margin-bottom: 10px;">To further enhance your learning experience, some profiles include quizzes to assess your current knowledge level related to specific roles or skills. After completing a quiz, you can request a team member to review your results, offering constructive feedback and insights that can aid in your professional development.</p>
          <p style="margin-bottom: 10px;">We encourage you to explore this page regularly, connect with your teammates, and take advantage of the resources available. Together, we can foster a culture of collaboration and continuous learning!</p>
          <h3 style="margin-top: 70px;">If you would like to add a day in your life to help others learn about your job. Please contact your manager and have them reach out to our team.</h3>
				</div>

				<div class="item">
          <a href="alison-page.php">
            <div class="ditlCard">
              <img src="../assets/images/alison-headshot.jpg" alt="Alison Headshot">
              <h2>Alison Jacobson</h2>
              <p style="margin-bottom: 10px;">Design</p>
              <p style="margin-bottom: 10px;">As a modern designer, I blend creativity and technology to craft visually compelling designs across various platforms. Utilizing industry-leading tools like Adobe Creative Cloud and Figma.</p>
              <p>I create engaging user experiences, from branding and marketing materials to dynamic digital products.</p>
            </div>
          </a>
				</div>
				<div class="item">
          <a href="breanna-page.php">
            <div class="ditlCard">
              <img src="../assets/images/breanna-headshot.jpg" alt="Breanna Headshot">
              <h2>Breanna Carter</h2>
              <p style="margin-bottom: 10px;">Business Analyst</p>
              <p>I act as the bridge between stakeholders and development teams, ensuring that business needs are understood and translated into functional solutions. Drawing on a deep understanding of business processes, I help guide decision-making.</p>
            </div>
          </a>
				</div>
				<div class="item">
          <a href="aaron-page.php">
            <div class="ditlCard">
              <img src="../assets/images/aaron-headshot.jpg" alt="Aaron Headshot">
              <h2>Aaron Shields</h2>
              <p style="margin-bottom: 10px;">Developer</p>
              <p>Developing HTML and CSS templates for a website involves translating design files, such as PDFs and Figma prototypes, into functional, responsive web pages. This process requires a meticulous approach to ensure that every aspect of the design is accurately reflected in the final product.</p>
            </div>
          </a>
				</div>
				<div class="item">
          <a href="carlie-page.php">
            <div class="ditlCard">
                <div id="imgHover"></div>
              <h2>Carlie Sages</h2>
              <p style="margin-bottom: 10px;">Quality Assurance</p>
              <p><span style="font-style: italic; font-size: 10px;">noun&nbsp;&nbsp;</span><span style="font-family: monospace;">Someone who makes people feel bad about their work.</span><br> I focus on design and detail. My primary responsibility is to ensure that all web interfaces function correctly, appear visually consistent, and provide a seamless user experience. This involves meticulous testing and validation processes.</p>
            </div>
          </a>
				</div>
			</div>

      <!-- <div class="main-content-wrapper">

        <a href="alison-page.php">
          <div class="ditlCard">
            <img src="../assets/images/alison-headshot.jpg" alt="Alison Headshot">
            <h2>Alison Jacobson</h2>
            <p style="margin-bottom: 10px;">Design</p>
            <p style="margin-bottom: 10px;">As a modern designer, I blend creativity and technology to craft visually compelling designs across various platforms. Utilizing industry-leading tools like Adobe Creative Cloud and Figma.</p>
            <p>I create engaging user experiences, from branding and marketing materials to dynamic digital products.</p>
          </div>
        </a>
        
        <a href="breanna-page.php">
          <div class="ditlCard">
            <img src="../assets/images/breanna-headshot.jpg" alt="Breanna Headshot">
            <h2>Breanna Carter</h2>
            <p style="margin-bottom: 10px;">Business Analyst</p>
            <p>I act as the bridge between stakeholders and development teams, ensuring that business needs are understood and translated into functional solutions. Drawing on a deep understanding of business processes, I help guide decision-making.</p>
          </div>
        </a>
        
        <a href="aaron-page.php">
          <div class="ditlCard">
            <img src="../assets/images/aaron-headshot.jpg" alt="Aaron Headshot">
            <h2>Aaron Shields</h2>
            <p style="margin-bottom: 10px;">Developer</p>
            <p>Developing HTML and CSS templates for a website involves translating design files, such as PDFs and Figma prototypes, into functional, responsive web pages. This process requires a meticulous approach to ensure that every aspect of the design is accurately reflected in the final product.</p>
          </div>
        </a>
        
        <a href="carlie-page.php">
          <div class="ditlCard">
            <img src="../assets/images/carlie-headshot.jpg" alt="Carlie Headshot">
            <h2>Carlie Sages</h2>
            <p style="margin-bottom: 10px;">QA</p>
            <p>In a Quality Assurance role focused on HTML/CSS web pages, my primary responsibility is to ensure that all web interfaces function correctly, appear visually consistent, and provide a seamless user experience. This involves meticulous testing and validation processes.</p>
          </div>
        </a>

      </div> -->

		<!-- </div> -->

    <!-- <div class="content">
      <h2>Please submit your Day in the Life information to be added to our cross collaboration team.</h2>
      <p>Submit an image of yourself, your job title and a description of your role.</p>
      <p>Please also submit a detailed example of a day in your work life, as well as a video (if able).</p>
      <form action="upload.php" method="post" enctype="multipart/form-data"> -->
        <!-- Select an item to upload: -->
        <!-- <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form> -->

    <!-- </div> -->

    <div class="content">
      <h2>T.E.A.M.</h2>
        <button class="accordion">T - rust</button>
        <div class="panel">
          <p>The single most important element in establishing the success or failure of a shared effort. The fundamental belief that every member of the team has the best interests of the team, the goal the companies involved at heart. I believe you. I believe in you. I believe you have the best interests of the project/partnership in your heart. I believe you trust me. I believe we can be more successful together than alone. I understand what success looks like for you in this project; and you understand what success looks like for me. We agree to succeed or fail together.</p>
        </div>

        <button class="accordion">E - mpathy</button>
        <div class="panel">
          <p>Respecting one another is at the core of appreciating one another's differences. Truly internalizing and recognizing the unique qualifies of each individual are paramount to communication, role clarity, and decision making. Everyone has something unique and special to contribute. The old adage “Be Kind, for everyone you meet is fighting a battle you can't see,” engenders awareness and flexibility that accounts for the influences external to the business at hand.</p>
        </div>

        <button class="accordion">A - ction</button>
        <div class="panel">
          <p>In 1965 Bruce Tuckman famously developed his stages of group development, forming — storming — norming — performing. Its has become the time honored and proven way to think about the development of teams. Based on experience its often at driving specific actions and a bias for action (or lack therein) where teams sometimes begin to lose momentum or fragment. Action and accountability are intrinsically connected here. Being clear on not just the action, the owner, the date and the deliverable. Clear is Kind. My good friend Vetina emphasizes its not enough to know who is in the team or project, but distinguishing between who is a player on the field versus someone sitting in the stands eating popcorn and commentating.</p>
        </div>

        <button class="accordion">M - easurement</button>
        <div class="panel">
          <p>Too often, we spend so much time on the end goals, we forget to focus on what Scott Belsky calls “the messy middle.” This requires very clear scope, sizing and clarity on timebound measures. My mentor Bob has a phrase I love when asking about projects, “is it bigger than a breadbox or smaller than a garage and can you describe the dimensions.” Without meaningful interim scope and goals, dates, KPIs, metrics, its easy for teams to lose sight of the path to the long term goal. Scorecards or KPI dashboards are great ways to keep this in perspective. But sometimes the numerical representation isn't sufficient to show the progress; especially in the early stages of team building. Specific methods and decision deltas may vary, but the intent remains the same — track, monitor, and course correct across mid-project milestones. “Did we meet with Bob by Tuesday the 12th.'Did Sally complete the financial modeling by October 3rd. 'Did we have the event in Chicago in March as planned.”</p>
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

      var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function() {
					/* Toggle between adding and removing the "active" class,
					to highlight the button that controls the panel */
					this.classList.toggle("active");

					/* Toggle between hiding and showing the active panel */
					var panel = this.nextElementSibling;
					if (panel.style.display === "block") {
						panel.style.display = "none";
					} else {
						panel.style.display = "block";
					}
				});
			}
		</script>
	</body>
</html>