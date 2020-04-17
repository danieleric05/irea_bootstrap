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
    </header>
    <main class="main">
        <div class="mt-5">
            <img src="img/bg4.jpg" style="width:100%" alt="">
        </div>
        <section>
            <div class="container my-5">
                <h4 class="text-center"><span style="background-color :#facbcc;">Envoyez-nous un message ou
                        retrouver-nous
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
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">Nom</label>
                                    <input type="text" class="form-control" name="nom" id="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Objet</label>
                                    <input type="text" class="form-control" name="objet" id="">
                                </div>
                            </div>

                            <div class="md-form">

                                <input type="email" id="" name="email" class="form-control">
                                <label for="form-Subject">Email</label>
                            </div>

                            <div class="md-form">

                                <textarea id="form-text" name="message" class="form-control md-textarea" rows="3"
                                    style="height: 400px"></textarea>
                                <label for="form-text">Entrez votre message</label>
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit " class="btn btn-success">Envoyer</button>
                            </div>
                        </form>
                        <?php
                            if 
                            (isset($_POST) && !empty($_POST['nom']) &&  !empty($_POST['objet']) && !empty($_POST['message']) ){
                                extract($_POST);
                                $destinataire ='infos@ireaconseils.com';
                                $expediteur = $nom .' <'.$email.'>';
                                $mail = mail($nom, $objet, $message, 
                                $expediteur.' : De irea.com :Mail de test');
                                if($mail) echo 'Email envoyé avec succes'; else echo 'Echec d\'envoi d\'émail';
                         } else echo "Formulaire non soumis ou des champs invalides"
                        ?>
                        <!--Body-->


                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7">

                        <div class="">
                            <div id="map-container-google-11" class="z-depth-1-half map-container-6"
                                style="height: 400px">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.165233057186!2d-3.9836666852348337!3d5.391773796089302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6014a4e9f92bdb71!2sINTERNATIONAL%20REAL%20ESTATE%20AGENCY%20(I.R.E.A)!5e0!3m2!1sfr!2sci!4v1583176150375!5m2!1sfr!2sci"
                                    width="600" height="450" frameborder="0" style="border:0;"
                                    allowfullscreen=""></iframe></div>

                            <br>
                            <!--Buttons-->
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <a class="btn-floating blue accent-1"><i class="fa fa-map-marker"></i></a>
                                    <p>Riviera palmeraie</p>
                                    <p>Côte d'Ivoire</p>
                                </div>

                                <div class="col-md-4">
                                    <a class="btn-floating blue accent-1"><i class="fa fa-phone"></i></a>
                                    <p>+225 20 00 05 63</p>
                                    <a href="https://www.facebook.com/International-Real-Estate-Agency-IREA-105740061046856"
                                        class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-youtube"></a>
                                    <a href="#" class="fa fa-linkedin"></a>
                                </div>

                                <div class="col-md-4">
                                    <a class="btn-floating blue accent-1"><i class="fa fa-envelope"></i></a>
                                    <p>infos@ireaconseils.com</p>
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