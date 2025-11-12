<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Accueil.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>Accueil - Le pain d'Antan</title>
</head>

<body>
    @include ('layout.header')
    <div class="body-1">
        <div class="imageArrierePlan">
            <h1>Le Pain d'Antan</h1>
            <p> cococ</p>
            @if (session('success'))
                {{ session('success') }}
            @endif
            {{ session('user_name') }}
            <p>" Le vrai goût du temps passé  {{  Auth::user() ?? 'rien' }}"</p>
            <a href="#">Découvrir nos créations</a>
        </div>
    </div>
    <div class="body-2">
        <div class="body-2-grand-mere">
            <h2>Mise en avant des <br>produits du jour</h2>
            <div class="body-2-mere-1">
                <div class="body-2-fille-1">
                    <h3>Galette des Rois</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt quidem autem aperiam enim at.
                        Ratione exercitationem sed corrupti veniam nihil consectetur, ad, vel dolorum a repudiandae
                        beatae reprehenderit similique quibusdam?</p>
                    <a href="#">En savoir plus</a>
                </div>
                <div class="body-2-fille-1">
                    <h3>Bûche de Noël</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt quidem autem aperiam enim at.
                        Ratione exercitationem sed corrupti veniam nihil consectetur, ad, vel dolorum a repudiandae
                        beatae reprehenderit similique quibusdam?</p>
                    <a href="#">En savoir plus</a>
                </div>
                <div class="body-2-fille-1">
                    <h3>Brioche</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt quidem autem aperiam enim at.
                        Ratione exercitationem sed corrupti veniam nihil consectetur, ad, vel dolorum a repudiandae
                        beatae reprehenderit similique quibusdam?</p>
                    <a href="#">En savoir plus</a>
                </div>
            </div>
            <h2>Meilleures ventes</h2>
            <div class="body-2-mere-1">
                <div class="body-2-fille-1">
                    <h3>Galette des Rois</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt quidem autem aperiam enim at.
                        Ratione exercitationem sed corrupti veniam nihil consectetur, ad, vel dolorum a repudiandae
                        beatae reprehenderit similique quibusdam?</p>
                    <a href="#">En savoir plus</a>
                </div>
                <div class="body-2-fille-1">
                    <h3>Bûche de Noël</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt quidem autem aperiam enim at.
                        Ratione exercitationem sed corrupti veniam nihil consectetur, ad, vel dolorum a repudiandae
                        beatae reprehenderit similique quibusdam?</p>
                    <a href="#">En savoir plus</a>
                </div>
                <div class="body-2-fille-1">
                    <h3>Brioche</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt quidem autem aperiam enim at.
                        Ratione exercitationem sed corrupti veniam nihil consectetur, ad, vel dolorum a repudiandae
                        beatae reprehenderit similique quibusdam?</p>
                    <a href="#">En savoir plus</a>
                </div>
            </div>
            <a href="#">Ajouter au panier</a>
        </div>
    </div>
</body>

</html>