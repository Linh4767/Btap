<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
</head>
<body>
    <h1>Delete</h1>
    <form action="{{ url('/photo/' .$id) }}" method="post">
        @method('DELETE')
        @csrf
        Name: <input type="text" name="name"><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>