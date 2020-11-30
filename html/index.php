
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time();?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/events.js?<?php echo time();?>"></script>
</head>
<body>
	<header>
		<img src="../images/logo.png">
		<h1>Anonymous Hope</h1>
		<nav>
			<a href="index.php" class="current">HOME</a>
			<a href="aboutus.php" >ABOUT US</a>
			<a href="donatenow.php" >DONATE NOW</a>
			<a href="user.php" id="in">LOGIN</a>
			<a href="logout.php" id="out">LOGOUT</a>
		</nav>
 <?php

session_start();
include('dbcon.php');
if(isset($_SESSION['username'])){
	echo '<script type="text/javascript">
	function log(){
		document.getElementById("in").style.display="none";
		document.getElementById("out").style.display="inline";
	}
	log();
	</script>';
}
?>

	</header>

	<article class="first">
		<blockquote>"The things we hope for lead us to faith,while the things we hope in lead us to charity"</blockquote>

		<a href="join.php">JOIN US</a>
	</article>

	<article>
		<h1>Welcome to Anonymous Hope </h1>
		<p>Hello Donar welcome to Anonymous Hope Charity website.A place where you can donate items and bring a smile on 
		on someone face.The items may not be useful to you now,may be used up or fulfill your needs but i'm sure of one thing that it
		will not be waste by donating us, it will definitely get to the needy person.
		</p>
		<img src="../images/teddybear.jpg">

	</article>

	<footer>Follow us on <a href=""><i class="fa fa-2x fa-instagram"></i></a> <a href=""><i class="fa fa-2x fa-facebook"></i></a> <a href=""><i class="fa fa-2x fa-twitter"></i></a><br>
	 </br>Contact us on anonymoushope@gmail.com
	 <br> &copy;Copyright 2020 Anonymous Hope.All Right Reserved.
	 <br>This website is developed by SPY. 
	</footer>

</body>
</html>


