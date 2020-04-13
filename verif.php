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
    <script type="text/javascript" src="animation/js/form.js"></script>

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

            <div id="signupbox" style="margin-left:auto; margin-right: auto;"
                class="mainbox mt-5 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" role="tab" data-toggle="tab" href="#terrain">Terrain</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#">Lieu
                                    d'habitation/Professionnel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#">Plantation</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                                <h5 class="card-title">Devis</h5>
                                    <form>
                                        <div class="form-row">
<<<<<<< HEAD
                                            <div class="form-group col-md-4">
                                                <label for="inputTerrain">Terrain</label>
                                                <select id="terrain" class="form-control">
=======
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Terrain</label>
                                                <select id="inputState" class="form-control">
>>>>>>> 2b4b32b0068a502dfe769ef713591b2b72911981
                                                    <option selected>Urbain</option>
                                                    <option>Rural</option>
                                                </select>
                                            </div>
<<<<<<< HEAD
                                            <div class="form-group col-md-4">
                                                <label for="inputEmplacment">Emplacment</label>
                                                <select id="inputEmplacment" class="form-control">
=======
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Emplacment</label>
                                                <select id="inputState" class="form-control">
>>>>>>> 2b4b32b0068a502dfe769ef713591b2b72911981
                                                    <option selected>Abidjan</option>
                                                    <option>Intérieur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName">Nom</label>
                                            <input type="text" class="form-control" id="nom"
                                                placeholder="Nom de famille">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPrenom">Prénoms</label>
                                            <input type="text" class="form-control" id="prenoms"
                                                placeholder="Prénoms">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPrenom">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Email du client">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label for="inputZip">Zip</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Check this out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="habitat">
                                <div id="habitat" class="panel-title">Devis</div>
                                <p>on va vous orienter vers le sécretariat</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="plantation">3</div>
                        </div>
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