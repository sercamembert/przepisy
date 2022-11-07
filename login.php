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
    <h2>Zaloguj się</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Login/email">
        <input type="password" name="pwd" placeholder="Hasło">
        <button type="submit" name="submit">Zaloguj się</button>
    </form>

    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Wypełnij wszystkie pola!</p>";
        }
        else if($_GET["error"] == "wronglogin"){
            echo "<p>Nieprawidłowy login lub hasło!</p>";
        }
    }
?>
</section>


<script src="js/script.js"></script>
</body>
</html>