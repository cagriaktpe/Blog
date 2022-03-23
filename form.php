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
            postcode: <input 
            name="postcode" 
            pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}"
            title="Please enter a valid UK postcode">
        </div>
        <div>
            email: <input type="email" name="email" required> 
        </div>
        <div>
            url: <input type="url" name="url">
        </div>
        <div>
            number: <input type="number" name="count" min="1" max="10">
        </div>
        <button>Send</button>
        
    </form>
</body>
</html>