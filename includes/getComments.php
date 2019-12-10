<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginsystem";

$con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);


function getcomments($con){
    $sql = "SELECT * FROM reviews";
    $query = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($query)){
        echo"<h5>".$row['username']."</h5>";
        echo $row['reviewText']."<br>";
        echo $row['date']."<br>";
    }
}
?>