<?php

require 'database.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $sql = "SELECT *
    FROM article
    WHERE id = " . $_GET['id'];

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_assoc($results);
    }
} else {
    $articles = null;
}


?>
<?php require 'header.php' ?>
        <?php if ($articles == null): ?>
          <p>Article not found.</p>
        <?php else: ?>
          <article>
            <h2><?= $articles['title']; ?></h2>
            <p><?= $articles['content']; ?></p>
          </article>  
        <?php endif; ?>
<?php require 'footer.php' ?>
