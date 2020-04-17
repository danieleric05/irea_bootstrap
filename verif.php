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
                        <a class="nav-link btn btn-outline-secondary mx-2" role="button"
                            href="contact_us.php">Contactez-nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary mx-2" role="button" href="#">Connexion</a>
                </ul>
            </div>
        </nav>
    </header>
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
                                <a class="nav-link" role="tab" data-toggle="tab" href="#habitat">Lieu
                                    d'habitation/Professionnel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#plantation">Plantation</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="terrain">
                            <div id="terrain" class="card-body">
                                <h5 class="card-title">Devis</h5>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputTerrain">Terrain</label>
                                            <select id="terrain1" class="form-control">
                                                <option selected>Urbain</option>
                                                <option>Rural</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmplacement">Emplacment</label>
                                            <select id="emplacement" class="form-control">
                                                <option selected value="abidjan">Abidjan</option>
                                                <option value="abengourou">Abengourou</option>
                                                <option value="abengourou">Aboisso</option>
                                                <option value="abengourou">Abongoua</option>
                                                <option value="abengourou">Adaou</option>
                                                <option value="abengourou">Adiaké</option>
                                                <option value="abengourou">Adjouan</option>
                                                <option value="abengourou">Adzopé</option>
                                                <option value="abengourou">Agbaou</option>
                                                <option value="abengourou">Agboville</option>
                                                <option value="abengourou">Agnibilékrou</option>
                                                <option value="abengourou">Ahouanou</option>
                                                <option value="abengourou">Ahoutoué</option>
                                                <option value="abengourou">Akoupé</option>
                                                <option value="abengourou">Alépé</option>
                                                <option value="abengourou">Alounamouénou</option>
                                                <option value="abengourou">Ananda (Daoukro)</option>
                                                <option value="abengourou">Ananguié (Adzopé)</option>
                                                <option value="abengourou">Annépé</option>
                                                <option value="abengourou">Anyama</option>
                                                <option value="abengourou">Arrah (Côte-d'Ivoire)</option>
                                                <option value="abengourou">Assaoufoué</option>
                                                <option value="abengourou">Attiégouakro</option>
                                                <option value="abengourou">Attoutou A</option>
                                                <option value="abengourou">Azaguié</option>
                                                <option value="abengourou">Bacanda</option>
                                                <option value="abengourou">Badikaha</option>
                                                <option value="abengourou">Bako (Côte d'Ivoire)</option>
                                                <option value="abengourou">Baléko</option>
                                                <option value="abengourou">Bambalouma</option>
                                                <option value="abengourou">Bandakagni-Sokoura</option>
                                                <option value="abengourou">Bangoua (Côte d'Ivoire)</option>
                                                <option value="abengourou">Banneu</option>
                                                <option value="abengourou">Bazra-Nattis</option>
                                                <option value="abengourou">Bécouéfin</option>
                                                <option value="abengourou">Béoumi</option>
                                                <option value="abengourou">Bettié</option>
                                                <option value="abengourou">Biankouma</option>
                                                <option value="abengourou">Biéby</option>
                                                <option value="abengourou">Bin-Houyé</option>
                                                <option value="abengourou">Bingerville</option>
                                                <option value="abengourou">Blapleu</option>
                                                <option value="abengourou">Bléniméouin</option>
                                                <option value="abengourou">Blességué</option>
                                                <option value="abengourou">Bloléquin</option>
                                                <option value="abengourou">Boahia</option>
                                                <option value="abengourou">Bocanda</option>
                                                <option value="abengourou">Bogouiné</option>
                                                <option value="abengourou">Bondo (Côte d'Ivoire)</option>
                                                <option value="abengourou">Bongouanou</option>
                                                <option value="abengourou">Bonoua</option>
                                                <option value="abengourou">Boromba</option>
                                                <option value="abengourou">Botro</option>
                                                <option value="abengourou">Bouaflé</option>
                                                <option value="abengourou">Bouandougou</option>
                                                <option value="abengourou">Bougousso</option>
                                                <option value="abengourou">Bouna</option>
                                                <option value="abengourou">Boundiali</option>
                                                <option value="abengourou">Brofodoumé</option>
                                                <option value="abengourou">Céchi</option>
                                                <option value="abengourou">Dabéko</option>
                                                <option value="abengourou">Dabou</option>
                                                <option value="abengourou">Dabouyo</option>
                                                <option value="abengourou">Dah-Zagna</option>
                                                <option value="abengourou">Dakpadou</option>
                                                <option value="abengourou">Daleu</option>
                                                <option value="abengourou">Daloa</option>
                                                <option value="abengourou">Danané</option>
                                                <option value="abengourou">Danguira</option>
                                                <option value="abengourou">Daoukro</option>
                                                <option value="abengourou">Diabo</option>
                                                <option value="abengourou">Diamarakro</option>
                                                <option value="abengourou">Diangobo</option>
                                                <option value="abengourou">Diawala</option>
                                                <option value="abengourou">Diboké</option>
                                                <option value="abengourou">Didiévi</option>
                                                <option value="abengourou">Diéouzon</option>
                                                <option value="abengourou">Digbeugnoa</option>
                                                <option value="abengourou">Dignago</option>
                                                <option value="abengourou">Dikouehipalegnoa</option>
                                                <option value="abengourou">Dimbokro</option>
                                                <option value="abengourou">Diogo </option>
                                                <option value="abengourou">Dioulatiédougou</option>
                                                <option value="abengourou">Divo</option>
                                                <option value="abengourou">Djouroutou</option>
                                                <option value="abengourou">Doba</option>
                                                <option value="abengourou">Dogbo</option>
                                                <option value="abengourou">Doké</option>
                                                <option value="abengourou">Domaboué</option>
                                                <option value="abengourou">Domangbeu</option>
                                                <option value="abengourou">Douasso</option>
                                                <option value="abengourou">Doubé</option>
                                                <option value="abengourou">Doudoukou</option>
                                                <option value="abengourou">Duékoué</option>
                                                <option value="abengourou">Ebounou</option>
                                                <option value="abengourou">Elima</option>
                                                <option value="abengourou">Ery-Macouguié</option>
                                                <option value="abengourou">Fadiadougou</option>
                                                <option value="abengourou">Abengourou</option>
                                                <option value="abengourou">Fahandougou</option>
                                                <option value="abengourou">Fahani</option>
                                                <option value="abengourou">Fakaha</option>
                                                <option value="abengourou">Fala</option>
                                                <option value="abengourou">Famienkro</option>
                                                <option value="abengourou">Faradiani</option>
                                                <option value="abengourou">Farandougou</option>
                                                <option value="abengourou">Ferkessédougou</option>
                                                <option value="abengourou">Fodio</option>
                                                <option value="abengourou">Fonondara</option>
                                                <option value="abengourou">Fresco</option>
                                                <option value="abengourou">Gabiadji</option>
                                                <option value="abengourou">Gagnoa</option>
                                                <option value="abengourou">Ganaoni</option>
                                                <option value="abengourou">Gbambiasso</option>
                                                <option value="abengourou">Gbangbégouiné</option>
                                                <option value="abengourou">Gbangbégouiné-Yati</option>
                                                <option value="abengourou">Gbékékro</option>
                                                <option value="abengourou">Gbéléban</option>
                                                <option value="abengourou">Gbélo</option>
                                                <option value="abengourou">Gbémou</option>
                                                <option value="abengourou">Gbogui</option>
                                                <option value="abengourou">Gbon</option>
                                                <option value="abengourou">Gbongaha</option>
                                                <option value="abengourou">Gnaliepa</option>
                                                <option value="abengourou">Gnangnon</option>
                                                <option value="abengourou">Gohouo-Zagna</option>
                                                <option value="abengourou">Gomon</option>
                                                <option value="abengourou">Gonaté</option>
                                                <option value="abengourou">Gouessesso</option>
                                                <option value="abengourou">Gouiné</option>
                                                <option value="abengourou">Goulia</option>
                                                <option value="abengourou">Grabo</option>
                                                <option value="abengourou">Grand-Bassam</option>
                                                <option value="abengourou">Grand-Béréby</option>
                                                <option value="abengourou">Grand-Lahou</option>
                                                <option value="abengourou">Grand-Morié</option>
                                                <option value="abengourou">Grand-Zattry</option>
                                                <option value="abengourou">Guessabo</option>
                                                <option value="abengourou">Guéyo</option>
                                                <option value="abengourou">Guiendé</option>
                                                <option value="abengourou">Guiglo</option>
                                                <option value="abengourou">Guinglo-Tahouaké</option>
                                                <option value="abengourou">Issia</option>
                                                <option value="abengourou">Jacqueville</option>
                                                <option value="abengourou">Kahin-Zarabaon</option>
                                                <option value="abengourou">Kanakono</option>
                                                <option value="abengourou">Kaniéné</option>
                                                <option value="abengourou">Kanitélégué</option>
                                                <option value="abengourou">Kanoroba</option>
                                                <option value="abengourou">Kantélégu</option>
                                                <option value="abengourou">Kanzra</option>
                                                <option value="abengourou">Kaouara</option>
                                                <option value="abengourou">Karakoro</option>
                                                <option value="abengourou">Karakpo</option>
                                                <option value="abengourou">Kasombarga</option>
                                                <option value="abengourou">Kasséré</option>
                                                <option value="abengourou">Katiéré</option>
                                                <option value="abengourou">Katiola</option>
                                                <option value="abengourou">Kimbirila-Sud</option>
                                                <option value="abengourou">Koboko</option>
                                                <option value="abengourou">Kodiokofi</option>
                                                <option value="abengourou">Kofiplé</option>
                                                <option value="abengourou">Kolia</option>
                                                <option value="abengourou">Kong</option>
                                                <option value="abengourou">Kongasso</option>
                                                <option value="abengourou">Koni </option>
                                                <option value="abengourou">Konolo</option>
                                                <option value="abengourou">Korhogo</option>
                                                <option value="abengourou">Koro</option>
                                                <option value="abengourou">Kossou</option>
                                                <option value="abengourou">Kouakro</option>
                                                <option value="abengourou">Kouan-Houle</option>
                                                <option value="abengourou">Kouassi-Blékro</option>
                                                <option value="abengourou">Koukourandoumi</option>
                                                <option value="abengourou">Kounoumon</option>
                                                <option value="abengourou">Kouto</option>
                                                <option value="abengourou">Kpata</option>
                                                <option value="abengourou">Lahou-Kpanda</option>
                                                <option value="abengourou">Lakota</option>
                                                <option value="abengourou">Languibonou</option>
                                                <option value="abengourou">Lataha</option>
                                                <option value="abengourou">Liliyo</option>
                                                <option value="abengourou">Lodala</option>
                                                <option value="abengourou">Logoualé</option>
                                                <option value="abengourou">Logouhi</option>
                                                <option value="abengourou">Lohouré</option>
                                                <option value="abengourou">Lokoligou</option>
                                                <option value="abengourou">Lolobo </option>
                                                <option value="abengourou">Lomokankro</option>
                                                <option value="abengourou">Loplé</option>
                                                <option value="abengourou">Lossingué</option>
                                                <option value="abengourou">Lotono</option>
                                                <option value="abengourou">Loupala</option>
                                                <option value="abengourou">Loupougo</option>
                                                <option value="abengourou">Loviguié</option>
                                                <option value="abengourou">M'bahiakro</option>
                                                <option value="abengourou">M'Bia</option>
                                                <option value="abengourou">Madinani</option>
                                                <option value="abengourou">M'bahiakro</option>
                                                <option value="abengourou">M'Bia</option>
                                                <option value="abengourou">Madinani</option>
                                                <option value="abengourou">Mahandiana-Sokourani</option>
                                                <option value="abengourou">Mamini</option>
                                                <option value="abengourou">Man </option>
                                                <option value="abengourou">Mankono</option>
                                                <option value="abengourou">Mantongouiné</option>
                                                <option value="abengourou">Mbengué</option>
                                                <option value="abengourou">Minignan</option>
                                                <option value="abengourou">Mohamé</option>
                                                <option value="abengourou">Mohouélé</option>
                                                <option value="abengourou">Molonou</option>
                                                <option value="abengourou">Monogaga</option>
                                                <option value="abengourou">N'Dara</option>
                                                <option value="abengourou">N'douci</option>
                                                <option value="abengourou">Nafana (Prikro)</option>
                                                <option value="abengourou">Nagou</option>
                                                <option value="abengourou">Nahio</option>
                                                <option value="abengourou">Nandala</option>
                                                <option value="abengourou">Nangbolodougou</option>
                                                <option value="abengourou">Nassian</option>
                                                <option value="abengourou">Natio</option>
                                                <option value="abengourou">N'Gokro</option>
                                                <option value="abengourou">Niagbrahio</option>
                                                <option value="abengourou">Niakaramandougou</option>
                                                <option value="abengourou">Niambézaria</option>
                                                <option value="abengourou">Niandono</option>
                                                <option value="abengourou">Niangboué</option>
                                                <option value="abengourou">Niangboué rivière</option>
                                                <option value="abengourou">Nianzongo</option>
                                                <option value="abengourou">Niellé</option>
                                                <option value="abengourou">Niempurgué</option>
                                                <option value="abengourou">Nigui-saff</option>
                                                <option value="abengourou">Ninioro</option>
                                                <option value="abengourou">Niofoin</option>
                                                <option value="abengourou">Niorouhio</option>
                                                <option value="abengourou">Nitiadougou</option>
                                                <option value="abengourou">Nodiahan</option>
                                                <option value="abengourou">Nofou</option>
                                                <option value="abengourou">Nomparadougou</option>
                                                <option value="abengourou">Nondara</option>
                                                <option value="abengourou">Noonlara</option>
                                                <option value="abengourou">Nouamou</option>
                                                <option value="abengourou">Odienné</option>
                                                <option value="abengourou">Olodio</option>
                                                <option value="abengourou">Oress-Krobou</option>
                                                <option value="abengourou">Ouangolodougou</option>
                                                <option value="abengourou">Ouaragahio</option>
                                                <option value="abengourou">Ouarapa</option>
                                                <option value="abengourou">Ouattaradougou</option>
                                                <option value="abengourou">Ouazomon</option>
                                                <option value="abengourou">Ouéllé</option>
                                                <option value="abengourou">Ouendé-Kouassikro</option>
                                                <option value="abengourou">Oumé</option>
                                                <option value="abengourou">Oupoyo</option>
                                                <option value="abengourou">Ouyably-Gnondrou</option>
                                                <option value="abengourou">Pacobo</option>
                                                <option value="abengourou">Panadougou</option>
                                                <option value="abengourou">Pelezi</option>
                                                <option value="abengourou">Pinhou</option>
                                                <option value="abengourou">Podiagouine</option>
                                                <option value="abengourou">Ponadongou</option>
                                                <option value="abengourou">Poniakélé</option>
                                                <option value="abengourou">Ponondougou</option>
                                                <option value="abengourou">Portio</option>
                                                <option value="abengourou">Poundiou</option>
                                                <option value="abengourou">Prikro</option>
                                                <option value="abengourou">Rubino</option>
                                                <option value="abengourou">Sakassou</option>
                                                <option value="abengourou">Samatiguila</option>
                                                <option value="abengourou">San-Pédro</option>
                                                <option value="abengourou">Sandougou-Soba</option>
                                                <option value="abengourou">Santa (Biankouma)</option>
                                                <option value="abengourou">Sassandra</option>
                                                <option value="abengourou">Segana</option>
                                                <option value="abengourou">Séguéla</option>
                                                <option value="abengourou">Séguelon</option>
                                                <option value="abengourou">Seleho</option>
                                                <option value="abengourou">Sianhala</option>
                                                <option value="abengourou">Siempurgo</option>
                                                <option value="abengourou">Sikensi</option>
                                                <option value="abengourou">Sinématiali</option>
                                                <option value="abengourou">Sinfra</option>
                                                <option value="abengourou">Sirasso</option>
                                                <option value="abengourou">Sodalako</option>
                                                <option value="abengourou">Sokoro</option>
                                                <option value="abengourou">Songon</option>
                                                <option value="abengourou">Soubré</option>
                                                <option value="abengourou">Tabayo 1</option>
                                                <option value="abengourou">Taboitien</option>
                                                <option value="abengourou">Tabou </option>
                                                <option value="abengourou">Tafiré</option>
                                                <option value="abengourou">Tahiraguhé</option>
                                                <option value="abengourou">Talaho</option>
                                                <option value="abengourou">Teapleu</option>
                                                <option value="abengourou">Ténélogo</option>
                                                <option value="abengourou">Tengréla</option>
                                                <option value="abengourou">Tiagba</option>
                                                <option value="abengourou">Tiapoum</option>
                                                <option value="abengourou">Tiassalé</option>
                                                <option value="abengourou">Tie Ndiékro</option>
                                                <option value="abengourou">Tiébissou</option>
                                                <option value="abengourou">Tiédio</option>
                                                <option value="abengourou">Tiémé</option>
                                                <option value="abengourou">Tienko</option>
                                                <option value="abengourou">Tingréla</option>
                                                <option value="abengourou">Tinhou</option>
                                                <option value="abengourou">Togoniéré</option>
                                                <option value="abengourou">Tonla</option>
                                                <option value="abengourou">Tortiya</option>
                                                <option value="abengourou">Touba</option>
                                                <option value="abengourou">Tougbo</option>
                                                <option value="abengourou">Toulepleu</option>
                                                <option value="abengourou">Toumo</option>
                                                <option value="abengourou">Toumodi</option>
                                                <option value="abengourou">Toumoukoro</option>
                                                <option value="abengourou">Tounvré</option>
                                                <option value="abengourou">Vavoua</option>
                                                <option value="abengourou">Voueboufla</option>
                                                <option value="abengourou">Waraniéné</option>
                                                <option value="abengourou">Womon</option>
                                                <option value="abengourou">Yakassé-Attobrou</option>
                                                <option value="abengourou">Yakassé-Mé</option>
                                                <option value="abengourou">Yama (Boundiali)</option>
                                                <option value="abengourou">Yamoussoukro</option>
                                                <option value="abengourou">Yaou</option>
                                                <option value="abengourou">Yapleu</option>
                                                <option value="abengourou">Yorodougou</option>
                                                <option value="abengourou">Zéo</option>
                                                <option value="abengourou">Ziasso</option>
                                                <option value="abengourou">Ziédougou</option>
                                                <option value="abengourou">Zonneu</option>
                                                <option value="abengourou">Zou</option>
                                                <option value="abengourou">Zouan-Hounien</option>
                                                <option value="abengourou">Zoukougbeu</option>
                                                <option value="abengourou">Zuénoula</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNom">Nom</label>
                                        <input type="text" class="form-control" id="nom" placeholder="Nom de famille">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPrenom">Prénoms</label>
                                        <input type="text" class="form-control" id="prenoms" placeholder="Prénoms">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Email du client">
                                    </div>
                                    <!--<div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check this out
                                    </label>
                                </div>
                            </div>-->
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </form>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="habitat">
                            <p>on va vous orienter vers le sécretariat</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="plantation">3</div>
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