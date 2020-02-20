
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

    <title>IREA</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08"
                aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav d-lg-none d-xl-none d-block d-md-block d-sm-block">
                <a class="navbar-brand" href="#">
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
    </header>
    <main class="main">
        <div class="mt-5">
            <img src="img/bg4.jpg" style="width:100%" alt="">
        </div>
        <section>
            <div class="container my-5">
                <h4 class="text-center"><span style="background-color :#facbcc;">Envoyez-nous un message ou retrouver-nous
                    directement sur la carte.</span></h4>
            </div>
        </section>
        <!--Section: Contact v.1-->
        <section class="section pb-5">

            <!--Section heading-->
            <div class="container">
            <h2 class="section-heading h1 pt-4 color_green">NOUS CONTACTER</h2>
            </div>
            <!--Section description-->


            <div class="container">
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-5 mb-4">
                    <div class="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Nom</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Prénoms</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>

                        <div class="md-form">

                            <input type="email" id="" class="form-control">
                            <label for="form-Subject">Email</label>
                        </div>

                        <div class="md-form">

                            <textarea id="form-text" class="form-control md-textarea" rows="3" style="height: 245px"></textarea>
                            <label for="form-text">Entrez votre message</label>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-success">Envoyer</button>
                        </div>
                    </div>
                    <!--Body-->


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7">

                    <div class="">
                        <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127118.28783248307!2d-4.049705027702217!3d5.348617046241807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan!5e0!3m2!1sfr!2sci!4v1582037536823!5m2!1sfr!2sci"
                                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>

                        <br>
                        <!--Buttons-->
                        <div class="row text-center">
                            <div class="col-md-4">
                                <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
                                <p>Abidjan - Cocody</p>
                                <p>Côte d'Ivoire</p>
                            </div>

                            <div class="col-md-4">
                                <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
                                <p>+225 00 00 00 00 </p>
                                
                            </div>

                            <div class="col-md-4">
                                <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
                                <p>info@ireaconseils.com</p>                            
                            </div>
                        </div>
                    </div>


                </div>
                <!--Grid column-->

            </div>
            </div>

        </section>
        <!--Section: Contact v.1-->
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