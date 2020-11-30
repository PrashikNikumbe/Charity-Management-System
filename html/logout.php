<?php
session_start();
session_destroy();
echo '<script type="text/javascript">alert("Logout Successfuly");
location="index.php";</script>';
?>