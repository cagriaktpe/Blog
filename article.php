<?php

require './includes/database.php';
require 'includes/article.php';

$conn = getDB();

if(isset($_GET['id'])) {
    $articles = getArticle($conn, $_GET['id']);
} else {
    $articles = null;
}


?>
<?php require './includes/header.php' ?>
        <?php if ($articles == null): ?>
          <p>Article not found.</p>
        <?php else: ?>
          <article>
            <h2><?= htmlspecialchars($articles['title']); ?></h2>
            <p><?= htmlspecialchars($articles['content']); ?></p>
          </article>
          
          <a href="edit_article.php?id=<?= $articles['id'] ?>">Edit</a>
        <?php endif; ?>
<?php require './includes/footer.php' ?>
