<?php
session_start();
require("databaseHandler.php");

$id= $_GET['id'];
if($id=='AutoServices'){
    $query="SELECT * FROM business WHERE categories='AutoServices' ";
}
elseif($id=='Beauty'){
    $query="SELECT * FROM business WHERE categories='Beauty' ";
}
elseif($id=='Restaurant'){
    $query="SELECT * FROM business WHERE categories='Restaurant' ";
}
elseif($id=='Medical'){
    $query="SELECT * FROM business WHERE categories='Medical' ";
}
elseif($id=='HomeServices'){
    $query="SELECT * FROM business WHERE categories='HomeServices' ";
}
elseif($id=='Entertainment'){
    $query="SELECT * FROM business WHERE categories='Entertainment' ";
}
else{
    $query="SELECT * FROM business";
}
    
?>