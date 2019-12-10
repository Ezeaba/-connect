<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginsystem";

$con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(isset($_POST['submit'])){
        $userid = $_POST['userid'];
        $Busid = $_POST['busid'];
        $date = $_POST['date'];
        $review = $_POST['review'];


        $sqluser = "SELECT * FROM users WHERE id = '$userid'";
        $resultuser = mysqli_query($con, $sqluser) or die;
        while($row = mysqli_fetch_assoc($resultuser)){
            $Uname = $row['username'];

            $sqlBus = "SELECT * FROM business WHERE id = '$Busid'";
            $resultBus = mysqli_query($con, $sqlBus) or die;
            while($row = mysqli_fetch_assoc($resultBus)){
                $Bname = $row['BusinessName'];

                $sqlrev = "INSERT INTO reviews (userid, businessid, username, businessName, reviewText, date) VALUES ('$userid', '$Busid', '$Uname', '$Bname', '$review', '$date')";
                $query = mysqli_query($con, $sqlrev);
                header("Location: ../Businesspage.php?id={$Busid}");
            }
        }
    }


   
    
?>