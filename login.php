<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width", initial-scale="1.0"> 
<title>TechnoNews</title>
<link rel="stylesheet" href="log.css"/>
</head>

<body>
      <body>
        <div class="center">
          <h1>Zaloguj się</h1>
          <form action="includes/login.inc.php" method="post">
            <div class="txt_field">
              <input name="username" type="text" required>
              <span></span>
              <label>Nazwa użytkownika</label>
            </div>
            <div class="txt_field">
              <input name="password" type="password" required>
              <span></span>
              <label>Hasło</label>
            </div>
            <div class="pass">Zapomniałeś hasła?</div>
            <input name="submitLogin" type="submit" value="Login">
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyfields"){
                    echo "<p>Wypełnij wszystkie pola!</p>";
                }
                else if($_GET["error"] == "wronglogin"){
                    echo "<p>Zła nazwa użytkownika</p>";
                    //echo "<p><div class='tenor-gif-embed' data-postid='17362277' data-share-method='host' data-aspect-ratio='1' data-width='100%'><a href='https://tenor.com/view/kiss-love-is-love-sexy-time-gay-boy-time-gif-17362277'>Kiss Love Is Love GIF</a>from <a href='https://tenor.com/search/kiss-gifs'>Kiss GIFs</a></div> <script type='text/javascript' async src='https://tenor.com/embed.js'></script></p>";
                }
                else if($_GET["error"] == "wrongpassword"){
                    echo "<p>Złe hasło</p>";
                }
            }
            ?>
            <div class="signup_link">
              Nie masz konta? <a href="register.php">Zarejestuj się</a><br>
              <a href="index.html"> Powrót na strone główną</a>
            </div>
            
          </form>
        </div>
    
      </body>
    </html>
    

<script src="main.js"></script>
</body>

</html>