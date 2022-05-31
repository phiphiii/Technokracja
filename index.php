<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width", initial-scale="1.0"> 
<title>TechnoNews</title>
<link rel="stylesheet" href="main.css"/>
</head>

<body>

<nav>
    <div class="container">
    <h1>TechnoNews</h1>
    <div class="menu">
    <a href="index.php" class="is-active">Główna</a>
        <a href="about.php">O nas</a>
        <a href="contact.php">Kontakt</a>
        <?php
            if(isset($_SESSION["username"])){
                echo '<a href="profile.php">Profil</a>';
                echo '<a href="includes/logout.inc.php">Wyloguj się</a>'; //TO MOZE BYC NA PROFILU ALBO GDZIE CHCESZ ALE GDZIESZ TRZEBA TO WJEBAC
            }
            else{
                echo '<a href="login.php">Logowanie</a>';
            }
        ?>
        
    </div>
    <button class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </button>
    </div>
</nav>


<script src="main.js"></script>
</body>

</html>
