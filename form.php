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
        <div>
            <p>Which colours do you like?</p>
            <div>
                <input type="radio" id="blue" name="color" value="blue">
                <label for="blue">Blue</label>
            </div>     
            <div>
                <input type="radio" id="red" name="color" value="red" checked>
                <label for="red">Red</label>
            </div>   
            <div>
                <input type="radio" id="purple" name="color" value="purple">
                <label for="purple">Purple</label>
            </div>   
        </div>    
        <button>Send</button>
        
    </form>
</body>
</html>