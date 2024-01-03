<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
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
            <form action="/connexion" method="POST">
                @csrf
          <div class="m-5" style="margin-top:20px">
            <h4 class="text-center">Connexion</h4>
            <hr>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class ="form-control" placeholder="Entrer votre adresse email" name="email" value="">
            </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class ="form-control" placeholder="Entrer votre mot de passe" name="password" value="">
                </div>

                <hr>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Se connecter</button>
                    </div>
                    <a href="route('register')">Already registered !! login here.</a>
         </div>
        </form>
        </div>

    </div>

</body>
</html>
