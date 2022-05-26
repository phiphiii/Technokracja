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
                header("Location ./rejestracja.php?error=emptyfields&email=".$email."&user=".$user);
                exit();
            }
        }
    }
    //echo $conn->host_info."\n";

    $conn->close();
?>