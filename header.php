<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <title>Social Media App</title>
    </head>
    <body>

        <header>
            <a class="home-button" href="index.php">
                <img class="home-img" src="img/home.png" alt="home">
            </a>
            <div class="login-logout">
                <div>
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="username" placeholder="username"/>
                        <input type="password" name="password" placeholder="password"/>
                        <input type="submit" name="login-submit" value="Log In">
                    </form>
                </div>
                <button href="signup.php">Sign Up</button>
                <form action="includes/logout.inc.php" method="post">
                    <input type="submit" name="logout-submit" value="Log Out">
                </form>
            </div>
        </header>