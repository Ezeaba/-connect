<?php
if(isset($_GET['id'])) {
    require("databaseHandler.php");
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $sql = "SELECT * FROM business WHERE id='$id' ";
    $result= mysqli_query($con, $sql) or die("Bad Query");
    $row = mysqli_fetch_array($result);

    $id = $row['id'];
    $general = $row['GeneralInfo'];
    $Time = $row['Time'];
    $ServiceProd = $row['ServicesProd'];
    $payment = $row['Payment'];
    $Neighbor = $row['Neighborhood'];
    $Links = $row['OtherLinks'];
    $OtherInfo = $row['OtherInfo'];



}
else{
    header('Location: index.php');
}
?> 