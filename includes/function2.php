<?php
session_start();
require("databaseHandler.php");

if (isset($_SESSION['username'])){
    $id = $_SESSION['username'];
    $username = $_SESSION['userid'];

    $sqluser = "SELECT * FROM users WHERE id = '$id' AND username = '$username'";
    $result = mysqli_query($con, $sqluser);
    $rowuser = mysqli_fetch_assoc($result);
              
                    
            

}
                            
?>