<?php
session_start();
 if(isset($_SESSION['username'])){
echo '<script >
location="index.php";</script>';

}
else{
include('dbcon.php');
if (isset($_POST['submit2'])) {
     
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from user where Email='$email'";
    $query = mysqli_query($con,$email_search);


    if(mysqli_num_rows($query)){
        echo '<script type="text/javascript">alert("Email is already registered,Please use different email.")</script>';

    }
    else{
        $sql = "INSERT INTO `user`(`Username`, `Email`, `Password`) VALUES ('$username','$email','$password');";
       
        if($con->query($sql) == true){
            $_SESSION['username'] = $username;
            echo '<script type="text/javascript">alert("Account Created Successfuly");
            location="index.php";</script>';
        }
        else{
            //echo "ERROR : $sql <br> $con->error";
        }
    }

    $con->close();
}
elseif (isset($_POST['submit1'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email_search = "select * from user where Email='$email'";
    $query = mysqli_query($con,$email_search);


    if(mysqli_num_rows($query)){
        $row = mysqli_fetch_assoc($query);
        $db_pass = $row['Password'];
        if ($db_pass==$password) {
            $_SESSION['username'] = $row['Username'];
            echo '<script type="text/javascript">alert("Login Successfuly");
            location="index.php";</script>';
        }
        else{
        echo '<script type="text/javascript">alert("Password is incorrect");</script>';
        }

    }
    else{
        echo '<script type="text/javascript">alert("Email is incorrect");</script>';
    }

    $con->close();
}
}
?>

<html>
<head>
<title>User Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/events.js"></script>
<body id='userbody'>
    <header>
        <img src="../images/logo.png">
        <h1>Anonymous Hope</h1>
        <nav>
            <a href="index.php" >HOME</a>
            <a href="aboutus.php" >ABOUT US</a>
            <a href="donatenow.php" >DONATE NOW</a>
            <a href="user.php" id="in" class="current">LOGIN</a>
            <a href="logout.php" id="out">LOGOUT</a>
        </nav>


    </header>
    <div class="loginbox">
        <img src="../images/avatar.png" class="avatar">

        <form id="userlogin" method="post">
            <h1>USER LOGIN</h1>
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit1" value="LOGIN">
            <p id="middle">OR</p><br>
            <input type="button" name="" value="Create an account" onclick="Show()">
            <a href="admin.php">Are you an Admin?</a><br>
        </form>
        <form id="usersignup" method="post">
            <h1>USER SIGNUP</h1>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit2" value="SIGNUP">
            <p id="middle">OR</p><br>
            <input type="button" name="" value="Already have an account" onclick="Hide()">
            <a href="admin.php">Are you an Admin?</a><br>
        </form> 
    </div>
</body>
</head>
</html>
