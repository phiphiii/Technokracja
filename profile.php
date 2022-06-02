<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: ./index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0"> 
    <title>TechnoNews</title>
    <link rel="stylesheet" href="main.css"/>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>

<nav>
    <div class="container">
    <h1>TechnoNews</h1>
    <div class="menu">
        <a href="index.php" >Główna</a>
        <a href="about.php">O nas</a>
        <a href="contact.php">Kontakt</a>
        <?php
            if(isset($_SESSION["username"])){
                echo '<a href="profile.php" class="is-active">Profil</a>';
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
<br><br><br><br><br><br> <!-- błagam zamień to na margin albo padding, boli -->
<section class="contact">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Dane osobowe</h2>
                <form action="includes/profile.inc.php" method="post">
                    <?php
                        echo '<input type="text" class="field" disabled value="'.$_SESSION["username"].'">';
                        echo '<input name="email" type="text" class="field" placeholder="Email" disabled value="'.$_SESSION["email"].'">';
                        if(!is_null($_SESSION["name"])){
                            echo '<input name="name" type="text" class="field" placeholder="Imię" value="'.$_SESSION["name"].'">';
                        }
                        else{
                            echo '<input name="name" type="text" class="field" placeholder="Imię">';
                        }
                        if(!is_null($_SESSION["surname"])){
                            echo '<input name="surname" type="text" class="field" placeholder="Nazwisko" value="'.$_SESSION["surname"].'">';
                        }
                        else{
                            echo '<input name="surname" type="text" class="field" placeholder="Nazwisko">';
                        }
                        
                    ?>
                    <button class="btn">Zmień dane</button><br><br>
                </form>
                <h2>Zmiana hasła</h2>
                <form >
                    <input type="password" class="field" placeholder="Stare haslo">
                    <input type="password" class="field" placeholder="Nowe haslo">
                    <input type="password" class="field" placeholder="Powtorz nowe haslo">
                    <button class="btn">Zmień hasło</button>
                </form>
                <br>
                <a href="includes/logout.inc.php"><button class="btn">Wyloguj się</button></a>
			</div>
		</div>
</section>


<br><br><br><br><br><br><br><br><br><br><br>
<footer class="footer">
    <div class="inner-footer">
        <div class="social-links">
         
                <li class="social-items"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li class="social-items"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li class="social-items"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li class="social-items"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
           
        </div>
        <div class="quick-links">
            <ul>

                <li class="quick-items"><a href="#">Regulamin</a></li>

            </ul>
        </div>
    </div>
    <div class="outer-footer">
        Copyright &copy; TechnoNews Corp. All Rights Reserved.
    </div>
</footer>

<script src="main.js"></script>
</body>

</html>
