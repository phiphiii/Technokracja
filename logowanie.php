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
        <h1>Logowanie</h1>
        <form action="includes/logowanie.inc.php" method="post">
            <label for="Email" >Email</label>

            <input type="text" id="email" name="email" placeholder="your.email@mail.com">

            <label for="password">Wpisz hasło</label>
            <input type="password" id="password" name="password">
            <input id="chkShowPassword" type="checkbox" onclick="showPassword()" /> <!--https://www.youtube.com/watch?v=G8x1cM6dvlM&t=95s&ab_channel=ProgrammingwithProfessorSluiter-->

            <button name="submitLogin" type="submit" class="submit-jd">Zaloguj się</button>
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyfields"){
                    echo "<p>Wypełnij wszystkie pola!</p>";
                }
                else if($_GET["error"] == "wronglogin"){
                    echo "<p>Zły email</p>";
                }
                else if($_GET["error"] == "wrongpassword"){
                    echo "<p>Złe hasło</p>";
                }
            }
        ?>
        </form>
    </section>
</body>
</html>