<?php
    session_start();
    if(isset($_POST["submitPassword"])){
        $oldpswrd = $_POST["oldpswrd"];
        $newpswrd = $_POST["newpswrd"];
        $newpswrd2 = $_POST["newpswrd2"];

        require_once "dbcon.inc.php";
        require_once "functions.inc.php";

        changePassword($conn,$oldpswrd,$newpswrd,$newpswrd2);
    }
    else{
        header("location: ../profile.php");
        exit();
    }
?>