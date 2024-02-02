<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App Name')</title>
    <!-- Ajoutez ici vos liens vers les fichiers CSS ou d'autres scripts nécessaires -->
</head>
<body>
    <nav>
        <!-- Ajoutez ici votre barre de navigation si nécessaire -->
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Ajoutez ici vos scripts JavaScript si nécessaire -->
</body>
</html>
