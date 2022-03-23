<?php
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Article</legend>
            <div>
                <label for="title">Title:</label> <input type="text" name="title" id="title" placeholder="Article title">
            </div>
            <div>
                <label for="content">Content:</label>
                <textarea name="content" id="content" cols="40" rows="4" placeholder="Content"></textarea>
            </div>
        </fieldset>
        <fieldset>
            <legend>Attributes</legend>
            <div>
                <label><input type="checkbox" name="visible" id="visible" value="yes">Visible</label>
            </div>
        </fieldset>
        <fieldset>
            <legend>Color</legend>
            <label><input type="radio" name="color" id="blue" value="blue" checked>Blue</label><br>
            <label><input type="radio" name="color" id="red" value="red" >Red</label><br>
            <label><input type="radio" name="color" id="green" value="green">Green</label>
        </fieldset>
        
        <button>Send</button>
        
    </form>
</body>
</html>