<?php
    //Tylko do testów potem można usunąć
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    $host = "localhost";
    $username = "root";
    $password = "root"; //Jak nie działa połączenie bazy danych to wpisz nic i mean ""
    $database = "technokracja";

    $conn = new mysqli($host, $username, $password, $database);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    else{
        if(isset($_POST["submitSignup"])){
            $email = $_POST["email"];
            $user = $_POST["username"];
            $pswrd = $_POST["password"];
            $pswrd2 = $_POST["password2"];

            if(empty($email) || empty($user) || empty($pswrd) || empty($pswrd2)){
                header("Location: ../rejestracja.php?error=emptyfields&email=".$email."&user=".$user );
                exit();
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$user)){
                header("Location ../rejestracja.php?error=invalidmailuser&user");
                exit();
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location ../rejestracja.php?error=invalidmail&user=".$user);
                exit();
            }
            else if(!preg_match("/^[a-zA-Z0-9]*$/",$user)){
                header("Location ../rejestracja.php?error=invaliduser&email=".$email);
                exit();
            }
            else if($pswrd !== $pswrd2){
                header("Location: ../rejestracja.php?error=passwordcheck&email=".$email."&user=".$user );
                exit();
            }
            else{
                $sql = "SELECT usernameUsers FROM users WHERE usernameUsers=?";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../rejestracja.php?error=sqlerror1");
                    exit();

                }
                else{
                     mysqli_stmt_bind_param($stmt, "s", $user);
                     mysqli_stmt_execute($stmt);
                     mysqli_stmt_store_result($stmt);
                     $resultCheck = mysqli_stmt_num_rows($stmt);
                     if($resultCheck>0){
                        header("Location: ../rejestracja.php?error=usertaken&email=".$email);
                        exit();
                     }
                     else{
                        $sql = "INSERT INTO users(usernameUsers, emailUsers, passwordUsers) VALUES (?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("Location: ../rejestracja.php?error=sqlerror2");
                            exit();
        
                        }
                        else{
                            $hashedPswrd = password_hash($pswrd, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt,"sss",$user,$email,$pswrd);
                            mysqli_stmt_execute($stmt);
                            header("Location: ../rejestracja.php?signup=success");
                            exit();
                        }
                     }
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
        else{
            header("Location: ../rejestracja.php");
            exit();
        }
    }
    //echo $conn->host_info."\n";
?>