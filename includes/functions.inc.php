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
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function invalidEmail2($email){
        //To nie chce działać ale kurde bela naprawie przysięgam
        $result;
        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function invalidPhone($phone){
        $result;
        if(!preg_match("/^[0-9]{9}$/", $phone)) {
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
        $sql = "SELECT * FROM users WHERE usernameUsers = ? OR emailUsers = ? ";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../register.php?error=stmtfailed");
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
            header("Location: ../register.php?error=stmtfailed");
            exit();
        }

        $hashedPswrd = password_hash($pswrd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"sss",$user,$email,$hashedPswrd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../register.php?error=none");
        exit();
    }
    function emptyInputLogin($email, $pswrd){
        $result;
        if(empty($email) || empty($pswrd)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function loginUser($conn, $user, $pswrd){
        $userExists = userExists($conn, $user, $user);
        if($userExists === false){
            header("location: ../login.php?error=wronglogin");
            exit();
        }

        $pswrdHashed = $userExists["passwordUsers"];
        $checkPswrd = password_verify($pswrd,$pswrdHashed);

        if($checkPswrd === false){
            header("location: ../login.php?error=wrongpassword");
            exit();
        }
        else if($checkPswrd === true){
            session_start();
            $_SESSION["userid"] = $userExists["idUsers"];
            $_SESSION["username"] = $userExists["usernameUsers"];
            $_SESSION["email"] = $userExists["emailUsers"];
            $_SESSION["name"] = $userExists["nameUsers"];
            $_SESSION["surname"] = $userExists["surnameUsers"];
            header("location: ../index.php");
            exit();
        }
    }
    function emptyInputContact($name,$email,$phone,$msg){
        $result;
        if(empty($name) || empty($email) || empty($phone) || empty($msg)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function sendMsg($conn, $name, $email, $phone, $msg){
        $userExists = userExists($conn, $email, $email);
        $stmt = mysqli_stmt_init($conn);
        if($userExists === false){
            $sql = "INSERT INTO messages(nameMessages, emailMessages, phoneMessages, msgMessages) VALUES (?, ?, ?, ?);";
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../contact.php?error=stmtfailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$phone,$msg);
        }
        else{
            $iduser = $userExists["idUsers"];
            $sql = "INSERT INTO messages(idUMessages, nameMessages, emailMessages, phoneMessages, msgMessages) VALUES (?, ?, ?, ?, ?);";
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../contact.php?error=stmtfailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt,"sssss",$iduser,$name,$email,$phone,$msg);
        }
        
        
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../contact.php?error=none");
        exit();
        
    }
    function updateName($conn,$name, $surname){
        $user = $_SESSION["username"];
        $userExists = userExists($conn, $user, $user);
        
        $stmt = mysqli_stmt_init($conn);
        if($userExists === false){
            header("Location: ../profile.php?error=somethingfailed");
            exit();
        }
        else{
            $iduser = $userExists["idUsers"];
            if(empty($name) && empty($surname)){
                header("Location: ../profile.php?error=emptyfields");
                exit();
            }
            if(!empty($name)){
                if(!empty($surname)){
                    $sql = "UPDATE users SET nameUsers = ?, surnameUsers = ? WHERE idUsers = ?";
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../profile.php?error=stmtfailed");
                        exit();
                    }
                    mysqli_stmt_bind_param($stmt,"sss",$name,$surname,$iduser);
                }
                else{
                    $sql = "UPDATE users SET nameUsers = ? WHERE idUsers = ?";
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../profile.php?error=stmtfailed");
                        exit();
                    }
                    mysqli_stmt_bind_param($stmt,"ss",$name,$iduser);
                }
            }
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("Location: ../profile.php?error=none");
            exit();
            
        }
    }
    function changePassword($conn,$oldpswrd, $newpswrd, $newpswrd2){
        $user = $_SESSION["username"];
        $userExists = userExists($conn, $user, $user);
        
        $stmt = mysqli_stmt_init($conn);
        if($userExists === false){
            header("Location: ../profile.php?error=somethingfailed");
            exit();
        }
        else{
            $iduser = $userExists["idUsers"];
            if(empty($oldpswrd) || empty($newpswrd) || empty($newpswrd2)){
                header("Location: ../profile.php?error=emptyfields");
                exit();
            }
            if(pswrdMatch($newpswrd,$newpswrd2)){
                header("Location: ../profile.php?error=passwordsnotmatching");
                exit();
            }
                $pswrdHashed = $userExists["passwordUsers"];
                $checkPswrd = password_verify($oldpswrd,$pswrdHashed);
                if($checkPswrd === false){
                    header("Location: ../profile.php?error=wrongpassword");
                    exit();
                }
                $hashedPswrd = password_hash($newpswrd, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET passwordUsers = ? WHERE idUsers = ?";
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../profile.php?error=stmtfailed");
                    exit();
                }
                mysqli_stmt_bind_param($stmt,"ss",$hashedPswrd,$iduser);
            
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("Location: ../profile.php?error=none");
            exit();
            
        }
    }
    
?>