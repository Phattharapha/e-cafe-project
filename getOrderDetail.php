<?php

require("Database_Connect.php");

// json_encode($_GET)

$sql="select * from `order` left join orderitem on order.order_id = orderitem.order_id left join product on product.pro_id = `orderitem`.`pro_id` where `orderitem`.`CancelRemarks` = '' and `order`.`order_id` = ".$_GET['order_id'];



$myArray = array();

if ($result = $conn->query($sql)) {



    while($row = $result->fetch_array(MYSQLI_ASSOC)) {

        array_push($myArray,$row);

    }

    echo json_encode($myArray);

}



?>