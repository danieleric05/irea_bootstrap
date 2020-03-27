<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!------ Pour le formulaire ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/form.js"></script>

    <title>IREA</title>
</head>

<body>
    <!--<header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08"
                aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav d-lg-none d-xl-none d-block d-md-block d-sm-block">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo-irea.jpg" width="30" height="30" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item d-none d-sm-none d-md-none d-lg-block d-xl-block">
                        <a class="navbar-brand py-0" href="#">
                            <img src="img/logo-irea.jpg" width="86" height="42" alt="logo irea">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-2" role="button" href="index1.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-2" href="join.php">Rejoignez-nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-2" role="button"
                            href="partenaire.php">Partenaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-2" role="button"
                            href="prestations.php">Prestations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-2" role="button" href="#">Contactez-nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-2" role="button" href="#">Connexion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>-->
    <main class="main">
        <div class="container">

            <div id="signupbox" style=" margin-top:50px"
                class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Devis</div>
                        
                    <div class="panel-body">
                        <form method="post" action=".">
                            <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />


                            <form class="form-horizontal" method="post">
                                <input type='hidden' name='csrfmiddlewaretoken'
                                    value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                                <div id="div_id_select" class="form-group required">
                                    <label for="id_select" class="control-label col-md-4  requiredField"> Select<span
                                            class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 " style="margin-bottom: 10px">
                                        <label class="radio-inline"><input type="radio" checked="checked" name="select"
                                                id="id_select_1" value="S" style="margin-bottom: 10px">Knowledge
                                            Seeker</label>
                                        <label class="radio-inline"> <input type="radio" name="select" id="id_select_2"
                                                value="P" style="margin-bottom: 10px">Knowledge Provider </label>
                                    </div>
                                </div>
                                <div id="div_id_As" class="form-group required">
                                    <label for="id_As" class="control-label col-md-4  requiredField">As<span
                                            class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 " style="margin-bottom: 10px">
                                        <label class="radio-inline"> <input type="radio" name="As" id="id_As_1"
                                                value="I" style="margin-bottom: 10px">Individual </label>
                                        <label class="radio-inline"> <input type="radio" name="As" id="id_As_2"
                                                value="CI" style="margin-bottom: 10px">Company/Institute </label>
                                    </div>
                                </div>
                                <div id="div_id_username" class="form-group required">
                                    <label for="id_username" class="control-label col-md-4  requiredField">
                                        Nom d'utilisateur<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md  textinput textInput form-control" id="id_username"
                                            maxlength="30" name="username" placeholder="Choose your username"
                                            style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_email" class="form-group required">
                                    <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span
                                            class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md emailinput form-control" id="id_email" name="email"
                                            placeholder="Your current email address" style="margin-bottom: 10px"
                                            type="email" />
                                    </div>
                                </div>
                                <div id="div_id_password1" class="form-group required">
                                    <label for="id_password1"
                                        class="control-label col-md-4  requiredField">Mot de<span
                                            class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="id_password1"
                                            name="password1" placeholder="Create a password" style="margin-bottom: 10px"
                                            type="password" />
                                    </div>
                                </div>
                                <div id="div_id_password2" class="form-group required">
                                    <label for="id_password2" class="control-label col-md-4  requiredField">
                                        Re:password<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="id_password2"
                                            name="password2" placeholder="Confirm your password"
                                            style="margin-bottom: 10px" type="password" />
                                    </div>
                                </div>
                                <div id="div_id_name" class="form-group required">
                                    <label for="id_name" class="control-label col-md-4  requiredField"> full name<span
                                            class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="id_name"
                                            name="name" placeholder="Your Frist name and Last name"
                                            style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_gender" class="form-group required">
                                    <label for="id_gender" class="control-label col-md-4  requiredField"> Gender<span
                                            class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 " style="margin-bottom: 10px">
                                        <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_1"
                                                value="M" style="margin-bottom: 10px">Homme</label>
                                        <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_2"
                                                value="F" style="margin-bottom: 10px">Femme </label>
                                    </div>
                                </div>
                                <div id="div_id_company" class="form-group required">
                                    <label for="id_company" class="control-label col-md-4  requiredField">Nom de la compagnie<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="id_company"
                                            name="company" placeholder="your company name" style="margin-bottom: 10px"
                                            type="text" />
                                    </div>
                                </div>
                                <div id="div_id_catagory" class="form-group required">
                                    <label for="id_catagory" class="control-label col-md-4  requiredField">
                                        Catagorie<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="id_catagory"
                                            name="catagory" placeholder="skills catagory" style="margin-bottom: 10px"
                                            type="text" />
                                    </div>
                                </div>
                                <div id="div_id_number" class="form-group required">
                                    <label for="id_number" class="control-label col-md-4  requiredField"> numéro<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="id_number"
                                            name="number" placeholder="provide your number" style="margin-bottom: 10px"
                                            type="text" />
                                    </div>
                                </div>
                                <div id="div_id_location" class="form-group required">
                                    <label for="id_location" class="control-label col-md-4  requiredField"> votre
                                        Localisation<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="id_location"
                                            name="location" placeholder="Your Pincode and City"
                                            style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls col-md-offset-4 col-md-8 ">
                                        <div id="div_id_terms" class="checkbox required">
                                            <label for="id_terms" class=" requiredField">
                                                <input class="input-ms checkboxinput" id="id_terms" name="terms"
                                                    style="margin-bottom: 10px" type="checkbox" />
                                                Etre d'accord avec les termes du contrat
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="aab controls col-md-4 "></div>
                                    <div class="controls col-md-8 ">
                                        <input type="submit" name="Signup" value="Signup"
                                            class="btn btn-primary btn btn-info" id="submit-id-signup" />
                                        or <input type="button" name="Signup" value="Sign Up with Facebook"
                                            class="btn btn btn-primary" id="button-id-signup" />
                                    </div>
                                </div>

                            </form>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>