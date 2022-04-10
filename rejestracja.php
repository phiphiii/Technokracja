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
        <label for="Email" >Email</label>

        <input type="text" id="email" name="email" placeholder="your.email@mail.com">
        <label for="Email" >Nazwa użytkownika</label>

        <input type="text" id="username" name="username" placeholder="amogus123">
        <label for="password">Wpisz hasło</label>
        <input type="password" id="password" name="password">
        <label for="password">Powtórz hasło</label>
        <input type="password" id="password2" name="password2">
        <input id="chkShowPassword" type="checkbox" onclick="showPassword()" /> <!--https://www.youtube.com/watch?v=G8x1cM6dvlM&t=95s&ab_channel=ProgrammingwithProfessorSluiter-->

        <input type="submit" class="submit-jd" value="Zaloguj się">
        <?php
            //Tylko do testów potemo można usunąć
            function alert($msg) {
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }

            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "demokracjadb";

            $conn = new mysqli($host, $username, $password, $database);

            if($conn->connect_errno){
                echo "Falied to connect to MySQL: (".$conn->connect_errno.") ".$conn->connect_error;
            }
            else{
                alert("Poprawne połączenie z bazą danych");
            }
            //echo $conn->host_info."\n";

            $conn->close();
        ?>
</form>
</section>

</body>
</html>