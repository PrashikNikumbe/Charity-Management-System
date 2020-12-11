<?php

if (isset($_POST['submit'])) {
    include('dbcon.php'); 
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $contribution = $_POST['contribution'];
    $expectation = $_POST['expectation'];
    $workingdays = implode(',',$_POST['ch']);



    $sql = "INSERT INTO `volunteer` (`FirstName`,`LastName`,`Email`,`Phno`,`Address`,`City`,`Gender`,`Age`,`Contribution`,`Expectation`,`WorkingDays`, `DateTime`) VALUES ('$fn','$ln','$email','$phno','$address','$city','$gender','$age','$contribution','$expectation','$workingdays',current_timestamp());";
   

    if($con->query($sql) == true){
        echo '<script type="text/javascript">alert("Thank you for Registration")</script>';
    }
    else{
        //echo "ERROR : $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volunteer</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/events.js?<?php echo time();?>"></script>

</head>
<body id='volunteerbody'>
    <header>
        <img src="../images/logo.png">
        <h1>Anonymous Hope</h1>


        <nav>
            <a href="index.php" >HOME</a>
            <a href="aboutus.php" >ABOUT US</a>
            <a href="donatenow.php" >DONATE NOW</a>
            <a href="user.php" id="in">LOGIN</a>
            <a href="logout.php" id="out">LOGOUT</a>
        </nav>
 <?php
session_start();
if(isset($_SESSION['username'])){
    echo '<script type="text/javascript">
    log();
    </script>';
}
else{
    echo '<script type="text/javascript">alert("LOGIN FIRST");
    location="user.php";</script>';
}
?>

    </header>
        <p >Hello <?php echo $_SESSION['username'];  ?> you are just one click away from volunteering for Anonymous Hope charity.Just fill the below form
        and join us for helping others.
        </p>
    <div class="volunteerbox">
        <h1>Volunteer Registration</h1><br>
        <form action=join.php method="post" onsubmit="return validate1()">
        <label for="">First Name<span>*</span></label><br>
        <input type="text" name="fn" id="" placeholder="First name" required><br><br>
        <label for="">Last Name<span>*</span></label><br>
        <input type="text" name="ln" id="" placeholder="Last name" required><br><br>
        <label for="">E-mail<span>*</span></label><br>
        <input type="email" name="email" id="" placeholder="e-mail" required><br><br>
        <label for="">Phone Number<span>*</span></label><br>
        <input type="tel" name="phno" id="" placeholder="ph. number" required><br><br>

        Address<br>
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
        <input type="radio" name="gender"  value="Male" required>
        <label for="Male">Male</label>
        <input type="radio" name="gender"  value="Female">
        <label for="Female">Female</label>
        <input type="radio" name="gender"  value="Other">
        <label for="Other">Other</label><br><br>

        <label for="Age">Age<span>*</span></label>
        <input type="number" name="age" id="Age" ><br><br>

        
        <label for="">Contribution in any organization:</label><br>
        <textarea name="contribution" id="" cols="40" rows="5" placeholder="type here "></textarea><br><br>

        
        <label for="">Which position are you expecting?</label><br>
        <textarea name="expectation" id="" cols="40" rows="2" placeholder="type here "></textarea><br><br>

        
        <label for="">Choose Working Days<span>*</span></label><br>
        <input type="checkbox" name="ch[]" id="Mon" value="Monday"  >
        <label for="Mon">Monday</label>
        <input type="checkbox" name="ch[]" id="Tue" value="Tuesday" >
        <label for="Tue">Tuesday</label>
        <input type="checkbox" name="ch[]" id="Wed" value="Wednesday" >
        <label for="Wed">Wednesday</label><br>
        <input type="checkbox" name="ch[]" id="Thu" value="Thursday" >
        <label for="Thu">Thursday</label>
        <input type="checkbox" name="ch[]" id="Fri" value="Friday" >
        <label for="Fri">Friday</label>
        <input type="checkbox" name="ch[]" id="Sat" value="Saturday" >
        <label for="Sat">Saturday</label><br>
        <input type="checkbox" name="ch[]" id="Sun" value="Sunday" >
        <label for="Sun">Sunday</label><br>
        <br><br>
        <input name="submit" type="submit" value="Submit">
    </form>
    </div>
    <footer>Follow us on <a href=""><i class="fa fa-2x fa-instagram"></i></a> <a href=""><i class="fa fa-2x fa-facebook"></i></a> <a href=""><i class="fa fa-2x fa-twitter"></i></a><br>
     </br>Contact us on anonymoushope@gmail.com
     <br> &copy;Copyright 2020 Anonymous Hope.All Right Reserved.
     <br>This website is developed by SPY. 
    </footer>
</body>

</html>
