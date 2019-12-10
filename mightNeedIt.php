<?php
session_start();
include_once("./databaseHandler.php");

$id = $_SESSION['id'];

if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file ['tmp_name'];
    $filesize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($filesize < 1000000){
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = '../uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE profileimg SET status=0 WHERE userid='$id';";
                $result = mysqli_query($con, $sql);
                header("Location: ");

            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "There was an error uploading your file!";
        }
    }else{
        echo "You cannot upload this file type!";
    }
}



?>