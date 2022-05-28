<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML">
        <meta name="description" content="technokracja2115">
        <meta name="author" content="Bro">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="main_js.js"></script>
        <title>Technokracja</title>
    </head>
    <body>
        <section class="log">

            <h1>Rejestracja</h1>
            <form action="includes/rejestracja.inc.php" method="post">
                <label for="Email" >Email</label>
                <input type="text" id="email" name="email" placeholder="your.email@mail.com">

                <label for="Email" >Nazwa użytkownika</label>
                <input type="text" id="username" name="username" placeholder="amogus123">

                <label for="password">Wpisz hasło</label>
                <input type="password" id="password" name="password">

                <label for="password">Powtórz hasło</label>
                <input type="password" id="password2" name="password2">

                <input id="chkShowPassword" type="checkbox" onclick="showPassword()" /> <!--https://www.youtube.com/watch?v=G8x1cM6dvlM&t=95s&ab_channel=ProgrammingwithProfessorSluiter-->

                <button name="submitSignup" type="submit" class="submit-jd">Zaloguj się</button>
            </form>
        </section>
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
                else if($_GET["error"] == "invalidmailuser"){
                    echo "<p>Email oraz nazwa użytkownika zostały źle wpisane</p>";
                }
                else if($_GET["error"] == "invalidpasswordcheck"){
                    echo "<p>Podane hasła ze sobą nie pasują</p>";
                }
                else if($_GET["error"] == "sqlerror"){
                    echo "<p>Coś poszło nie tak, spróbuj ponownie</p>";
                }
            }
        ?>

    </body>
</html>