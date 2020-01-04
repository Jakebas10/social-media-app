<?php

    define("NOT_UNIQUE", 1062);

    if (isset($_POST['signup-submit'])) {

        require 'dbconfig.inc.php';

        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $pwd_confirmed = $_POST['pwd-confirm'];

        if (empty($username) || empty($pwd) || empty($pwd_confirmed)) {
            header("Location: ../signup.php?error=emptyFields&username=" . $username);
            exit();
        } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=malformedUsername&username=" . $username);
            exit();
        } else if ($pwd != $pwd_confirmed) {
            header("Location: ../signup.php?error=pwdConfirmedDoesntMatch&username=" . $username);
            exit();
        } else {
            $username = mysqli_real_escape_string($conn, $username);
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        }

        $query = "insert into users(username, password) values ('$username', '$pwd')";

        if (mysqli_query($conn, $query)) {
            header("Location: ../index.php?action=accountCreated&username=" . $username);
            exit();
        } else if (mysqli_errno($conn) == NOT_UNIQUE) {
            header("Location: ../signup.php?error=duplicateUsername&username=" . $username);
        } else {
            echo mysqli_error($conn);
        }

    }
?>