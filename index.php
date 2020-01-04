<?php
    require "header.php";
?>

    <main>
        <div class="center wrapper-main">
            <?php
                if (isset($_SESSION['username'])) {
                    require "app.php";
                } else {
                    require "login.php";
                }
            ?>
        </div>
    </main>