<html>
<head>
    <title>Volunteer Information</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/events.js"></script>

<body >
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
    location="user.php";</script>';
}
?>
    </header>
    <div >
        <h1>Volunteer Information</h1>
        <table>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>City</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Contribution</th>
        <th>Expectation</th>
        <th>Working days</th>
        <th>Timestamp</th>

        </tr>
        <?php
        $conn = mysqli_connect("localhost:3307", "root", "", "anonymous_hope");
        // Check connection
        if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM volunteer order by DateTime";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"] . "</td><td>". $row["Email"] . "</td><td>". $row["Phno"] . "</td><td>"
        . $row["Address"] . "</td><td>". $row["City"] . "</td><td>". $row["Gender"] . "</td><td>". $row["Age"] . "</td><td>"
        . $row["Contribution"] . "</td><td>". $row["Expectation"] . "</td><td>". $row["WorkingDays"] . "</td><td>". $row["DateTime"]. "</td></tr>";
        }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        ?>
        </table>
        </div>



</body>
</head>
</html>
