<?php

require './includes/database.php';
require 'includes/article.php';
require 'includes/url.php';

$conn = getDB();

if(isset($_GET['id'])) {

    $articles = getArticle($conn, $_GET['id']);

    if($articles) {

    $id = $articles['id'];
    $title = $articles['title'];
    $content = $articles['content'];
    $published_at = $articles['published_at'];
    
    } else {
        die("article not found");
    }

} else {

    die("id not supplied, article not found");

}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];

    $errors = validateArticle($title, $content, $published_at);

    if(empty($errors)) {

        $sql = "UPDATE article
                SET title = ?,
                    content = ?,
                    published_at = ?
                WHERE id = ?;"; 
        
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            echo mysqli_error($conn);
        } else {

            if($published_at == '') {
                $published_at = null;
            }

            mysqli_stmt_bind_param($stmt, "sssi", $title, $content, $published_at, $id);
            
            if(mysqli_stmt_execute($stmt)) {

                redirect("/article.php?id=$id");
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
}

?>
<?php require 'includes/header.php'; ?>

<h2>Edit Article</h2>

<?php require 'includes/article_form.php'; ?>

<?php require 'includes/footer.php'; ?>