<?php

require("./includes/databaseHandler.php");
    if (isset($_POST['save'])){

        $UserId = $con ->real_escape_string($_POST['UserId']);
        $ratedIndex = mysqli_real_escape_string($con, $_POST['ratedIndex']);
        $ratedIndex++;

        if(!$UserId){
            $in = "INSERT INTO rating (rating) VALUES ('$ratedIndex')";
            $sql = mysqli_query($con, $in);
            $sel = "SELECT id FROM rating ORDER BY id DESC LIMIT 1";
            $sqll = mysqli_query($con, $sel);
            $uData = mysqli_fetch_assoc($sqll);
            $UserId = $uData['id'];
        }else{
            $put = "UPDATE rating SET rating='$ratedIndex' WHERE id='$UserId'";
        }

        exit(json_encode(array('id' => $UserId)));

    }

    
   
?>