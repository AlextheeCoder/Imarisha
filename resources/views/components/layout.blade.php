<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&family=Lemon&family=Oswald:wght@400;700&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul class="navbar">
            <div class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </div>
            <div class="sign">
                @auth
                <li> 
                    <div class="logout">
                        <form style="display:inline" method="POST" action="/logout" id="logout-form">
                            @csrf
                            <button type="submit" style="text-decoration: none; color:black; margin-right:20px;" >
                                <span class="text">Log Out</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span>
                            </button>
                    </div>
                  </form>
                </li>
                @else
                <li><a href="/login">Sign In</a></li>
                @endauth
            </div>
        </ul>
    </nav>    

    <main>
        {{$slot}}
    </main>

    <footer>
        <p>&copy; 2023 by Alex Mwai Muthee. All rights reserved.</p>
    </footer>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>