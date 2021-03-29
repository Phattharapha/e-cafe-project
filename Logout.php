<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>";
echo "alert('Logout Successfully');";
echo "window.location = 'Home-login.php'; ";
echo "</script>";
?>