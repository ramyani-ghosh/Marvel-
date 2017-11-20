<!DOCTYPE html>

<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: marvelhome2.php");
	}

?>
<html>

	<head>
		<title>Marvel homepage</title>
		<link rel="stylesheet" type="text/css" href="marvel.css">
		<link rel="shortcut icon" href="marvelogo.png" >
	</head>

	</body>

	<?php if (isset($_SESSION['success'])) : ?>
		<div class="error success" >
			<h3>
				<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>

	<!-- logged in user information -->
	<?php  if (isset($_SESSION['username'])) : ?>
		<div class="loggedin" style="top:5%;background-color:black;padding:5px;opacity:0.7;height:40px;width:18.5%;margin:20px;left:5%;">
			<p style="position:absolute;font-size:25px;color:white;font-family:'BEBAS___';opacity:0.9;margin:5px; " class="username">
				<?php echo $_SESSION['username']; ?></p>
				<img style= "width:46px;height:46px;position:relative;left:85%;" class= "usericon" src="usericon.png" alt="username"/>

	  </div>

		<p class="logout"><a style="color:white;font-size:25px;left:25px;font-family:'BEBAS___';" href="marvelhome.php?logout='1'" >Logout</a> </p>
	<?php endif ?>





		<div class="background">
			<div class="slides">
				<img class= "b1 fade" src="img4.jpg" alt="Guardians of the galaxy">
				<img class= "b1 fade" src="img1.jpg" alt="marvel heroes">
			<img class= "b1 fade" src="img6.png" alt="ironman">
			<img class="b1 fade" src="img2.jpg" alt="captain shield">
			<img class= "b1 fade" src="img5.jpg" alt="Doctor Strange">
			<img class="b1 fade" src="img3.jpg" alt="The Avengers">
				<img class="b1 fade" src="img7.png" alt="Thor">

		</div>

		<script src="slideshow.js">	</script>

			<img class= "logo" src="marvelogo.png" alt="marvel">
			<p class="heading"><b>Welcome to the Marvel<sup style="font-size:16px;padding-bottom:2px;">TM</sup> Universe.Your one stop for<br>all your favourite superhero merch and wiki.</b></p>

			<div class="share"  >
						<a href="https://www.instagram.com/"  target="_blank"><img src="share/insta.png" alt="insta"></a>
						<a href="https://twitter.com/"  target="_blank"><img src="share/twitter.png" alt="twitter"></a>
						<a href = "https://www.reddit.com/" target="_blank"><img src="share/reddit.png" alt="reddit"></a>
						<a href="https://www.facebook.com/"  target="_blank"><img src="share/fb.png" alt="fb"></a>
			</div>
			<div class="menuicon">&#9776;</div>
			<div class="overlay">
				<div class="menu">
					<h1 style="font-size:60px;">MENU</h1>
					<a  href="wiki.php">Wiki</a><br><br>
					<a  href="store.php">Store</a><br><br>
					<a  href="about.html">About</a>

				</div>
			</div>

		</div>

	</body>

</html>
