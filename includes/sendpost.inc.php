<?php
    if (isset($_POST['post-submit'])) {

        session_start();
        
        try {
            require 'dbconfig.inc.php';
        } catch(Exception $e) {
            header("Location: ../index.php?error=dbConnIssue");
            exit();
        }

        $uid = $_SESSION['uid'];
        $post = $_POST['post'];

        if (empty($post)) {
            header("Location: ../index.php?error=emptyFields&username=" . $username);
            exit();
        }

        $query = "insert into posts(user_id, post) values ('$uid', '$post')";

        if (mysqli_query($conn, $query)) {
            header("Location: ../index.php?action=postSubmitted&username=" . $_SESSION['username']);
            exit();
        } else {
            echo mysqli_error($conn);
        }

    }
?>