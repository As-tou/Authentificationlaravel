<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/inscription">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/connexion">Connexion</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">

                    <a class="nav-link" href="/deconnexion">Deconnexion</a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="#">{{Auth::user()->prenom}}</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center m-5">Bienvenue sur Notre Site Web!</h1>
        <h2>MEMBRES DU GROUPE</h2>
               <ol>
                <li>KHADIDIATOU DIOUF</li>
                <li>YACINE FAYE</li>
                <li>ASTOU DRAME KANDJI</li>
                <li>NDEYE LEMOU NDAO</li>
               </ol>
    </div>

        @if(session('user_name'))
            <h1>{{ session('user_name') }}, vous êtes connecté(e)</h1>
        @endif


    </body>
    </html>

</html>
