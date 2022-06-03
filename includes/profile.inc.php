<?php
    session_start();
    if(isset($_POST["submitUpdate"])){
        $user = $_SESSION["username"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];

        require_once "dbcon.inc.php";
        require_once "functions.inc.php";

        updateName($conn, $name, $surname);
    }
    else{
        header("location: ../profile.php");
        exit();
    }
    
?>