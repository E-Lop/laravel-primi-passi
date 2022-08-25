<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
</head>
<body>
<header>
    <a href="{{ route('about') }}">Vai ad Chi-siamo</a>
    <a href="{{ route('projects') }}">Vai a Progetti</a>
    <a href="{{ route('tools') }}">Vai a Risorse</a>
</header>    

<main>
    <h1>Hello World</h1>
    <p>My name is {{ $name }}</p>
</main>
</body>
</html>