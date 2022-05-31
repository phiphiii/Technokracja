<!DOCTYPE html>
<html lang="pl">
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
          <h1>Rejestracja</h1>
          <form action="includes/register.inc.php" method="post">
            <div class="txt_field">
              <input name="username" type="text" required>
              <span></span>
              <label>Nazwa użytkownika</label>
            </div>
            <div class="txt_field">
                <input name="email" type="text" required>
                <span></span>
                <label>E-mail</label>
              </div>
            <div class="txt_field">
              <input name="password" type="password" required>
              <span></span>
              <label>Hasło</label>
            </div>
            <div class="txt_field">
                <input name="password2" type="password" required>
                <span></span>
                <label>Powtórz hasło</label>
              </div>
            <input name="submitSignup" type="submit" value="Utwórz konto">
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyfields"){
                    echo "<p>Wypełnij wszystkie pola!</p>";
                }
                else if($_GET["error"] == "invaliduser"){
                    echo "<p>Wybierz poprawną nazwę użytkownika</p>";
                }
                else if($_GET["error"] == "invalidemail"){
                    echo "<p>Taki email nie może istnieć</p>";
                }
                else if($_GET["error"] == "invalidpasswordcheck"){
                    echo "<p>Podane hasła ze sobą nie pasują</p>";
                }
                else if($_GET["error"] == "usertaken"){
                    echo "<p>Email lub nazwa użytkownika już jest zajęta</p>";
                }
                else if($_GET["error"] == "none"){
                  echo "<p>Pomyślnie zarejestrowanie konta, proszę się zalogować</p>";
                }
            }
        ?>
            <div class="signup_link">
              Jesteś już zarejestrowany? <a href="login.php">Zaloguj się</a>
              <a href="index.php"> Powrót na strone główną</a>
            </div>
          </form>
        </div>
    
      </body>
    </html>
    

<script src="main.js"></script>
</body>

</html>