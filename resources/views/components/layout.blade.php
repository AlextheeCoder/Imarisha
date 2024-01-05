<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="#">About Apollo</a> |
            <a href="#">I am a Farmer</a> |
            <a href="#">I am an Agrodealer</a> |
            <a href="#">News</a> |
             <a href="#">Work with us</a>  
        </nav>
    </header>

    <main>
        {{$slot}}
    </main>

    <footer>
        <p>&copy; 2023 by Alex Mwai Muthee. All rights reserved.</p>
    </footer>

</body>
</html>