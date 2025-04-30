<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">  <!-- Assuming you have styles -->
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('posts.index') }}">Home</a></li>
        </ul>
    </nav>

    <div class="container">
        <!-- This is where the content of the page will go -->
        @yield('content')
    </div>
</body>
</html>