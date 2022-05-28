<?php
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $psrwd = $_POST["password"];

        require_once "dbcon.inc.php";
        require_once "functions.inc.php";

        if(empty($email) || empty($pswrd)){
            header("Location: ../login.php?error=emptyfields&email=".$email."&user=".$user );
            exit();
        }
    }
?>