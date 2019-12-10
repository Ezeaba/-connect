<?php
require("databaseHandler.php");


function getUserData ($id){
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "loginsystem";

    $con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    $array = array();

    $q = mysqli_query ($con, "SELECT * FROM `users` WHERE `id`=".$id);
    while ($r = mysqli_fetch_assoc($q) )
    {

        $array['id'] = $r['id'];
        $array['firstname'] = $r['firstname'];
        $array['middlename'] = $r['middlename'];
        $array['lastname'] = $r['lastname'];
        $array['email'] = $r['email'];
        $array['username'] = $r['username'];
        $array['pwd'] = $r['pwd'];
        $array['profileEx'] = $r['profileEx'];
        $array['age'] = $r['age'];
        $array['aboutme'] = $r['aboutme'];
        $array['country'] = $r['country'];
        $array['city'] = $r['city'];
    }

    return $array;
}

function getId($username)
{
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "loginsystem";

    $con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    $q = mysqli_query($con, "SELECT `id` FROM `users` WHERE `username` ='".$username."'");
    while ($r = mysqli_fetch_assoc($q) )
    {

        return $r['id'];
}
}
?>