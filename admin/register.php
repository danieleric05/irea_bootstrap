<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/register.php">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Admin Page d'enregistrement</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login-form">

                    <form action="register.php" method="post">
                        <h1 class="text-center">Enregistrement</h1>
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control input-sm chat-input" name="nom" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label>Prénoms</label>
                            <input type="text" class="form-control input-sm chat-input" name="prenom"
                                placeholder="Prénoms">
                        </div>
                        <div class="form-group">
                            <label>Nom d'utilisateur</label>
                            <input type="text" class="form-control input-sm chat-input" name="username"
                                placeholder="Prénoms">
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control input-sm chat-input" name="password"
                                placeholder="Mot de passe">
                        </div>
                        <div class="form-group">
                            <label>Confirmer le Mot de passe</label>
                            <input type="password" class="form-control input-sm chat-input" name="password"
                                placeholder="Mot de passe">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary">S'enregistrer</button>
                        </div>

                        <div class="form-group">
                            <p>Si vous n'est pas enregistré, cliquez sur ce bouton</p>
                            <a href="login.php" class="btn btn-primary">Se connectez</a>
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>