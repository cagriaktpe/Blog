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
        <p>Which colours do you like?</p>
        <div>
            <input type="checkbox" name="colors[]" value="red" id="red">
            <label for="red">Red</label>
        </div>
        <div>
            <input type="checkbox" name="colors[]" value="green" id="green">
            <label for="green">Green</label>
        </div>
        <div>
            <input type="checkbox" name="colors[]" value="blue" id="blue">
            <label for="blue">Blue</label>
        </div>
        <button>Send</button>
    </form>
</body>
</html>