<?php
    if(isset($_POST["submit"])){
        $user = $_POST["username"];
        $psrwd = $_POST["password"];

        require_once "dbcon.inc.php";
        require_once "functions.inc.php";

        if(emptyInputLogin($user,$psrwd)!==false ){
            header("Location: ../login.php?error=emptyfields");
            exit();
        }
        loginUser($conn, $user, $psrwd);
    }
    else{
        header("location: ../login.php");
        exit();
    }
?>