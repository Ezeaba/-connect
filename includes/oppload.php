<?php
require("databaseHandler.php");

if(isset($_POST['upload'])){
    
    $target = "../photoGallery/image".basename($_FILES['file']['name']);
    require("./databaseHandler.php");
    $image = $_FILES['file']['name'];

    $sql = "INSERT INTO busiess (OtherPhotos) VALUES ('$image')";
    mysqli_query($con, $sql);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)){
        echo "Image Uploades Successfully";
                    
    }
    else{
        echo "Unable to Upload Image";
    }
    
    
}