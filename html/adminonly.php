<html>
<head>
    <title>Admin page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/events.js"></script>

<body id='adminPagebody'>
    <header>
        <img src="../images/logo.png">
        <h1>Anonymous Hope</h1>
        <nav>

            <a href="index.php" >HOME</a>
            <a href="aboutus.php" >ABOUT US</a>
            <a href="donatenow.php" >DONATE NOW</a>
            <a href="user.php" id="in">LOGIN</a>
            <a href="logout.php" id="out" >LOGOUT</a>
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
    location="admin.php";</script>';
}
?>
    </header>
    <div id="information">
        <h2>Hello <?php echo $_SESSION['username'];  ?>, select from below which information you need.</h2>
        <p id="Ainfo1" >Click to Know</p>
        <p id="Ainfo2" >Click to Know</p>
        <a href="volunteerinfo.php"><img src="../images/pic7.jpg" id="Vimg" alt="Image of Voluteer information" onmouseover="TextShow(this)" onmouseout="TextHide(this)" ></a>
        <p id='Vinfo'>Voluteer Information</p>
        <a href="donationinfo.php"><img src="../images/clothes1.jpg" id="Dimg" alt="Image of Donation information" onmouseover="TextShow(this)" onmouseout="TextHide(this)" >
        </a>
        <p id='Dinfo'>Donation Information</p>
  
    </div>

    <footer>Follow us on <a href=""><i class="fa fa-2x fa-instagram"></i></a> <a href=""><i class="fa fa-2x fa-facebook"></i></a> <a href=""><i class="fa fa-2x fa-twitter"></i></a><br>
     </br>Contact us on anonymoushope@gmail.com
     <br> &copy;Copyright 2020 Anonymous Hope.All Right Reserved.
     <br>This website is developed by SPY. 
    </footer>



</body>
</head>
</html>
