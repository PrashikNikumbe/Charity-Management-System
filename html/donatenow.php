<?php
if (isset($_POST['submit'])) {
    
    $server = "localhost:3307";
    $username = "root";
    $password = '';

    $con =mysqli_connect($server,$username,$password);

    if(!$con){
        //die("Connection failure" . mysqli_connect_error());
    }
    else{
        //echo "successfuly";
    }
 
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];


    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $workingdays = $_POST['workingdays'];
    $des = $_POST['des'];

    $fname = $_FILES['file']['name'];
    $tname = $_FILES['file']['tmp_name'];
    $fpath ="../uploaded_docs/".$fname;
    if(move_uploaded_file($tname,$fpath)){
        //echo "uploaded docs";
    }

    $sql = "INSERT INTO `anonymous_hope`.`donate` (`FirstName`,`LastName`,`Email`,`Phno`,`Address`,`City`,`Gender`,`Age`,`Item`,`Docs_title`,`Docs_path`,`Quantity`, `Describe_item`,`Working_Days`) VALUES ('$fn','$ln','$email','$phno','$address','$city','$gender','$age','$item','$fname','$fpath','$quantity','$des','$workingdays')";

    if($con->query($sql) == true){
        echo '<script type="text/javascript">alert("Thank you for Donation")</script>';
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donate</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/events.js"></script>

</head>
<body id="donatebody">
    <header>
        <img src="../images/logo.png">
        <h1>Anonymous Hope</h1>


        <nav>
            <a href="index.php" >HOME</a>
            <a href="aboutus.php" >ABOUT US</a>
            <a href="donatenow.php" class="current">DONATE NOW</a>
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
else{
    echo '<script type="text/javascript">alert("LOGIN FIRST");
    location="user.php";</script>';
}
?>

    </header>
    <div id="donate">
	<h1>Things that you can Donate</h1>
	<p id="info">Hello <?php echo $_SESSION['username'];  ?>, you can donate items like toys that unused to you or your childrens,school bags,
	dress as many people buy new clothes their old clothes can easy to be donate and old
	shoes can also be donate.</p>
		<p id="info1" >Click to donate</p>
		<p id="info2" >Click to donate</p>
		<p id="info3" >Click to donate</p>
		<p id="info4" >Click to donate</p>

	    <img src="../images/toy7.jpg" class="things" alt="Image of Toy" onmouseover="TextShow(this)" onmouseout="TextHide(this)" onclick="ShowForm(this)">
	    <p class="itemsname">Toys</p>
        <img src="../images/bag4.jpg" class="things" alt="Image of Bag" onmouseover="TextShow(this)" onmouseout="TextHide(this)" onclick="ShowForm(this)">
        <p class="itemsname">Bags</p>
        <img src="../images/clothes3.jpg" class="things" alt="Image of dress" onmouseover="TextShow(this)" onmouseout="TextHide(this)" onclick="ShowForm(this)">
        <p class="itemsname">Dress</p>
        <img src="../images/shoes9.jpg" class="things" alt="Image of shoes" onmouseover="TextShow(this)"onmouseout="TextHide(this)" onclick="ShowForm(this)">
        <p class="itemsname">Shoes</p>
    </div>
    
    <div id="donateform">
        <p >Hello <?php echo $_SESSION['username'];  ?> you are just one click away from donating the items  for Anonymous Hope charity.Just fill the below form and make the items ready we will pickup it soon.
        </p>
        <div class="volunteerbox">
    	<h1>Donation Form</h1><br>
        <form method="post" enctype="multipart/form-data">
        <label for="">First Name<span>*</span></label><br>
        <input type="text" name="fn" id="" placeholder="First name" required><br><br>
        <label for="">Last Name<span>*</span></label><br>
        <input type="text" name="ln" id="" placeholder="Last name" required><br><br>
        <label for="">E-mail<span>*</span></label><br>
        <input type="email" name="email" id="" placeholder="e-mail" required><br><br>
        <label for="">Phone Number<span>*</span></label><br>
        <input type="tel" name="phno" id="" placeholder="ph. number" required><br><br>

        Address<span>*</span><br>
        <textarea name="address" id="" cols="40" rows="5" placeholder="type here"></textarea><br><br>
         
        <label for="City">City<span>*</span></label>
        <select name="city" id="City" required>
            <option value="Mumbai">Mumbai</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Pune">Pune</option>
            <option value="Banglore">Banglore</option>
            <option value="Latur">Latur</option>
            <option value="Nashik">Nashik</option>
        </select><br><br>

        
        <label for="">Select Gender<span>*</span></label>
        <label for="Male">Male</label>
        <input type="radio" name="gender" id="Male" value="Male" required>
        <label for="Female">Female</label>
        <input type="radio" name="gender" id="Female" value="Female">
        <label for="Other">Other</label>
        <input type="radio" name="gender" id="Other" value="Other"><br><br>

        <label for="Age">Age<span>*</span></label>
        <input type="number" name="age" id="Age" required ><br><br>

        
        <label for="">Select which item do you want to donate<span>*</span></label><br>
        <label for="Toys">Toys</label>
        <input type="radio" name="item" value="toys" required><br>
        <label for="Female">Bags</label>
        <input type="radio" name="item" value="bags"><br>
        <label for="Other">Dress</label>
        <input type="radio" name="item" value="dress"><br>
        <label for="Other">Shoes</label>
        <input type="radio" name="item" value="shoes"><br><br>
        <label for="Img" >Upload an image of an item:<span>*</span></label><br><br>
        <label>For multiple images, please upload a pdf of it.</label><br><br>
        <input type="file"  name="file" ><br><br>

        <label for="quantity">How much quantity do you want to donate?<span>*</span></label>
        <input type="number" name="quantity" required><br><br>      

        <label for="">Please describe the items that you want to donate like color,size,condition etc.<span>*</span></label><br>
        <textarea name="des" id="" cols="40" rows="5" placeholder="type here" required></textarea><br><br>

        
        <label for="">Do you want us to visit you during working days?</label>
        <label for="">Yes</label>
        <input type="radio" name="workingdays" value="Yes">
        <label for="">No</label>
        <input type="radio" name="workingdays" value="No" ><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    </div>
    </div>
    <footer>Follow us on <a href=""><i class="fa fa-2x fa-instagram"></i></a> <a href=""><i class="fa fa-2x fa-facebook"></i></a> <a href=""><i class="fa fa-2x fa-twitter"></i></a><br>
     </br>Contact us on anonymoushope@gmail.com
     <br> &copy;Copyright 2020 Anonymous Hope.All Right Reserved.
     <br>This website is developed by SPY. 
    </footer>
</body>
</html>