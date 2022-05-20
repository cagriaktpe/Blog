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

$sql = "DELETE FROM article
        WHERE id = ?;"; 
        
$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
    echo mysqli_error($conn);
} else {

    mysqli_stmt_bind_param($stmt, "i", $id);
            
    if(mysqli_stmt_execute($stmt)) {

        redirect("/index.php");
    } else {
        echo mysqli_stmt_error($stmt);
    }
}