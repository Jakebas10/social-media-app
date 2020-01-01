<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <title>Social Media App</title>
    </head>
    <body>

        <header class="center nav-bar-main">
            <a class="home-button" href="index.php">
                <img class="home-img" src="img/home.png" alt="home">
            </a>
            <div class="login-form">
                <div class="login">
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="username" placeholder="username"/>
                        <input type="password" name="password" placeholder="password"/>
                        <input class="btn btn-light" type="submit" name="login-submit" value="Log In">
                    </form>
                </div>
                <div class="signup-logout">
                    <a class="btn btn-secondary" href="signup.php">Sign Up</a>
                    <form action="includes/login.inc.php" method="post">
                        <input class="btn btn-secondary" type="submit" name="logout-submit" value="Log Out">
                    </form>
                </div>
            </div>
        </header>