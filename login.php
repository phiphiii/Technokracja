<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="post">
            <label>E-mail</label>
            <input type="text" name="email" placeholder="your.email@mail.com"/>
            <label>Password</label>
            <input type="password" name="password"/>
            <?php
                $host = "localhost";
                $username = "root";
                $password = "";
                $database = "technokracja";

                $conn = new mysqli($host, $username, $password, $database);

                if($conn->connect_errno){
                    echo "Falied to connect to MySQL: (".$conn->connect_errno.") ".$conn->connect_error;
                }
                echo $conn->host_info."\n";

                $conn->close();
            ?>
        </form>
    </body>
</html>