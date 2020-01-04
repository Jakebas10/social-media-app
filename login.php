<div class="login">
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <input class="btn btn-light" type="submit" name="login-submit" value="Log In">
    </form>
</div>
<div class="signup-logout">
    <a class="btn btn-secondary" href="signup.php">Sign Up</a>
    <form action="includes/login.inc.php" method="post">
        <input class="btn btn-secondary" type="submit" name="logout-submit" value="Log Out">
    </form>
</div>