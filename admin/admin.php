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
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <span class="logo"><img src="" alt=""></span>
            <?php include_once "inc/script_login.php"?>
                <?php if(isset($erreur)){ echo $erreur;}?>
               <form action="" method="post">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control input-sm chat-input" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control input-sm chat-input" name="password" placeholder="Password">
                  </div>
                  <button type="submit" name="submit" class="btn btn-black">Se connecter</button>
                  <button type="submit" class="btn btn-secondary">S'enrégistrer</button>
               </form>
            </div>
         </div>
      </div>
    
</body>
</html>