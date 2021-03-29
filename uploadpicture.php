<?php
    echo '<pre>';
    print_r($_FILES);
    

    $dir = "image1/";

    $filename = $dir . basename($_FILES["filUpload"]["name"]);
    if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],$filename)){
        echo 'อัพโหลดเสร็จ';
    }

   
?>