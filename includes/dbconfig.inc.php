<?php

    $host = '127.0.0.1';
    $user = 'root';
    $pass = '';
    $db = 'social_media_app';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        die("Could not connect: " . ysqli_error($conn));
    }

?>