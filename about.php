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
        <a href="index.php" >Główna</a>
        <a href="about.php" class="is-active">O nas</a>
        <a href="contact.php">Kontakt</a>
        <?php
            if(isset($_SESSION["username"])){
                echo '<a href="profile.php">Profil</a>';
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

<br><br><br><br>
<section class="about">
    <div class="text-ab">
      <br>
        <h1>O nas</h1>
        <h5>Powstanie TechnoNews</h5>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        <button type="button">Skontaktuj się z nami</button>
    </div>
</section>


</body>

</html>
