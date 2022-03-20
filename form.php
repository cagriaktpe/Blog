<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="process_form.php">
        <div>
            text: <input type="text" name="text">
        </div>
        <div>
            textarea: <textarea name="content" rows="7" col="50">Placeholder</textarea>
        </div>
        <button>Send</button>
    </form>
</body>
</html>