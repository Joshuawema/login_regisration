<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="get" action="display.php">
    Name: <label>
        <input type="text" name="name">
    </label>
    <br><br>
    E-mail: <label>
        <input type="text" name="email">
    </label>
    <br><br>
    Comment: <label>
        <textarea name="comment" rows="5" cols="40"></textarea>
    </label>
    <br><br>
    Gender:
    <label>
        <input type="radio" name="gender" value="female">
    </label>Female
    <label>
        <input type="radio" name="gender" value="male">
    </label>Male
    <label>
        <input type="radio" name="gender" value="other">
    </label>Other
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>