<?php 
require_once 'header.php';
sql_connect();
?>

<html lang="fr">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog d'articles - Rétroscope</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/blogart25/styles.css" rel="stylesheet" />

    <style>
        .masthead {
            position: relative;
            background-image: url('src/images/fondbordeaux.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .masthead::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Ajoute un voile sombre sur l’image de fond */
        }

        .site-heading {
            position: relative;
            z-index: 1; /* Assure que le texte est au-dessus du voile */
            text-align: center;
        }

        .site-heading h1 {
            font-size: 3.5rem;
            color: #fff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6); /* Ajoute un effet d'ombre au texte */
        }

        .site-heading .subheading {
            color: #ddd;
            font-size: 1.2rem;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
        }

        .post-preview {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 30px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
        }

        .post-preview:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .post-preview img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .post-preview:hover img {
            transform: scale(1.05);
        }

        .post-title {
            font-size: 1.75rem;
            color: #333;
            margin: 20px;
        }

        .post-subtitle {
            font-size: 1rem;
            color: #666;
            margin: 0 20px 20px;
        }

        .post-meta {
            color: #999;
            font-size: 0.9rem;
            margin-left: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-transform: uppercase;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            text-decoration: none;
        }

        .container {
            margin-top: 50px;
        }


        .insolite-articles {
            flex: 2; /* Occupe 2/3 de l'espace */
        }


        .post-preview {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 30px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
        }

        .post-preview:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .post-preview img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .post-preview:hover img {
            transform: scale(1.05);
        }

        /* Style pour le logo dans la section Insolite */
        .logo-insolite {
            display: block;
            margin-left: 50px; /* Centre le logo */
            margin-right: auto; /* Centre le logo */
            max-width: 120px; /* Ajuste la taille du logo si nécessaire */
            height: auto; /* Conserver les proportions du logo */
            margin-top: -35px; /* Ajoute de l'espace entre le titre et le logo */
        }

        /* Container de la section Insolite */
        .section-insolite {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 50px;
            margin-bottom: 50px;
        }

    </style>

</head>

<body>
    <header class="masthead">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading text-center">
                        <h1>Rétroscope.</h1>
                        <span class="subheading">Atelier Blog'Art - 2025</span>
                    </div>
                    <hr class="my-4" />
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Articles Classiques -->
                <div class="post-preview">
                    <a href="http://localhost/evenement.php">
                        <img src="src/images/Photo1.jpg" alt="Article Image">
                        <h2 class="post-title">Michel CORAJOUD, l'artisan de vos balades à Bordeaux.</h2>
                    </a>
                    <h3 class="post-subtitle">À partir des années 2000, le paysagiste donne un nouveau souffle aux balades bordelaises...</h3>
                    <p class="post-meta">Posté par <a href="#!">Rétroscope</a>, le 5 février 2025</p>
                </div>
                <hr class="my-4" />
                <div class="post-preview">
                    <a href="http://localhost/acteur.php">
                        <img src="src/images/Photo2.jpg" alt="Article Image">
                        <h2 class="post-title">Hélène et Lucien, l'Amour de Bordeaux.</h2>
                    </a>
                    <h3 class="post-subtitle">Bordeaux : le témoignage d'Hélène et Lucien mêle souvenirs nostalgiques et vision sur la ville d’aujourd’hui...</h3>
                    <p class="post-meta">Posté par <a href="#!">Rétroscope</a>, le 6 février 2025</p>
                </div>
                <hr class="my-4" />

                <!-- Section Insolite -->
                <div class="section-insolite">
                    <!-- Articles insolites à gauche -->
                    <div class="insolite-articles">

                        <div class="post-preview">
                            <a href="http://localhost/insolite2.php">
                                <img src="src/images/Photo4.jpg" alt="Article Insolite">
                                <h2 class="post-title">Échoppes seniors, l’art de sociabiliser pour nos aînés.</h2>
                            </a>
                            <h3 class="post-subtitle">Depuis septembre dernier, 25 structures ont été mises en place à travers la ville pour permettre aux seniors de s’épanouir...</h3>
                            <p class="post-meta">Posté par <a href="#!">Rétroscope</a>, le 7 février 2025</p>
                        </div>
                        <hr class="my-4" />
                        <div class="post-preview">
                            <a href="http://localhost/insolite1.php">
                                <img src="src/images/Photo3.jpg" alt="Article Insolite">
                                <h2 class="post-title">Bordeaux : Vieillir le temps d’un trajet en tramway.</h2>
                            </a>
                            <h3 class="post-subtitle">Décembre 2023 : TBM transforme ses voyageurs de la ligne C, en nos grands parents...</h3>
                            <p class="post-meta">Posté par <a href="#!">Rétroscope</a>, le 7 février 2025</p>
                        </div>
                        <hr class="my-4" />
                    </div>

                    <!-- Titre "Section Insolite" à droite -->
                    <!-- Section Insolite -->
                    <div class="section-insolite">
                        <!-- Articles insolites à gauche -->
                        <div class="insolite-articles">
                            <!-- Contenu des articles -->
                        </div>
                            <!-- Ajout du logo sous le titre -->
                            <img src="/src/images/Logo2.png" alt="Logo Insolite" class="logo-insolite">
                        </div>
                    </div>
                </div>

                <!-- Pager -->
                <div class="d-flex justify-content-end mb-4">
                    <a class="btn btn-primary text-uppercase" href="#!">Anciens posts →</a>
                </div>

            </div>
        </div>
    </div>

</body>

</html>

<?php require_once 'footer.php'; ?>
