<?php
    require "header.php";
?>

    <main>
        <div class="center wrapper-main"/>
        <h1>Sign Up</h1>
        <form class="center signup-form" action="includes/signup.inc.php" method="post">
            <input class="form-control" type="text" name="username" placeholder="username"/><br>
            <input class="form-control" type="password" name="pwd" placeholder="password"/><br>
            <input class="form-control" type="password" name="pwd-confirm" placeholder="confirm password"/><br>
            <input class="btn btn-primary btn-block" type="submit" name="signup-submit" value="Sign Up">
        </form>
    </main>