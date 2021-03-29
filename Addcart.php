<?php
require("Database_Connect.php");
$pro_id  = $_POST['proid'];
$amount  = $_POST['quantity'];

// $lastupdate  = $_POST['seatamount'];
session_start();
$table_id = $_SESSION["table_id"];
if(isset($_SESSION["cart_id"])){
    $conn->query("INSERT INTO cartitem (cart_id,pro_id, amount)
    VALUES(".$_SESSION["cart_id"].",".$pro_id.",".$amount.")");
}else{
    $sql="INSERT INTO cart (table_id)
    VALUES(".$table_id.")";
    if ($result = mysqli_query($conn,$sql)) {
        $cart_id = $conn->insert_id;
        $_SESSION["cart_id"] = $cart_id;
        $sql2="INSERT INTO cartitem (cart_id,pro_id, amount)
        VALUES(".$cart_id.",".$pro_id.",".$amount.")";
        if($result = mysqli_query($conn,$sql2)){}
    }
}


echo "<script type='text/javascript'>";
echo "alert('Add Successfully');";
echo "window.location = 'Home.php'; ";
echo "</script>";
// else{
// echo "<script type='text/javascript'>";
// echo "alert('Error back to Add again');";
// echo "window.location = 'Home.php'; ";
// echo "</script>";}
