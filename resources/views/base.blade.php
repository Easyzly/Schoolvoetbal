<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
</head>
<body>
    <header>
        <div class="header">
            <a href="{{ Route('home') }}">Stichting Schoolsport</a>
            <a href="{{ Route('dashboard') }}"><ion-icon name="person-outline"></ion-icon></a>
        </div>
    </header>
    <nav>
        <a href="{{ Route('teams') }}">Teams</a>
        <a href="{{ Route('home') }}">Home</a>
        <a href="{{ Route('games') }}">Games</a>
    </nav>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <p>Gemaakt door Groep 4 Praktijk</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>