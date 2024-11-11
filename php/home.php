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
			.wordOfTheDay {
				text-align: center !important;
				width: 250px;
				margin: 0 auto;
			}
			#generateWord {
				margin-top: 20px;
			}
			.the-funatics {
				text-align: center;
			}
			.the-funatics img {
				border-radius: 10px;
				margin-top: 10px;
			}
			.mySlides img {
				min-width: 40%;
				object-fit: cover;
				vertical-align: bottom;
				margin: 0 auto;
				border-radius: 10px;
			}
			.container {
				position: relative;
				width: 60%;
			}
			.mySlides {
				display: none;
			}
			.cursor {
				cursor: pointer;
			}
			.prev,
			.next {
				cursor: pointer;
				position: absolute;
				top: 40%;
				width: auto;
				padding: 16px;
				margin-top: -50px;
				color: white;
				font-weight: bold;
				font-size: 20px;
				border-radius: 0 3px 3px 0;
				user-select: none;
				-webkit-user-select: none;
			}
			.next {
				right: 0;
				border-radius: 3px 0 0 3px;
			}
			.prev:hover,
			.next:hover {
				background-color: rgba(0, 0, 0, 0.8);
			}
			.numbertext {
				color: #f2f2f2;
				font-size: 12px;
				padding: 8px 12px;
				position: absolute;
				top: 0;
			}
			.caption-container {
				text-align: center;
				/* background-color: #D3D3D3; */
				padding: 2px 16px;
				color: white;
			}
			.caption-container #caption .mentor-program-title {
				color: var(--primary-color);
			}
			.caption-container #caption .mentor-program-graph {
				color: #000;
			}
			.row:after {
				content: "";
				display: table;
				clear: both;
			}
			.column {
				float: left;
				width: 25%;
			}
			.demo {
				opacity: 0.6;
			}
			.active,
			.demo:hover {
				opacity: 1;
			}
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
			<a href="newsletter.php">Newsletter</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>

		<div class="content">
			<h2>What's New!</h2>
			<div class="container">
				<div class="mySlides">
					<h2>Mentor Program</h2>
					<a href="dayInTheLife.php"><img src="../assets/images/mentor-program.jpg" style="width: 100%;"></a>
				</div>
				<div class="mySlides">
					<h2>Team News & Updates</h2>
					<a href="newsletter.php"><img src="../assets/images/team-news-and-updates.jpg" style="width:100%"></a>
				</div>
				<div class="mySlides">
					<h2>Shoutout Wall</h2>
					<a href="shout-out.php"><img src="../assets/images/shout-outs.jpg" style="width:100%"></a>
				</div>
				<div class="mySlides">
					<h2>Take a Break</h2>
					<a href="../assets/games/dr-mmit/index.html"><img src="../assets/images/take-a-break.jpg" style="width:100%"></a>
				</div>
				<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				<div class="caption-container">
					<p id="caption"></p>
				</div>
				<div class="row">
					<div class="column">
						<img class="demo cursor" src="../assets/images/mentor-program.jpg" style="width:100%" onclick="currentSlide(1)" alt="<span class='mentor-program-graph'>Get to know your colleagues! Our new collaboration page lets you explore team members' roles and responsibilities, and it also offers the chance to sign up for training in other areas.</span>">
					</div>
					<div class="column">
						<img class="demo cursor" src="../assets/images/team-news-and-updates.jpg" style="width:100%" onclick="currentSlide(2)" alt="<span class='mentor-program-graph'>Stay in the loop with our team newsletter. Get the latest updates on company news, upcoming events, and special projects. We'll also feature team achievements, so make sure to check back regularly.</span>">
					</div>
					<div class="column">
						<img class="demo cursor" src="../assets/images/shout-outs.jpg" style="width:100%" onclick="currentSlide(3)" alt="<span class='mentor-program-graph'>Give a shoutout to a coworker who's gone above and beyond! This is a space for positive encouragement and recognition. Whether someone helped you on a project or brought great energy to a meeting.</span>">
					</div>
					<div class="column">
						<img class="demo cursor" src="../assets/images/take-a-break.jpg" style="width:100%" onclick="currentSlide(4)" alt="<span class='mentor-program-graph'>Need a quick mental refresh? We've added a few games to help you unwind and recharge during the day. Take a break, have some fun, and come back to work with a clear mind.</span>">
					</div>
				</div>
			</div>
			<div class="grid">
				<div class="item front-page-item-one">
					<h2>Welcome to our new site!</h2>
					<p>We're excited to introduce you to our brand-new company site—a space designed for collaboration, connection, and a little bit of fun. Whether you're here to catch up on the latest team news, explore cross-training opportunities, or just take a quick break, we've got something for everyone!</p>
					<div class="the-funatics">
						<img src="../assets/images/Funatics Team Member.png" alt="The Funatics Logo" style="width: 40%; padding: 40px 0 40px;">	
					</div>
					<div class="wordOfTheDay">
						<button id="generateButton" class="spotlight-btn">Word of the Day!</button>
						<p id="generateWord"></p>
					</div>
				</div>
				<div class="item item-img">
					<h2>Day in the Life: Spotlight on Our Team Members</h2>
					<p>Ever wonder what a day looks like for your colleagues? In our Day in the Life section, we're highlighting team members as they showcase a typical day in their work life. From early morning meetings to project milestones, see how different roles contribute to our shared success.</p>
					<p style="padding: 20px 0;">This is your chance to gain insight into various departments, learn how others manage their daily tasks, and maybe even pick up a few tips for your own workflow. Each feature offers a unique glimpse into the diverse roles that make our company thrive.</p>
					<div class="img-wrap">
					    <img src="../assets/images/Day-in-the-life-intro.jpg" alt="Day in the Life Overview" style="width: 70%; margin: 0 auto; padding-bottom: 20px;">
					</div>
					<p>Stay tuned for new spotlights and get to know your coworkers on a whole new level!</p>
					<a href="dayInTheLife.php"><button class="spotlight-btn">Day In The Life</button></a>
				</div>
				<div class="item">
					<h2>Contribute to Our Site</h2>
					<p>Our site is designed to grow and evolve with input from the entire team, and we're always looking for fresh ideas to make it better!</p>
					<p style="margin-top: 10px;">Whether you have thoughts on new functionalities, ways to improve collaboration, or even fun games we can all enjoy together, we want to hear from you.</p>
					<p style="margin-top: 10px;">This is your platform, and your contributions can help shape the tools, resources, and experiences that make our workday more productive and enjoyable. Have a suggestion for a new feature? Want to collaborate on cross-team projects or training? Or maybe you've got a great idea for a game to help us all unwind? Every idea counts!</p>
					<button class="spotlight-btn"><a href="contribute-contact-us.php" style="color: #ffffff;">Send us your ideas!</a></button>
				</div>
				<div class="item front-page-final-item">
					<a href="newsletter.php" style="display: block;"><h2>Newsletter<br>and Updates</h2></a>
				</div>
				<div class="item item-img">
					<h3>Employee Spotlight: Celebrating Our Team's Achievements</h3>
					<div class="img-wrap">
					    <img src="../assets/images/breanna-headshot.jpg" alt="Breanna's Employee Spotlight Headshot" style="width: 70%; margin: 0 auto; padding-bottom: 20px;">
					</div>
					
					<p>Our Employee Spotlight section is dedicated to recognizing the outstanding contributions and accomplishments of our team members.</p>
					<p>This is a space to celebrate success stories, whether it's leading a critical project, mentoring colleagues, or bringing fresh ideas that drive the company forward. We're proud of the talent and hard work within our team, and this spotlight is our way of saying "thank you" for your exceptional efforts.</p>
					<a href="employee-spotlight.php"><button class="spotlight-btn">Spotlight</button></a>
				</div>
			</div>
			<h2>FAQ</h2>
			<button class="accordion">What is Cross Collaboration?</button>
			<div class="panel">
				<p>Cross Collaboration is When employees from different departments or teams work together to achieve a common goal. For example, QA team is maxed out and SLA's are rapidly approaching or an employee expresses interest in learning a new skill and wants to do more. Cross-team collaboration can have benefits like innovation and learning, as different perspectives can lead to more efficient solutions and help people understand how their work fits into the bigger picture.</p>
			</div>
			<button class="accordion">The Steps To Take</button>
			<div class="panel">
				<p>Identify a need for collaboration</p>
				<p>Example: QA is maxed out and SLA's are quickly approaching</p>
				<p>Contact your Manager</p>
				<p>Manager assesses the situation and informs other managers the need for support.</p>
				<p>Employees interested in helping will go to the CDS website and watch the videos and look through any supporting documentation.</p>
				<p>After the employee watches the videos and explores the documentation and agrees to help.</p>
				<p>The manager from the team they are interested in helping will have them shadow the team and arrange for them to get access to tools needed to do the job.</p>
			</div>
			<button class="accordion">What To Expect</button>
			<div class="panel">
				<p>Continued growth within the company.</p>
				<p>Cross Collaboration does NOT guarantee you direct compensation.</p>
				<p>The more skills in your tool belt makes you more of an asset to the company.</p>
				<p>Learning a new skill gives you more perspective with your current work.</p>
				<p>Your contributions to helping may result in efficiency improvements that the current team has not thought of.</p>
				<p>Improves your chances when applying for another internal position on our teams and insures a smooth transition.</p>
			</div>
		</div>
		<div class="footer-container">
			<div class="link-list">
				<div class="services">
					<h3>Services</h3>
					<a href="newsletter.php"><p>Newsletter</p></a>
					<a href="dayInTheLife.php"><p>Day In The Life</p></a>
					<a href="../assets/games/dr-mmit/index.html"><p>Dr. MMIT</p></a>
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

			// Define an array of words
			const words = ["One"];
			// Get a reference to the button element
			const generateButton = document.getElementById("generateButton");
			// Function to generate a random word
			function generateRandomWord() {
				const randomIndex = Math.floor(Math.random() * words.length);
				const randomWord = words[randomIndex];
				document.getElementById("generateWord").textContent = `Your Word of the Day: ${randomWord}`;
			}
			// Attach an event listener to the button
			generateButton.addEventListener("click", generateRandomWord);

			// Slideshow Gallery
			let slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				let i;
				let slides = document.getElementsByClassName("mySlides");
				let dots = document.getElementsByClassName("demo");
				let captionText = document.getElementById("caption");
				if (n > slides.length) {slideIndex = 1}
				if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";
				dots[slideIndex-1].className += " active";
				captionText.innerHTML = dots[slideIndex-1].alt;
			}
		</script>

		<!-- <script src="../assets/js/main.js"></script> -->
	</body>
</html>