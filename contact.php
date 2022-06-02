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
        <a href="about.php">O nas</a>
        <a href="contact.php" class="is-active">Kontakt</a>
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
<br><br><br><br><br><br>
<section class="contact">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
                
				<h2>Napisz do nas</h2>
                <form action="includes/contact.inc.php" method="post">
                    
                    <?php
                        if(isset($_SESSION["username"])){
                            if(!is_null($_SESSION["name"])){
                                echo '<input name="name" type="text" class="field" placeholder="Imię" value="'.$_SESSION["name"];
                                if(!is_null($_SESSION["surname"])){
                                    echo ' '.$_SESSION["surname"];
                                }
                                echo '">';
                            }
                            else{
                                echo '<input name="name" type="text" class="field" placeholder="Imię">';
                            }
                            echo '<input name="email" type="text" class="field" placeholder="Email" value="'.$_SESSION["email"].'">';
                        }
                        else{
                            echo '<input name="name" type="text" class="field" placeholder="Imię">';
                            echo '<input name="email" type="text" class="field" placeholder="Email">';
                            
                        }

                    ?>
                    <input name="phone" type="text" class="field" placeholder="Telefon">
                    <textarea name="msg" placeholder="Wiadomość" class="field"></textarea>
                    <button name="submitContact" type="submit" class="btn">Wyślij</button>
                </form>
			</div>
		</div>
</section>





<script src="main.js"></script>
</body>

</html>
