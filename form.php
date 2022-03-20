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
        <select name="country" id="country">
            <optgroup label="Europe">
                <option value="germany">Germany</option>
                <option value="france">France</option>
                <option value="uk">United Kingdom</option>
            </optgroup>
            <optgroup label="America">
                <option value="brazil" selected>Brazil</option>
                <option value="canada">Canada</option>
                <option value="usa">United States</option>
            </optgroup>
        </select>
        <button>Send</button>
    </form>
</body>
</html>