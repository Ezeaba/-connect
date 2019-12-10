<?php
require("databaseHandler.php");

$id= $_GET['id'];
if($id=='AutoServices'){
    $query="SELECT * FROM business WHERE categories='AutoServices' ORDER BY id DESC ";
}
elseif($id=='Beauty'){
    $query="SELECT * FROM business WHERE categories='Beauty' ORDER BY id DESC ";
}
elseif($id=='Restaurant'){
    $query="SELECT * FROM business WHERE categories='Restaurant' ORDER BY id DESC ";
}
elseif($id=='Medical'){
    $query="SELECT * FROM business WHERE categories='Medical' ORDER BY id DESC ";
}
elseif($id=='HomeServices'){
    $query="SELECT * FROM business WHERE categories='HomeServices' ORDER BY id DESC ";
}
elseif($id=='Entertainment'){
    $query="SELECT * FROM business WHERE categories='Entertainment' ORDER BY id DESC ";
}
else{
    $query="SELECT * FROM business";
}
    
?>