<?php
    $host = "localhost";
    $username = "root";
    $password = "root"; //Jak nie działa połączenie bazy danych to wpisz nic i mean ""
    $database = "technokracja";

    $conn = new mysqli($host, $username, $password, $database);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
?>