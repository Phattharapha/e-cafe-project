<?php

require("Database_Connect.php");
$pro_id = $_POST['proid'];
$pro_name = $_POST['txtname'];
$pro_type  = $_POST['category'];
$pro_status  = $_POST['status'];
$pro_price  = $_POST['txtprice'];
$recommend	 = $_POST['txtrec'];
$Description  = $_POST['txtDescription'];

/* Upload Image */
$target_dir = "image1/";
$image_name = $_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
if(!empty($image_name)){

	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	/* End Upload Image */
	
	$sql="UPDATE product SET pro_id = '".$pro_id."' 
,pro_name  = '".$pro_name."' ,pro_type = '".$pro_type."'
,pro_status = '".$pro_status."',pro_price = '".$pro_price."'
,picture = '".$image_name."',recommend = '".$recommend."',Description = '".$Description."'
where pro_id=".$pro_id;
}else{
	$sql="UPDATE product SET pro_id = '".$pro_id."' 
,pro_name  = '".$pro_name."' ,pro_type = '".$pro_type."'
,pro_status = '".$pro_status."',pro_price = '".$pro_price."'
,recommend = '".$recommend."',Description = '".$Description."'
where pro_id=".$pro_id;

}

if ($result = mysqli_query($conn,$sql)) {
   
}


	if($result){
		echo "<script type='text/javascript'>";
		echo "alert('Edit Successfully');";
		echo "window.location = 'admin_manage-menu.php'; ";
		echo "</script>";
		}
		else{
		echo "<script type='text/javascript'>";
		echo "alert('Error back to Edit again');";
			echo "window.location = 'admin_manage-menu.php'; ";
		echo "</script>";}
?>