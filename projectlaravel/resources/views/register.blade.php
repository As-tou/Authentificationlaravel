<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            width: 300px; /* Définir la largeur du formulaire */
            /* Ajouter d'autres styles si nécessaire */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class ="row">
          <div class="col-md-4col-md-offset-4" style="margin-top:20px">
            <h4>Inscription</h4>
            <hr>
            <form action="/inscription"  method="POST">
              @csrf
                <div class="form-group">
                    <label for="name">prenom</label><br>
                    <input type="text" class ="form-control" placeholder="Entrer votre prenom" name="prenom" value=""><br>
                </div>
                <div class="form-group">
                    <label for="name">nom</label><br>
                    <input type="text" class ="form-control" placeholder="Entrer votre nom" name="nom" value=""><br>
                </div>
                <div class="form-group">
                    <label for="email">email</label><br>
                    <input type="text" class ="form-control" placeholder="Entrer votre adresse mail" name="email" value=""><br>
                </div>
                <div class="form-group">
                    <label for="password">telephone</label>
                    <input type="text" class ="form-control" placeholder="Entrer votre numero de telephone" name="telephone" value="">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" class ="form-control" placeholder="Entrer votre mot de passe" name="password" value="">
                </div>

                <hr>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">S'inscrire</button>
                    </div>
                    <a href="registration">Nouveau utilisateur !! Register here.</a>
            </form>
          </div>

        </div>

    </div>



</body>
</html>
