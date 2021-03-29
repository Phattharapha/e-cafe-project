<?php
// session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecafeproject1";
$table = "employee";
$table2 = "tb";


$login_name = $_GET["username"];
$password_emp = $_GET["password"];
$login_tb = $_GET["username"];
$password_tb = $_GET["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
	echo "ERR";
}else{
	
}
echo "Connected successfully";

// คำสั่ง SQL และสั่งให้ทำงาน
$sql = "SELECT * FROM $table WHERE login_name ='".$login_name."' AND password_emp ='".$password_emp."' "; //เช็คค่าข้อมูลที่ส่งมาจากฟอร์ม
$sql2 = "SELECT * FROM $table2 WHERE login_tb ='".$login_tb."' AND password_tb ='".$password_tb."' "; //เช็คค่าข้อมูลที่ส่งมาจากฟอร์ม
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);


if($result2->num_rows >= 1 ){//Pass
  header("Location:Home.php");
}else if($result->numrows >= 0){//Incorrect
  $logged_in_user = mysqli_fetch_assoc($results);

  if($logged_in_user['emp_status'] == 'sever'){
    
    $_GET["username"] = $logged_in_user;
    header("Location:employee_status.html");
  }
  else{
    header("Location:admin_Home.php");
  }
  
  
}
else{
  header("Location:Home-login.php");
};
?>