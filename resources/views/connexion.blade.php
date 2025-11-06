<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Connexion.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>Connexion - Le pain d'Antan</title>
</head>

<body>
    @include('layout.header')
    <div class="body-1">
        <div class="imageArrierePlan">
            <h1>Connexion</h1>
            <form action="#" method="post">
                <input type="mail" placeholder="email.com">
                <input type="password">
                <input type="text">
                <input type="text">
                <input type="text">
            </form>

        </div>
    </div>

</body>

</html>