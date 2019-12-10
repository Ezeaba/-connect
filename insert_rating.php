<?php
if(isset($_POST['submit_rating']))
{
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "loginsystem";
    
    $con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
  
  $php_rating=$_POST['phprating'];
  $asp_rating=$_POST['asprating'];
  $jsp_rating=$_POST['jsprating'];

  $query = "INSERT INTO rating VALUES ('','$php_rating','$asp_rating','$jsp_rating') ";

  $insert=mysqli_query($con, $query);
}
?>