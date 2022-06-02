<?php 
    session_start();
    if(isset($_POST["submitContact"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $msg = $_POST["msg"];

        require_once "dbcon.inc.php";
        require_once "functions.inc.php";

        if(emptyInputContact($name,$email,$phone,$msg)!==false ){
            header("Location: ../contact.php?error=emptyfields");
            exit();
        }
        if(invalidPhone($phone)!==false){
            header("Location: ../contact.php?error=invalidphonenumber");
            exit();
        }
        if(invalidEmail($email)!==false){
            header("Location: ../contact.php?error=invalidemail");
            exit();
        }
        sendMsg($conn, $name, $email, $phone, $msg);
    }
    else{
        header("location: ../contact.php");
        exit();
    }
?>