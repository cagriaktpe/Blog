
<?php
    /* 
    INSERT INTO article (title, content, published_at)
    VALUES ('title here', 'content here', 'published here')
    */
    require './includes/database.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $conn = getDB();

        $sql = "INSERT INTO article (title, content, published_at)
                VALUES (?, ?, ?)"; 
        
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            echo mysqli_error($conn);
        } else {
            mysqli_stmt_bind_param($stmt, "sss", $_POST['title'], $_POST['content'], $_POST['published_at']);
            
            if(mysqli_stmt_execute($stmt)) {
                $id = mysqli_insert_id($conn);
                echo "Inserted record with ID: $id";
            } else {
                echo mysqli_stmt_error($stmt);
            }
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