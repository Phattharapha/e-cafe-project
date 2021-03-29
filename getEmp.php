<?php
require("Database_Connect.php");
// json_encode($_GET)
$sql="select * from employee where emp_id = ".$_GET['empid'];

$myArray = array();
if ($result = $conn->query($sql)) {

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
    }

    echo json_encode($myArray[0]);
}

?>