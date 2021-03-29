<?php

require("Database_Connect.php");
$emp_id = $_POST['empid'];
$emp_name = $_POST['empname'];
$emp_address  = $_POST['addressemp'];
$emp_phone  = $_POST['phoneemp'];
$emp_birthday  = $_POST['birthdayemp'];
$emp_idcard  = $_POST['idcardemp'];
$start_date	 = $_POST['startdateemp'];
$emp_status  = $_POST['statusemp'];
$login_name  = $_POST['loginnameemp'];
$password_emp  = $_POST['Passwordemp'];

$sql="UPDATE employee SET emp_name = '".$emp_name."' 
,emp_address  = '".$emp_address."' ,emp_phone = '".$emp_phone."'
,emp_birthday = '".$emp_birthday."',emp_idcard = '".$emp_idcard."'
,start_date = '".$start_date."',emp_status = '".$emp_status."'
,login_name = '".$login_name."',password_emp = '".$password_emp."'
where emp_id=".$emp_id;


	
if ($result = mysqli_query($conn,$sql)) {
   
}


	if($result){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = 'admin_manage-user.php'; ";
		echo "</script>";
		}
		else{
		echo "<script type='text/javascript'>";
		echo "alert('Error back to Update again');";
			echo "window.location = 'admin_manage-user.php'; ";
		echo "</script>";}
?>