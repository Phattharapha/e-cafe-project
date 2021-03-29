<?php

require("Database_Connect.php");

$pro_id = $_POST['proid'];

$pro_name = $_POST['txtname'];

$pro_type  = $_POST['category'];

$pro_status  = $_POST['status'];

$pro_price  = $_POST['txtprice'];

$recommend  = $_POST['txtrec'];

$Description  = $_POST['txtDescription'];

// $lastupdate  = $_POST['seatamount'];





/* Upload Image */

$target_dir = "image1/";

$image_name = $_FILES["fileToUpload"]["name"];

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

/* End Upload Image */



$sql="INSERT INTO product (pro_id, pro_name, pro_type, pro_status, pro_price, picture, recommend, Description)

VALUES('".$pro_id."','".$pro_name."','".$pro_type."','".$pro_status."','".$pro_price."', '".$image_name."','".$recommend."','".$Description."') ";



	

if ($result = mysqli_query($conn,$sql)) {

	

 

}



if($result){

echo "<script type='text/javascript'>";

echo "alert('Add Successfully');";

echo "window.location = 'admin_manage-menu.php'; ";

echo "</script>";

}

else{

echo "<script type='text/javascript'>";

echo "alert('Error back to Add again');";

echo "window.location = 'admin_manage-menu.php'; ";

echo "</script>";}



?>

<!-- <body onload="document.sendform.submit();">

<form form="sendform" action="uploadpicture.php" method="POST" enctype="multipart/form-data" onSubmit="JavaScript:return fncSubmit();" >

<input type="hidden" name="stang" >

</form>

</body> -->