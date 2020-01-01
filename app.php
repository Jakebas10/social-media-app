<?php
    require "header.php";
?>

    <main>
        <div class="center wrapper-main">
            <h1>You are logged in</h1>
            <?php
                echo $_SESSION['username'];
            ?>
        </div>
        
    </main>