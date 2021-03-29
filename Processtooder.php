<?php
  
  require("Database_Connect.php");
  session_start();
  $sql = "select * from cart left join cartitem on cart.cart_id = cartitem.cart_id where cart.table_id = ". $_SESSION["table_id"];
  $result = $conn->query($sql);
  $checkAddOrder = true;

// $lastupdate  = $_POST['seatamount'];
$conn->query("INSERT INTO `order` (`table_id`)
VALUES(".$_SESSION["table_id"].")");
$order_id = $conn->insert_id;
foreach ($result as $row) 
{
    $sqlInsertOrder ="INSERT INTO `orderitem` (`amount`, `pro_id`,`order_id`)
    VALUES(".$row["amount"].",".$row["pro_id"].",".$order_id.")";

    if (!$conn->query($sqlInsertOrder)){
      echo $conn->error; 
      $checkAddOrder = false;
    }
}

unset($_SESSION['cart_id']);

if ( $checkAddOrder and $result = mysqli_query($conn,"delete from cart where table_id = ". $_SESSION["table_id"])) {
    // echo "Success";
    
}else{
  echo "Failed";
}

if($result){
echo "<script type='text/javascript'>";
// echo "alert('Update Successfully');";
echo "window.location = 'Status.php'; ";
echo "</script>";
}
else{
echo "<script type='text/javascript'>";
// echo "alert('Error back to Update again');";
echo "window.location = 'Status.php'; ";
echo "</script>";}
