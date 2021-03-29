<?php 

require("Database_Connect.php");

$_POST = json_decode(file_get_contents("php://input"),true);

$checkAllAval = true;

$productItemLen = count($_POST["productItem"]);

$countUnAval = 0;

$table_id;

foreach( $_POST["productItem"] as $row){

    $table_id = $row["table_id"];
    $order_id = $row["order_id"];
    if($row["pro_status"] == "Unavailable"){

        $countUnAval += 1;

        $sql1="UPDATE product Set pro_status = 'Unavailable' where pro_id = ".$row['pro_id']; //Update Product Status = $row["pro_status"]

        // $sql2="DELETE FROM `order` where pro_id = ".$row['pro_id']   ; //sql Detele Product From Order where pro_id = $row["pro_id"]

    

    

        if ($result = mysqli_query($conn,$sql1)) {

        }

    

    }

}


if($productItemLen == $countUnAval){

    //Delete Order where table_id = $table_id

    $sql3="UPDATE `order` Set order_status = 'Cancel' where order_id = ".$order_id  ;



    if ($result = mysqli_query($conn,$sql3)) {

    }

}else{

    //Update Status Order To Preparing where table_id = $table_id

    $sql4="UPDATE `order` Set order_status = 'prepairing' where order_id = ".$order_id;



    if ($result = mysqli_query($conn,$sql4)) {

    }

}









?>