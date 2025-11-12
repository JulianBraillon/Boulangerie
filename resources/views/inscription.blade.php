<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Inscription.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>Inscription - Le pain d'Antan</title>
</head>

<body>
    @include('layout.header')
    <div class="body-1">
        <div class="imageArrierePlan">
            <div class="body-1-mere">
                <h1>Inscription</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ url('/inscription') }}" method="post" class="body-1-fille">
                    @csrf
                    <div>
                        <label for="nom">Nom d'utilisa•teur•trice :</label>
                        <input type="text" placeholder="Marie Dupont" name="nom">
                    </div>
                    <div>
                        <label for="email">Adresse e-mail :</label>
                        <input type="email" placeholder="mdupont@gmail.com" name="mail">
                    </div>
                    <div>
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" placeholder="*******" name="mdp">
                    </div>
                    <div>
                        <label for="tel">N° de Téléphone :</label>
                        <input type="tel" name="tel" placeholder="01 54 36 78 95">
                    </div>
                    <div>
                        <label for="email">Adresse complète :</label>
                        <input type="text" name="adresse" placeholder="55 rue des tournesols">
                    </div>
                    <div>
                        <label for="email">Code postal :</label>
                        <input type="number" name="codePostal" placeholder="69">
                    </div>
                    <button name="bouton">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>