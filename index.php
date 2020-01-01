<?php
    require "header.php";
?>

    <main>
        <div class="center wrapper-main">
            <?php
                if (isset($_SESSION['username'])) {
                    echo "<h1>" . $_SESSION['username'] . " is logged in</h1>";
                } else {
                    echo "<h1>you are logged out</h1>";
                }
            ?>
        </div>
    </main>