<?php
    if(isset($_POST["submitLogin"])){
        $email = $_POST["email"];
        $psrwd = $_POST["password"];

        require_once "dbcon.inc.php";
        require_once "functions.inc.php";

        if(emptyInputLogin($email,$psrwd)!==false ){
            header("Location: ../logowanie.php?error=emptyfields");
            exit();
        }
        loginUser($conn, $user, $psrwd);
    }
    else{
        header("location: ../logowanie.php");
        exit();
    }
?>