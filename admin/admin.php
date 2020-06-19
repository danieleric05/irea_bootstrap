<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/main.css">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Admin Page</title>
</head>
<body>  


    <div class="sidenav">
         <div class="login-main-text">
            <h2>Application De Gestion IREA<br> Page de Connexion</h2>
            <p>Connecter Vous ou Enrégistrer vous !</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <?php include_once "inc/script_login.php"?>
                <?php if(isset($erreur)){ echo $erreur;}?>
               <form action="" method="post">
                  <div class="form-group">
                     <label>Nom d'utilisateur</label>
                     <input type="text" class="form-control input-sm chat-input" name="username" placeholder="Utilisateur">
                  </div>
                  <div class="form-group">
                     <label>Mot de passe</label>
                     <input type="password" class="form-control input-sm chat-input" name="password" placeholder="Mot de passe">
                  </div>
                  <button type="submit" name="submit" class="btn btn-black">Se connecter</button>
                  <button type="submit" class="btn btn-secondary">S'enregistrer</button>
               </form>
            </div>
         </div>
      </div>
    
</body>
</html>