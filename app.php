<div class="username-label">
    <?php
        echo "<h2>Hello, " . $_SESSION['username'] . "!</h2>";
    ?>
</div>
<form class="post-form" action="includes/sendpost.inc.php" method="post">
    <textarea class="form-control" rows="2" cols="50" name="post" placeholder="What do you want to post?"></textarea>
    <input class="btn btn-primary btn-block" type="submit" name="post-submit" value="Post">
</form>