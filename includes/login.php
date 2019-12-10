<?php
if (isset($_POST['login-submit'])){

    require 'databaseHandler.php';

    $usermail = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($usermail) ||  empty($password)){
        header("location: ../DvCorpLogin.php?error=emptyfields");
        exit();
    }
    else{
       $sql = "SELECT * FROM users WHERE username=? OR email=?;";
       $stmt = mysqli_stmt_init($con);
       if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../DvCorpLogin.php?error=sqlerror");
        exit();  
       }
       else{
           mysqli_stmt_bind_param($stmt, "ss", $usermail, $usermail);
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
           if($row = mysqli_fetch_assoc($result)){
             $pwdCheck = password_verify($password, $row['pwd']); 
             if($pwdCheck == false){
                header("location: ../DvCorpLogin.php?error=wrongpassword");
        exit();  
             } 
             elseif($pwdCheck == true) {
                 session_start();
                 $_SESSION['userid'] = $row['id'];
                 $_SESSION['username'] = $row['username'];

                 header("location: ../DvCorpDashbord.php?login=success");
                 exit(); 
             }
             else{
                header("location: ../DvCorpLogin.php?error=wrongpassword");
                exit();
             }
           }
            else{
                header("location: ../DvCorpLogin.php?error=nouser");
                exit();
               }
       } 

       
    }

}
else{
    header("location: ../index.html");
                exit();
}