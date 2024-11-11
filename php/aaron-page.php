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
			<h2>Day in the Dev Life</h2>
      <video width="600" height="400" autoplay muted id="vid" style="margin-left: 200px;">
				<source src="../assets/video/HTML-Timelapse.mp4" type="video/mp4">
        Your browser does not support this video.
      </video>
			<h3>Gathering Design Assets:</h3>
      <p style="margin-bottom: 10px;">Start by collecting all necessary assets from the PDFs and Figma files, including images, icons, typography specifications, color palettes, and layout guidelines. This step ensures that you have all elements needed for the implementation.</p>
			<p style="margin-bottom: 10px;">Create a clean and semantic HTML structure that follows best practices. Use appropriate HTML tags to reflect the document's hierarchy and meaning. For example:</p>
			<div class="code-block">
				<code>
					<p>&lt;!DOCTYPE html&gt;</p>
						<p>&nbsp; &nbsp; &lt;html lang="en"&gt;</p>
						<p>&nbsp; &nbsp; &lt;head&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;meta charset="UTF-8"&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;link rel="stylesheet" href="styles.css"&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;title&gt;Website Template&lt;/title&gt;</p>
						<p>&nbsp; &nbsp; &lt;/head&gt;</p>
						<p>&nbsp; &nbsp; &lt;body&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;header&gt;</p>
								<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h1&gt;Website Title&lt;/h1&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/header&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;main&gt;</p>
								<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;section class="hero"&gt;</p>
									<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h2&gt;Hero Section Title&lt;/h2&gt;</p>
									<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;Description or tagline goes here.&lt;/p&gt;</p>
								<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/section&gt;</p>
								<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;section class="content"&gt;</p>
									<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;!-- Additional content sections --&gt;</p>
								<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/section&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/main&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &lt;footer&gt;</p>
								<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;© 2024 Company Name&lt;/p&gt;</p>
							<p>&nbsp; &nbsp; &nbsp; &lt;/footer&gt;</p>
						<p>&lt;/body&gt;</p>
					<p>&lt;/html&gt;</p>
				</code>
			</div>

			<h3>Styling with CSS:</h3>
			<p>Use CSS to replicate the visual aspects of the design. This includes.</p>
			<p style="margin-bottom: 20px;">Size and Placement:</p>
			<div class="code-block">
				<code>
					<p>body {</p>
					<p>&nbsp; &nbsp; margin: 0;</p>
					<p>&nbsp; &nbsp; font-family: 'Arial', sans-serif;</p>
					<p style="margin-bottom: 10px">}</p>
					<p>.hero {</p>
					<p>&nbsp; &nbsp; width: 100%;</p>
					<p>&nbsp; &nbsp; height: 500px; /* Example height */</p>
					<p>&nbsp; &nbsp; background-color: #f0f0f0; /* Background color from design */</p>
					<p>&nbsp; &nbsp; display: flex;</p>
					<p>&nbsp; &nbsp; align-items: center;</p>
					<p>&nbsp; &nbsp; justify-content: center;</p>
					<p style="margin-bottom: 10px">}</p>
					<p>h1, h2 {</p>
					<p>&nbsp; &nbsp; color: #333; /* Text color from design */</p>
					<p>&nbsp; &nbsp; margin: 0;</p>
					<p>}</p>
				</code>
			</div>
			<h3>Responsive Design: Use media queries to adjust styles for different screen sizes.</h3>
			<div class="code-block">
				<code>
					<p>@media (max-width: 768px) {</p>
					<p>&nbsp; &nbsp; .hero {</p>
					<p>&nbsp; &nbsp; &nbsp; &nbsp; height: 300px; /* Adjust height for mobile */</p>
					<p>&nbsp; &nbsp; }</p>
					<p>}</p>
				</code>
			</div>
			<h3>Define color variables in your CSS for easy maintenance:</h3>
			<div class="code-block">
				<code>
					<p>:root {</p>
					<p>&nbsp; &nbsp; --primary-color: #3498db; /* Example primary color */</p>
					<p>&nbsp; &nbsp; --secondary-color: #2ecc71; /* Example secondary color */</p>
					<p style="margin-bottom: 10px">}</p>
					<p>.content {</p>
					<p>&nbsp; &nbsp; color: var(--primary-color);</p>
					<p>&nbsp; &nbsp; background-color: var(--secondary-color);</p>
					<p style="margin-bottom: 10px">}</p>
				</code>
			</div>

			<p>Set fonts based on the design specifications, potentially importing custom fonts from services like Google Fonts.</p>
			<p>Incorporating Images and Icons:</p>
			<p>Use appropriate <img> tags for images and SVGs for icons. Ensure proper alt text is included for accessibility.</p>

			<h3>Adding Animations:</h3>
			<p style="margin-bottom: 10px">CSS transitions and animations can enhance the user experience. For example:</p>

			<div class="code-block">
				<code>
					<p>.button {</p>
					<p>&nbsp; &nbsp; background-color: var(--primary-color);</p>
					<p>&nbsp; &nbsp; color: white;</p>
					<p>&nbsp; &nbsp; padding: 10px 20px;</p>
					<p>&nbsp; &nbsp; border: none;</p>
					<p>&nbsp; &nbsp; border-radius: 5px;</p>
					<p>&nbsp; &nbsp; transition: background-color 0.3s ease;</p>
					<p style="margin-bottom: 10px">}</p>
					<p>.button:hover {</p>
					<p>&nbsp; &nbsp; background-color: var(--secondary-color);</p>
					<p>}</p>
				</code>
			</div>

      <h3>Testing and Iteration:</h3>

      <p>After implementing the templates, test them across different browsers and devices to ensure consistent rendering. Make adjustments as needed to resolve any discrepancies between the design and the live site.</p>

			<h3>Final Review:</h3>

			<p>Conduct a final review against the original PDFs and Figma files to ensure all elements have been accurately recreated. This includes verifying sizes, colors, placements, and the functionality of any interactive elements.</p>
			<p>By following this structured approach, you can effectively develop HTML and CSS templates that closely match the original designs from PDFs and Figma files. This process not only enhances your coding skills but also ensures a high-quality, visually appealing user experience that meets design specifications.</p>

		 	<a href="carlie-page.php">
				<button class="spotlight-btn" style="width: 250px; margin-bottom: 40px;">Follow the Development through QA</button>
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
			document.getElementById('dev-vid').play();
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