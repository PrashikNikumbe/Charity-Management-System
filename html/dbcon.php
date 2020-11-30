<?php
    $server = "localhost:3307";
    $username = "root";
    $password = '';

    $con =mysqli_connect($server,$username,$password,"anonymous_hope");

    if(!$con){
        //die("Connection failure" . mysqli_connect_error());
    }
    else{
        //echo "successfuly";
    }
?>

