
<?php
    /* 
    INSERT INTO article (title, content, published_at)
    VALUES ('title here', 'content here', 'published here')
    */
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        require './includes/database.php';

        $sql = "INSERT INTO article (title, content, published_at)
                VALUES ('" . $_POST['title'] . "','"
                        . $_POST['content'] . "','"
                        . $_POST['published_at'] . "')"; 
        
        $results = mysqli_query($conn, $sql);

        if ($results === false) {
            echo mysqli_error($conn);
        } else {
            $id = mysqli_insert_id($conn);
            echo "Inserted record with ID: $id";
        }
    }
?>
<?php require 'includes/header.php'; ?>

<h2>New Article</h2>

<form method="post">
    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="40" rows="4" placeholder="Article content"></textarea>
    </div>
    <div>
        <label for="published_at">Publication date and time</label>
        <input name="published_at" id="published_at" placeholder="Article publication date and time">
    </div>
    <button>Submit</button>
    
</form>

<?php require 'includes/footer.php'; ?>