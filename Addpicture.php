<?php


require("Database_Connect.php");
if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
{
echo "Copy/Upload Complete<br>";
//*** Insert Record ***//

$objDB = mysql_select_db("mydatabase");
$strSQL = "INSERT INTO files ";
$strSQL .="(FilesName) VALUES ('".$_FILES["filUpload"]["name"]."')";
$objQuery = mysql_query($strSQL);      

}
?>