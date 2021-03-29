<?php

	
require("Database_Connect.php");
$cartitem_id  = $_POST['cartitemid'];
$sql="DELETE FROM cartitem WHERE cartitem_id ='".$cartitem_id ."'";

if ($result = mysqli_query($conn,$sql)) {
}

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Delete Successfully');";
	echo "window.location = 'Order.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Delete again');";
    echo "window.location = 'Order.php'; ";
	echo "</script>";}
?>