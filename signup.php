<?php
    require "header.php";
?>

    <main>
        <div class="center wrapper-main"/>
        <h1>Sign Up</h1>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="username" placeholder="username"/><br>
            <input type="password" name="pwd" placeholder="password"/><br>
            <input type="password" name="pwd-confirm" placeholder="confirm password"/><br>
            <input class="btn btn-primary" type="submit" name="signup-submit" value="Sign Up">
        </form>
    </main>