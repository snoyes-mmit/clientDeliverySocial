<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}
?>

<?php
// Database connection
$host = 'localhost';
$dbname = 'phplogin';
$username = 'root';
$password = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Database connection failed: " . $e->getMessage();
}

// Handle new post submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["username"]) && !empty($_POST["content"])) {
    // New post
    $username = htmlspecialchars($_POST["username"]);
    $content = htmlspecialchars($_POST["content"]);
    $stmt = $pdo->prepare("INSERT INTO posts (username, content) VALUES (:username, :content)");
    $stmt->execute(['username' => $username, 'content' => $content]);
    header("Location: #");
    exit;
  } elseif (isset($_POST['like_post'])) {
    // Like for a post
    $postId = (int)$_POST['post_id'];
    $stmt = $pdo->prepare("UPDATE posts SET likes = likes + 1 WHERE id = :id");
    $stmt->execute(['id' => $postId]);
    header("Location: #");
    exit;
  } elseif (isset($_POST['reply']) && !empty($_POST['reply_content']) && !empty($_POST['reply_username'])) {
    // New reply
    $postId = (int)$_POST['post_id'];
    $replyUsername = htmlspecialchars($_POST['reply_username']);
    $replyContent = htmlspecialchars($_POST['reply_content']);
    $stmt = $pdo->prepare("INSERT INTO replies (post_id, username, content) VALUES (:post_id, :username, :content)");
    $stmt->execute(['post_id' => $postId, 'username' => $replyUsername, 'content' => $replyContent]);
    header("Location: #");
    exit;
  } elseif (isset($_POST['like_reply'])) {
    // Like for a reply
    $replyId = (int)$_POST['reply_id'];
    $stmt = $pdo->prepare("UPDATE replies SET likes = likes + 1 WHERE id = :id");
    $stmt->execute(['id' => $replyId]);
    header("Location: #");
    exit;
  }
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
			.container {
				position: relative;
				width: 60%;
			}
      .date-span {
        font-size: 9px;
      }
      .post-wrapper {
        border: 1px solid grey;
        width: 50%;
        margin: 0 auto;
        padding: 10px;
        border-radius: 8px;
        background-color: #ffffff;
      }
      .post-name {
        font-weight: bold;
      }
      .post-comment {
        font-weight: normal;
        margin: 0 0 5px 10px;
      }
		</style>
	</head>
	<body class="loggedin">

		<div class="topnav desktop-topnav" id="myTopnav">
			<img src="../assets/images/cds-logo.png" alt="CDS Logo" style="width: 38px; height: 38px; margin: 10px 10px;">
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
			<!-- <a href="profile.php"><i class="fas fa-user-circle"></i></a> -->
			<!-- <a href="games.php">Games</a> -->
			<a href="dayInTheLife.php">Mentor Program</a>
			<a href="newsletter.php">Newsletter</a>
      <a href="home.php">Home</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>

    <div class="content">
      <div class="container">
        <h2 id="post-loc">Shout It Out</h2>
        <hr style="margin-bottom: 20px;">
        <!-- Form to submit new post -->
        <form method="post" action="" style="width: 40%; margin: 0 auto 20px;">
          <input type="text" name="username" placeholder="Your name" required><br><br>
          <textarea name="content" placeholder="Share your thoughts..." required></textarea><br><br>
          <button type="submit" class="spotlight-btn" style="margin-left: 10px;">Post</button>
        </form>
        <hr>
        <!-- Display posts and replies -->
        <h2>Posts:</h2>
        <div class="post-wrapper">
          <?php
            $stmt = $pdo->query("SELECT * FROM posts ORDER BY post_date DESC");
            while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo "<p><span class='post-name'><strong>" . htmlspecialchars($post['username']) . "</strong></span> <br>";
              echo  "<span class='post-comment'>" . htmlspecialchars($post['content']) . "</span><br> <span class='date-span'>(" . $post['post_date'] . ")</span></p>";
              // Like button for post
              echo "<form method='post' action='' class='post-like-btn' style='text-align: center;' id='like-loc'>
                      <input type='hidden' name='post_id' value='" . $post['id'] . "'>
                      <button type='submit' name='like_post' class='spotlight-btn' style='width: 150px; margin-bottom: 20px;'>Like (" . $post['likes'] . ")</button>
                    </form>
                    <hr>";
          ?>
          <?php
            // Display replies
            echo "<div style='margin-left:20px;'>";
            $replyStmt = $pdo->prepare("SELECT * FROM replies WHERE post_id = :post_id ORDER BY reply_date ASC");
            $replyStmt->execute(['post_id' => $post['id']]);
            while ($reply = $replyStmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<p><strong>" . htmlspecialchars($reply['username']) . "</strong> <br>";
                echo htmlspecialchars($reply['content']) . "<span class='date-span'>(" . $reply['reply_date'] . ")</span></p>";
                // Like button for reply
                echo "<form method='post' action='' style='margin-left:20px;'>
                        <input type='hidden' name='reply_id' value='" . $reply['id'] . "'>
                        <button type='submit' name='like_reply'>Like (" . $reply['likes'] . ")</button>
                      </form>";
            }
            echo "</div>";
          ?>
          <?php
            // Reply form
            echo "<form method='post' action='' style='margin-left:20px;width: 70%;'>
                    <input type='hidden' name='post_id' value='" . $post['id'] . "'>
                    <input type='text' name='reply_username' placeholder='Your name' required><br><br>
                    <textarea name='reply_content' placeholder='Write your reply here' required></textarea><br><br>
                    <button type='submit' name='reply'>Reply</button>
                  </form>";
              echo "<hr>";
            }
          ?>
        </div>
      </div>
		</div>
		<div class="footer-container" style="width: 100%;">
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

		</script>
		<!-- <script src="../assets/js/main.js"></script> -->
	</body>
</html>