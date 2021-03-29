<?php
$servername = "sql105.epizy.com";
$username = "epiz_27217128";
$password = "OuleG96iajR";
$dbname = "epiz_27217128_ecafeproject1";
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

$result2 = mysqli_query($conn,$sql2);


if($result2->num_rows >= 1 ){//Pass
  header("Location:Home.php");
  session_start();
  $_SESSION["table_id"] = $result2->fetch_assoc()["table_id"];
}else if($result = $conn->query($sql) or die($conn->error)){//Incorrect
  $logged_in_user = $result->fetch_assoc();
  $emp_id = $logged_in_user["emp_id"];

  $sql3 = "SELECT * FROM $table WHERE emp_id = '" . $emp_id . "' ";
  $result3 = $conn->query($sql3) or die($conn->error);
  $emp_information = $result3->fetch_assoc();

  if ($emp_information['emp_status'] == 'Admin') {
    header("Location:admin_Home.php");
  } else if ($emp_information['emp_status'] == 'Waiter') {
    header("Location:employee_status.php");
  }
  else{
    header("Location:Home-login.php");  
  }
}
else{
  header("Location:Home-login.php");
};
?>