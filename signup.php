<?php
    require "header.php";
?>

    <main>
        <h1>Sign Up</h1>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="pwd" placeholder="password"/>
            <input type="password" name="pwd-confirm" placeholder="confirm password"/>
            <input class="btn btn-primary" type="submit" name="signup-submit" value="Sign Up">
        </form>
    </main>

<?php
    require "footer.php";
?>