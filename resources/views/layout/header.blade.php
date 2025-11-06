<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/layout/Header.css') }}">
</head>

<body>
    <div class="header">
        <div class="left-header">
            <p>• 01 23 45 67 89</p>
            <p>• Ouvert du mardi au dimanche : 7h - 19h</p>
        </div>
        <div class="mid-header">
            <a href="{{ url('/') }}">• Accueil</a>
            <a href="{{ url('/boutique') }}">• Boutique</a>
        </div>
        <div class="right-header">
            <a href="{{ url('/inscription') }}">Inscription</a>
            <a href="{{ url('/connexion') }}">Connexion</a>
        </div>
    </div>
</body>

</html>