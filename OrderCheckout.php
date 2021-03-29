<?php 
require("Database_Connect.php");
$_POST = json_decode(file_get_contents("php://input"),true);
// echo $_POST["table_id"];
// Update Order Status เป็น Checkout โดย where จาก table_id ค่าของ table_id อยู่ในตัวแปร $table_id

$sql= "UPDATE `order` Set order_status = 'Check Out' where order_id = " . $_POST["order_id"];
	
if ($result = mysqli_query($conn,$sql)) {
}