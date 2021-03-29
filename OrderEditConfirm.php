<?php 

require("Database_Connect.php");



$_POST = json_decode(file_get_contents("php://input"),true);
$orderId;

foreach( $_POST["productItem"] as $row){
    $orderId = $row['order_id'];
    //Update Order Remark = $row["remark"] where จาก pro_id = $row["pro_id"] && table_id = $row["table_id"]

    $sql= "UPDATE `orderitem` Set CancelRemarks = '".$row['remark']."' where orderitem_id = ".$row["order_item_id"]." and pro_id = " . $row["pro_id"] ." AND order_id =". $row['order_id'];

    if ($result = mysqli_query($conn,$sql)) {

    }



}

$sql="select * from `order` left join orderitem on order.order_id = orderitem.order_id left join product on product.pro_id = `orderitem`.`pro_id` where `orderitem`.`CancelRemarks` = '' and `order`.`order_id` = ".$orderId;
$result =  mysqli_query($conn,$sql);
if (mysqli_num_rows($result) < count($_POST["productItem"]) ){
    $sql= "UPDATE `order` Set order_status = 'Cancel' where order_id =". $row['order_id'];
    $result =  mysqli_query($conn,$sql);
}


?>