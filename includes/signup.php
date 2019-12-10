<?php


if (isset($_POST['signup-submit'])){


    require 'databaseHandler.php';

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordrepeat = $_POST['password_repeat'];
    
    if (empty($firstname) ||  empty($middlename) ||  empty($lastname) || empty($email) || empty($username) || empty($password) || empty($passwordrepeat)){
        header("location: ../DvCorpSignUp.php?error=emptyfields");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("location: ../DvCorpSignUp.php?error=invalidemailusername");
        exit();  
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location: ../DvCorpSignUp.php?error=invalidemail");
        exit();    
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("location: ../DvCorpSignUp.php?error=invalidusername");
        exit();    
    }
    elseif($password !== $passwordrepeat){
        header("location: ../DvCorpSignUp.php?error=passwordmismatch");
        exit();
    }
    else{
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../DvCorpSignUp.php?error=usernamematch");
            exit();  
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("location: ../DvCorpSignUp.php?error=usertaken");
                exit();
            }
            else {
                $sql = "INSERT INTO users (firstname, middlename, lastname, email, username, pwd) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($con);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("location: ../DvCorpSignUp.php?error=usernamematch");
                    exit();
                }
                else{
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $middlename, $lastname, $email, $username, $hashedpwd);
                    mysqli_stmt_execute($stmt);

                    header("location: ../DvCorpLogin.php?signup=success");
                    exit();
                }
            }
        }
    }

                

    mysqli_stmt_close($stmt);
    mysqli_close($con);



}
else{
    header("location: ../DvCorpSignUp.php?error");
                exit();
} 