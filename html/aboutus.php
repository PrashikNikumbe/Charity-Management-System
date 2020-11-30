<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time();?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id='aboutusbody'>
	<header>
		<img src="../images/logo.png">
		<h1>Anonymous Hope</h1>
		<nav>
			<a href="index.php" >HOME</a>
			<a href="aboutus.php" class="current">ABOUT US</a>
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
	<div class="aboutbox">
	<div>
		We are a non profit organisation belonging to anonymous hope charitable trust.These trust is giving hope to many children since 2005.
		we acts as a bridge between needy people and a donar,we ensures you that our each member works selfishlessly and takes fully responsibility that
		your donated items gets fully to the needed persons.
		<br>
		<hr>
		<details>
		<summary>Our Goals</summary>
		<p>Our main goal is to provide necessary items to many children as possible.The items that we collect from you is reached to children by
		conducting charaitabe events on timely basis.Many people volunteer in these events and we conduct sucessful events in previous year.   </p>	
		</details>
		<br>
		<details>
		<summary>How can you help us</summary>
		<p>You can help us in two ways by donating the necessary items and by volunteering the events.Both process is explained in detail below. </p>	
		</details>
		<br>
		<details>
		<summary>Donating Process</summary>
		<p>You can donate bags,shoes,toys and clothes.You just need to fill the <a href="donatenow.php">form</a> and uploading the photos of your items and within a
		week you can expect your volunteer member to your doorstep and collecting the items.We request you to put the all items in a cardboard box. </p>	
		</details>
		<br>
		<details>
		<summary>Volunteering Process</summary>
		<p>You can volunteer for the events that held in our trust by registering the volunteer <a href="join.php">form</a> and we will notify you when we conduct any events over email.After volunteering you will get anonymous hope merchandise and we sincere request from you that you will attend our events without any failure.
		you can choose any working days you like.
		 </p>	
		</details>
	</div>
	</div>
	<footer>Follow us on <a href=""><i class="fa fa-2x fa-instagram"></i></a> <a href=""><i class="fa fa-2x fa-facebook"></i></a> <a href=""><i class="fa fa-2x fa-twitter"></i></a><br>
	 </br>Contact us on anonymoushope@gmail.com
	 <br> &copy;Copyright 2020 Anonymous Hope.All Right Reserved.
	 <br>This website is developed by SPY. 
	</footer>
</body>
</html>