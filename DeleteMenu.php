<?php

	
require("Database_Connect.php");
$pro_id = $_POST['proid'];
$sql="DELETE FROM product WHERE pro_id='".$pro_id."'";

if ($result = mysqli_query($conn,$sql)) {

}

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Delete Succesfuly');";
	echo "window.location = 'admin_manage-menu.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Delete again');";
    echo "window.location = 'admin_manage-menu.php'; ";
	echo "</script>";}
?>