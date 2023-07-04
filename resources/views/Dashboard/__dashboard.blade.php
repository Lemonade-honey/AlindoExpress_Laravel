<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>level auth {{ Auth::user()->role }}</h2>
    <a href="/dashboard/logout">logout</a>
</body>
</html>