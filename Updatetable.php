<?php

require("Database_Connect.php");
$table_id = $_POST['tableid'];
$login_tb = $_POST['username'];
$password_tb  = $_POST['passwordtb'];
$seat_amount  = $_POST['seatamount'];

$sql="UPDATE tb SET login_tb = '".$login_tb."' 
,password_tb  = '".$password_tb."' ,seat_amount = '".$seat_amount."'
where table_id=".$table_id;


	
if ($result = mysqli_query($conn,$sql)) {
   
}


	if($result){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = 'admin_manage-table.php'; ";
		echo "</script>";
		}
		else{
		echo "<script type='text/javascript'>";
		echo "alert('Error back to Update again');";
			echo "window.location = 'admin_manage-table.php'; ";
		echo "</script>";}
?>