<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<section class="signup-form">
    <h2>Zarejestruj się</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Imie">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="Login">
        <input type="password" name="pwd" placeholder="Hasło">
        <input type="password" name="pwdrepeat" placeholder="Powtórz hasło">
        <button type="submit" name="submit">Zarejestruj się</button>
    </form>
    
    
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Wypełnij wszystkie pola</p>";
        }
        else if($_GET["error"] == "invaliduid"){
            echo "<p>Nieprawidłowy login</p>";
        }
        else if($_GET["error"] == "invalidemail"){
            echo "<p>Nieprawidłowy email e-mail</p>";
        }
        else if($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Hasła nie są takie same</p>";
        }
        else if($_GET["error"] == "stmtfailed"){
            echo "<p>Coś poszło nie tak, spróbuj ponownie</p>";
        }
        else if($_GET["error"] == "usernametaken"){
            echo "<p>Nazwa jest zajęta</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p>Brawo! Zarejestrowałeś się</p>";
        }
    }
?>
</section>



<script src="js/script.js"></script>
</body>
</html>