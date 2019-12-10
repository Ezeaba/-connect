<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginsystem";

$con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

$output = '';
if(isset($_POST['Search'])){
    $searchq = $_POST['Search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

    $query = "SELECT * FROM business WHERE BusinessName LIKE '%$searchq%' ";
    $sql=mysqli_query($con, $query);

    $count = mysqli_num_rows($sql);
    if($count == 0){
        $output ='There was no Output';
    }else{
        while($row = mysqli_fetch_array($sql)){
            $BusinessN = $row['BusinessName'];
            $Address = $row['Address'];
            $Phone = $row['Phone'];

            $output .= '<div>'.$BusinessN.'<br/>'
                                .$Address.'<br/>'
                                .$Phone.'<br/>';
        }
    }
}
?>