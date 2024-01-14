<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          
            @auth
            <li> 
                <form style="display:inline" method="POST" action="/logout" id="logout-form">
                @csrf
                <button type="submit" style="text-decoration: none; color:black; margin-right:20px;" >
                  <i class="fa fa-sign-out"></i> Logout
                </button>
              </form>
            </li>
            @else
            <li><a href="/register">Sign In</a></li>
            @endauth
        
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