<?php
session_start();
 if(isset($_SESSION['username'])){
echo '<script >
location="index.php";</script>';

}
else{
include('dbcon.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email_search = "select * from admin where Email='$email'";
    $query = mysqli_query($con,$email_search);

    if(mysqli_num_rows($query)){
        $row = mysqli_fetch_assoc($query);
        $db_pass = $row['Password'];
        if ($db_pass==$password) {
            $_SESSION['username'] = $row['Username'];
            echo '<script type="text/javascript">alert("Login Successfuly");
            location="adminonly.php";</script>';
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
    <title>Admin Login </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<body id='adminbody'>
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
                <h1>ADMIN LOGIN</h1>
                <form method="post">
                    <p>Email</p>
                    <input type="text" name="email" placeholder="Enter Email">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password">
                    <input type="submit" name="submit" value="Login">
                    <a href="user.php">Are you an User?</a>
                </form>
            </div>
</body>
</head>
</html>
