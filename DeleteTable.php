<?php

	
require("Database_Connect.php");
$table_id = $_POST['tableid'];
$sql="DELETE FROM tb WHERE table_id='".$table_id."'";

if ($result = mysqli_query($conn,$sql)) {

}

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Delete Successfully');";
	echo "window.location = 'admin_manage-table.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Delete again');";
    echo "window.location = 'admin_manage-table.php'; ";
	echo "</script>";}
?>