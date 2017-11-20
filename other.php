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
		<title>Other Merch</title>
		<link rel="stylesheet" type="text/css" href="store.css">
		<link rel="shortcut icon" href="marvelogo.png" >
		<script src="store.js"> </script>
	</head>


	</body>
	<a href="marvelhome.php"><img src="home.png"class="home" src="home.png" ></img></a>
	<a href="addtocart.php"><img src="cart.png"class="cart"  ></img></a>



		<div id="header">
			<ul>
  			<li><a class="active" href="store.php">STORE</a></li>
				<li><a class="active" href="tshirts.php">T-SHIRTS</a></li>
				<!--<li><a class="active" href="stationery.html">STATIONERY</a></li>-->
				<li><a class="active" href="other.php">OTHER</a></li>
			</ul>
		</div>

		<div id="offers">
			<h1>Coming soon...</h1>
			<p id="text">Special line of comic books.</p>
			<img class="magimg" src="comics.jpg" alt="Marvel comic books"></img>
		</div>
		<center><hr id="line"/>
		</center>
		<pre id="featured">OFFICIAL MERCHANDISE</pre>


	<div id='prod' style="opacity:0;z-index:-1">
			<div id="prodimg"><img id='prodpic' src="" alt="merch" /></div>
			<div id='close' onclick="closeproduct()">X</div>

		<div id='desc'>

			<p id='prodtitle'>TITLE</p>
			<p id='prodabout'>Description</p>
			<p id='prodprice'>PRICE</p>

			<div id='size'>SIZE:
			<select name="size">
				<option value="XS">XS</option>
				<option value="S">S</option>
				<option value="M">M</option>
				<option value="L">L</option>
				<option value="XL">XL</option>
			</select>
			<br>

			</div>
			<a href="bill.html"><button id="confirm" >Proceed to checkout</button></a>
		</div>

	</div>

	<div id="items">

		<div class="floating-box"  onclick="productinfo2(1)"><img id="image" src="Merch/nb4.jpg"  alt="merch"/>
				<p id="title">Marvel comics notebook, single-ruled</p> <p id="price">Rs.199</p>
				<p id="about" style="opacity:0;position:absolute;top:18%;left:7%">A-4 Sized, Grey And White Spiral Hard Bound</p></div>

		<div class="floating-box" onclick="productinfo2(3)"><img id="image" src="Merch/spidey_bag.jpg" alt="merch"/>
				<p id="title">Spider-man school backpack</p> <p id="price">Rs.619</p>
				<p id="about" style="opacity:0;position:absolute;">Synthetic,Water Proof,Large Backpack With Multiple Pockets</p></div>


		<div class="floating-box" onclick="productinfo2(5)"><img id="image" src="Merch/avengers_case.jpg" alt="merch"/>
						<p id="title">Avengers superheroes phone case</p> <p id="price">Rs.599</p>
						<p id="about" style="opacity:0;position:absolute;;">Cool 3D Printed Soft Poly I-Phone Cover</p></div>


		<div class="floating-box" onclick="productinfo2(7)"><img id="image" src="Merch/ironman_kr.jpg" alt="merch"/>
					<p id="title">Iron man key chain</p> <p id="price">Rs.304</p>
					<p id="about" style="opacity:0;position:absolute;;">Stainless Steel,Metallic Finshed KeyChains,Available In Three Colors</p></div>


		<div class="floating-box" onclick="productinfo2(9)"><img id="image" src="Merch/cap_pouch.jpg" alt="merch"/>
						<p id="title">Captain America pencil pouch</p> <p id="price">Rs.299</p>
						<p id="about" style="opacity:0;position:absolute;;">Dark Navy Blue Water Proof Pouch</p></div>


		<div class="floating-box" onclick="productinfo2(11)"><img id="image" src="Merch/bp_toy.jpg" alt="merch"/>
								<p id="title">Black Panther plush toy</p> <p id="price">Rs.499</p>
								<p id="about" style="opacity:0;position:absolute;;">Marvel Black Panther,Soft Toy,Height 17 Inches </p></div>


		<div class="floating-box" onclick="productinfo2(13)"><img id="image" src="Merch/shield_mug.jpg" alt="merch"/>
								<p id="title">S.H.I.E.L.D mug</p> <p id="price">Rs.369</p>
							<p id="about" style="opacity:0;position:absolute;;">Black And Golden,Steel Metallic Finished Tall Jug, With Lid And Silver Spoon </p></div>



		</div>

</body>

</html>
