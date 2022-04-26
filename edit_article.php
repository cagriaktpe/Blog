<?php

require './includes/database.php';
require 'includes/article.php';

$conn = getDB();

if(isset($_GET['id'])) {

    $articles = getArticle($conn, $_GET['id']);

} else {

    $articles = null;

}

var_dump($articles);