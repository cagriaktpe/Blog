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
            password: <input type="password" name="password">
        </div>
        <div>
            tel: <input type="tel" name="tel">
        </div>
        <div>
            url: <input type="url" name="url">
        </div>
        <div>
            date: <input type="date" name="date">
        </div>
        <div>
            time: <input type="time" name="time">
        </div>
        <div>
            week: <input type="week" name="week">
        </div>
        <div>
            color: <input type="color" name="color">
        </div>
        <div>
            email: <input type="email" name="email">
        </div>
        <div>
            month: <input type="month" name="month">
        </div>
        <div>
            range: <input type="range" name="range">
        </div>
        <div>
            hidden: <input name="hidden" type="hidden" value="control">
        </div>
        <div>
            number: <input name="number" type="number">
        </div>
        <button>Send</button>
    </form>
</body>
</html>