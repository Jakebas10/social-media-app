<?php

    function validLogin($user) {
        session_start();
        $_SESSION['uid'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ../index.php");
        exit();
    }

    function invalidLogin() {
        header("Location: ../index.php?error=invalidLogin");
        exit();
    }

    if (isset($_POST['login-submit'])) {

        try {
            require 'dbconfig.inc.php';
        } catch(Exception $e) {
            header("Location: ../index.php?error=dbConnIssue");
            exit();
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            header("Location: ../index.php?error=emptyFields&username=" . $username);
            exit();
        }

        $query = "select * from users where username = '$username'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];
            if(password_verify($password, $hashed_password)) {
                validLogin($row);
            } else {
                invalidLogin();
            }
         } else {
            invalidLogin();
         }

         mysqli_close($conn);
    } else if (isset($_POST['logout-submit'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../index.php?action=loggedOut");
        exit();
    }
?>