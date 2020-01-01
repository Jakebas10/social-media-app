<?php
    require "header.php";
?>

    <main>
        <div class="center wrapper-main">
            <?php
                if (isset($_SESSION['username'])) {
                    require "app.php";
                } else {
                    echo "<h1>you are logged out</h1>";
                }
            ?>
        </div>
    </main>