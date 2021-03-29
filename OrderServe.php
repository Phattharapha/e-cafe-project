<?php 
require("Database_Connect.php");
$_POST = json_decode(file_get_contents("php://input"),true);

// echo ;
// Update Order Status เป็น Serve โดย where จาก table_id ค่าของ table_id อยู่ในตัวแปร $table_id
$sql= "UPDATE `order` Set order_status = 'Served' where order_id = " . $_POST["order_id"];
	
if ($result = mysqli_query($conn,$sql)) {
}