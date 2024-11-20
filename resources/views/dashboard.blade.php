<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>مرحبًا بك {{ $user->username }}</h1>
    <p>بريدك الإلكتروني هو: {{ $user->email }}</p>
</body>
</html>
