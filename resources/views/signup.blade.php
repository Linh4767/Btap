<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
</head>
<body>
    <form action="{{url('process')}}" method="post">
        @csrf
        Name: <input type="text" name="name"><br>
        Pass: <input type="password" name="pass"><br>
        <input type="submit" value="Sig Up">
    </form>
</body>
</html>