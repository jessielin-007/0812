<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>

    <form method="post" action="/lab/form/3?data=999">
        @csrf
        First name:
        <input type="text" name="firstName"> <br>
        Last name:
        <input type="text" name="lastName"> <br>
        <input type="submit" value="OK">
    </form>
</body>
</html>