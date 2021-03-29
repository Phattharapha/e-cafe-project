<?php

	
require("Database_Connect.php");
$emp_id = $_POST['empid'];
$sql="DELETE FROM employee WHERE emp_id='".$emp_id."'";

if ($result = mysqli_query($conn,$sql)) {

}

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Delete Succesfuly');";
	echo "window.location = 'admin_manage-user.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Delete again');";
    echo "window.location = 'admin_manage-user.php'; ";
	echo "</script>";}
?>