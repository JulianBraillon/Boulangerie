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
            <div class="body-1-mere">
                <h1>Connexion</h1>
                <form action="#" method="post" class="body-1-fille">
                    @csrf
                    <div>
                        <label for="email">Adresse e-mail :</label>
                        <input type="email" placeholder="mdupont@gmail.com" name="mail">
                    </div>
                    <div>
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" placeholder="*******" name="mdp">
                    </div>
                    <button name="bouton">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>