<?php
    if(isset($_POST["submitSignup"])){
        $email = $_POST["email"];
        $user = $_POST["username"];
        $pswrd = $_POST["password"];
        $pswrd2 = $_POST["password2"];

        require_once "dbcon.inc.php";
        require_once "functions.inc.php";

        if(emptyInputSignup($email,$user,$pswrd,$pswrd2) !== false){
            header("Location: ../register.php?error=emptyfields");
            exit();
        }
        if(invalidUser($username) !== false){
            header("Location ../register.php?error=invaliduser&email=".$email);
            exit();
        }
        if(invalidEmail($email) !== false){
            header("Location ../register.php?error=invalidemail&user=".$user);
            exit();
        }
        if(pswrdMatch($pswrd,$pswrd2) !== false){
            header("Location: ../register.php?error=passwordcheck&email=".$email."&user=".$user );
            exit();
        }
        if(userExists($conn, $username, $email) !== false){
            header("Location: ../register.php?error=usernametaken");
            exit();
        }

        createUser($conn, $email, $user, $pswrd);
    }
    else{
        header("Location: ../register.php");
        exit();
    }
    //echo $conn->host_info."\n";
?>