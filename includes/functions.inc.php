<?php
    require_once "dbcon.inc.php";
    function alert($msg) { //Only for tests
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    function emptyInputSignup($email, $user, $pswrd, $pswrd2){
        $result;
        if(empty($email) || empty($user) || empty($pswrd) || empty($pswrd2)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function invalidUser($user){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$user)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function invalidEmail($email){
        //To nie chce działać ale kurde bela naprawie przysięgam
        $result;
        if(empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function pswrdMatch($pswrd,$pswrd2){
        $result;
        if($pswrd !== $pswrd2){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function userExists($conn, $user, $email){
        $sql = "SELECT * FROM users WHERE idUsers = ? OR emailUsers = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../rejestracja.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"ss",$user,$email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }
    function createUser($conn, $email, $user, $pswrd){
        $sql = "INSERT INTO users(usernameUsers, emailUsers, passwordUsers) VALUES (?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../rejestracja.php?error=stmtfailed");
            exit();
        }

        $hashedPswrd = password_hash($pswrd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"sss",$user,$email,$hashedPswrd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../rejestracja.php?error=none");
        exit();
    }
?>