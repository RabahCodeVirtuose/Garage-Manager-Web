
<!-- 
=======================================================================
FICHIER : index.php
AUTEUR : TOUBAL Rabah
DATE DE CRÉATION : 2024-03-27
DESCRIPTION : Page d'accueil du site Web.

COMMENTAIRE :
-----------------------------------------------------------------------
Cette page contient la structure de la page d'accueil du site. Elle 
comprend les éléments principaux tels que la bannière, les sections 
d'informations et les liens vers d'autres pages.

La mise en page est conçue pour être réactive et s'adapter à différents
appareils grâce à l'utilisation de CSS flexbox et de media queries.

N'hésitez pas à me contacter si vous avez des questions ou des 
commentaires sur cette page !

TOUBAL Rabah
rabah.toubal@etudiant.univ-brest.fr
=======================================================================
-->
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>T Power Mods - Modèle HTML de Personnalisation automobile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Icône de site -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Polices Google Web -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Stylesheet de la police des icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Feuilles de style des bibliothèques -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Feuille de style personnalisée de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Feuille de style du modèle -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- Démarrage du Spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Chargement en cours...</span>
        </div>
    </div>

    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>2 Rue Romain Malassis, 29200, Brest</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lun - Ven : 09h00 - 21h00</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+337 65 65 52 03</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


   <!-- Barre de navigation Start -->
   <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>T Power Mods</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Accueil</a>
            <a href="./pages/about.php" class="nav-item nav-link">À Propos</a>
            <a href="./pages/service.php" class="nav-item nav-link">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="./pages/booking.php" class="dropdown-item">Réservation</a>
                    <a href="./pages/team.php" class="dropdown-item">Techniciens</a>
                    <a href="./pages/testimonial.php" class="dropdown-item">Témoignages</a>
                    <a href="./pages/404.php" class="dropdown-item">Page 404</a>
                </div>
            </div>
            <a href="./pages/contact.php" class="nav-item nav-link">Contact</a>
            <a href="./inscription/inscription.php" class="nav-item nav-link">inscription</a>
            <a href="./session/session.php" class="nav-item nav-link">se connecter </a>

        </div>
        <a href="./recapitulatif/recapitulatif.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Récapitulatif<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Barre de navigation End -->



    <!-- Début du Carrousel -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Service de Personnalisation //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Centre de Service de Personnalisation Automobile Qualifié</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">En savoir plus<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="./images/logo noir et blac MDIF1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Fin du Carrousel -->
    <?php
$mysqli = new mysqli('localhost', 'e22208277sql', 'LXDqTr09', 'e22208277_db1');
if ($mysqli->connect_errno) {
    echo "Error: Problème de connexion à la BDD \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit();
}

if (!$mysqli->set_charset("utf8")) {
    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
    exit();
}
// en utilisant AS dans les requêtes SQL, affichez aussi le nombre de sujets et de fiches actifs.
    

     // Requête pour obtenir le nombre de sujets actifs
     $requeteNombreSujets = "SELECT COUNT(DISTINCT suj_id) AS nombre_sujets_actifs FROM t_sujet_suj;";
     $resultNombreSujets = $mysqli->query($requeteNombreSujets);
     $rowSujets = $resultNombreSujets->fetch_assoc();
     $nombreSujets=$rowSujets['nombre_sujets_actifs'];
     

     // Requête pour obtenir le nombre de fiches actives
     $requeteNombreFiches = "SELECT COUNT(DISTINCT fch_numero) AS nombre_fiches_actives FROM t_fiche_fch WHERE t_fiche_fch.fch_etat='L';";
     $resultNombreFiches = $mysqli->query($requeteNombreFiches);
     $rowFiches = $resultNombreFiches->fetch_assoc();
    $nombreFiches=$rowFiches['nombre_fiches_actives'];
    echo "<!-- Début des Faits -->\n";
    echo "<h1 style='color: #D82A05;'>Nos beaux chiffres</h1>\n";
echo "<div class=\"container-fluid fact bg-dark my-5 py-5\">\n";
echo "    <div class=\"container\">\n";
echo "        <div class=\"row g-4\">\n";
echo "            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.1s\">\n";
echo "                <i class=\"fa fa-check fa-2x text-white mb-3\"></i>\n";
echo "                <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">" . $nombreSujets . "</h2>\n";
echo "                <p class=\"text-white mb-0\">Nombre de sujets actifs</p>\n";
echo "            </div>\n";
echo "            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.3s\">\n";
echo "                <i class=\"fa fa-users-cog fa-2x text-white mb-3\"></i>\n";
echo "                <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">" . $nombreFiches . "</h2>\n";
echo "                <p class=\"text-white mb-0\">Nombre de fiches actives</p>\n";
echo "            </div>\n";
echo "            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.5s\">\n";
echo "                <i class=\"fa fa-users fa-2x text-white mb-3\"></i>\n";
echo "                <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">1234</h2>\n";
echo "                <p class=\"text-white mb-0\">Clients Satisfaits</p>\n";
echo "            </div>\n";
echo "            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.7s\">\n";
echo "                <i class=\"fa fa-car fa-2x text-white mb-3\"></i>\n";
echo "                <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">2801</h2>\n";
echo "                <p class=\"text-white mb-0\">Projets Complétés</p>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "</div>\n";
echo "<!-- Fin des Faits -->\n";


// Préparation de la requête récupérant les 10 actualités les plus récentes
$requeteActualites = "SELECT * FROM t_actualite_act ORDER BY act_date_publication DESC LIMIT 10;";

$resultActualites = $mysqli->query($requeteActualites);
if ($resultActualites == false) {
    echo "Error: La requête a échoué \n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit();
} else {
    echo "<h1 style='color: #D82A05;'>Nos Actualités</h1>\n";

    echo '<table id="table-hover" class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Titre</th>';
    echo '<th scope="col">Texte</th>';
    echo '<th scope="col">Auteur</th>';
    echo '<th scope="col">Date</th>'; // Ajout de la classe col-date    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    while ($actu = $resultActualites->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $actu['act_titre'] . '</td>';
        echo '<td>' . $actu['act_texte'] . '</td>';
        echo '<td>' . $actu['cpt_pseudo'] . '</td>';
        echo '<td style="width: 100px;">' . $actu['act_date_publication'] . '</td>'; // Ajustez la largeur selon vos préférences
        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';
}
    

// Ferme la connexion avec la base MariaDB
$mysqli->close();
?>



   <!-- Début des Services -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Service de Qualité</h5>
                        <p>Profitez d'un service de qualité supérieure assuré par nos experts qualifiés. Nous nous engageons à fournir des résultats exceptionnels à chaque visite.</p>
                        <a class="text-secondary border-bottom" href="">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Travailleurs Experts</h5>
                        <p>Nos techniciens hautement qualifiés et expérimentés sont là pour répondre à tous vos besoins en matière d'entretien et de Personnalisation automobile.</p>
                        <a class="text-secondary border-bottom" href="">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Équipement Moderne</h5>
                        <p>Nous utilisons des outils et équipements de pointe pour garantir un service efficace et de qualité à chaque étape du processus de Personnalisation.</p>
                        <a class="text-secondary border-bottom" href="">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin des Services -->


   <!-- À propos Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Ans</span></h1>
                        <h4 class="text-white">d'Expérience</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// À Propos de Nous //</h6>
                <h1 class="mb-4"><span class="text-primary">T Power Mods</span> Est Le Meilleur Endroit Pour L'Entretien de Votre Auto</h1>
                <p class="mb-4">T Power Mods est votre partenaire de confiance pour l'entretien et la Personnalisation automobiles. Notre équipe d'experts qualifiés s'engage à vous offrir un service de qualité exceptionnelle à chaque visite.</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Professionnel & Expert</h6>
                                <span>Notre équipe est composée de professionnels hautement qualifiés et expérimentés.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6>Centre de Service de Qualité</h6>
                                <span>Nous nous engageons à fournir des services de qualité supérieure à chaque visite.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h6>Travailleurs Récompensés</h6>
                                <span>Nos travailleurs ont remporté plusieurs récompenses pour leur excellence et leur dévouement.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="btn btn-primary py-3 px-5">En savoir plus<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- À propos End -->



    


<!-- Service Début -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Nos Services //</h6>
            <h1 class="mb-5">Découvrez Nos Services</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <i class="fa fa-car-side fa-2x me-3"></i>
                        <h4 class="m-0">Test de Diagnostic</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <i class="fa fa-car fa-2x me-3"></i>
                        <h4 class="m-0">Entretien du Moteur</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <i class="fa fa-cog fa-2x me-3"></i>
                        <h4 class="m-0">Remplacement de Pneus</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <i class="fa fa-oil-can fa-2x me-3"></i>
                        <h4 class="m-0">Changement d'Huile</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">15 Ans D'Expérience En Personnalisation Automobile</h3>
                                <p class="mb-4">T Power Mods est votre partenaire de confiance pour l'entretien et la Personnalisation automobiles. Notre équipe d'experts qualifiés s'engage à vous offrir un service de qualité exceptionnelle à chaque visite.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Service de Qualité</p>
                                <p><i class="fa fa-check text-success me-3"></i>Travailleurs Experts</p>
                                <p><i class="fa fa-check text-success me-3"></i>Équipement Moderne</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">15 Ans D'Expérience En Personnalisation Automobile</h3>
                                <p class="mb-4">T Power Mods est votre partenaire de confiance pour l'entretien et la Personnalisation automobiles. Notre équipe d'experts qualifiés s'engage à vous offrir un service de qualité exceptionnelle à chaque visite.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Service de Qualité</p>
                                <p><i class="fa fa-check text-success me-3"></i>Travailleurs Experts</p>
                                <p><i class="fa fa-check text-success me-3"></i>Équipement Moderne</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">15 Ans D'Expérience En Personnalisation Automobile</h3>
                                <p class="mb-4">T Power Mods est votre partenaire de confiance pour l'entretien et la Personnalisation automobiles. Notre équipe d'experts qualifiés s'engage à vous offrir un service de qualité exceptionnelle à chaque visite.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Service de Qualité</p>
                                <p><i class="fa fa-check text-success me-3"></i>Travailleurs Experts</p>
                                <p><i class="fa fa-check text-success me-3"></i>Équipement Moderne</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">15 Ans D'Expérience En Personnalisation Automobile</h3>
                                <p><i class="fa fa-check text-success me-3"></i>Service de Qualité</p>
                                <p><i class="fa fa-check text-success me-3"></i>Travailleurs Experts</p>
                                <p><i class="fa fa-check text-success me-3"></i>Équipement Moderne</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Fin -->



    <!-- Réservation Début -->
<div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="text-white mb-4">Fournisseur de services de Personnalisation automobile certifié et primé</h1>
                    <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Réserver un service</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Votre Nom" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Votre Adresse Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Sélectionnez un Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 2</option>
                                    <option value="3">Service 3</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control border-0 datetimepicker-input"
                                        placeholder="Date du Service" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Demande Spéciale"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Réserver Maintenant</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Réservation Fin -->


   <!-- Équipe Début -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Nos Techniciens //</h6>
            <h1 class="mb-5">Nos Techniciens Experts</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Nom Complet</h5>
                        <small>Poste</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Nom Complet</h5>
                        <small>Poste</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Nom Complet</h5>
                        <small>Poste</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Nom Complet</h5>
                        <small>Poste</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Équipe Fin -->

<!-- Section Témoignages Début -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <!-- Titre de la section -->
            <h6 class="text-primary text-uppercase">// Témoignages //</h6>
            <h1 class="mb-5">Ce Que Disent Nos Clients !</h1>
        </div>
        <!-- Carrousel de témoignages -->
        <div class="owl-carousel testimonial-carousel position-relative">
            <!-- Premier témoignage -->
            <div class="testimonial-item text-center">
                <!-- Image du client -->
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                <!-- Nom du client -->
                <h5 class="mb-0">Sophie Martin</h5>
                <!-- Profession du client -->
                <p>Avocate</p>
                <!-- Contenu du témoignage -->
                <div class="testimonial-text bg-light text-center p-4">
                    <!-- Texte du témoignage -->
                    <p class="mb-0">Je suis très satisfaite du service fourni par T Power Mods. Leur équipe compétente et professionnelle a résolu mes problèmes automobiles de manière efficace et rapide.</p>
                </div>
            </div>
            <!-- Deuxième témoignage -->
            <div class="testimonial-item text-center">
                <!-- Image du client -->
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                <!-- Nom du client -->
                <h5 class="mb-0">Jean Dupont</h5>
                <!-- Profession du client -->
                <p>Ingénieur</p>
                <!-- Contenu du témoignage -->
                <div class="testimonial-text bg-light text-center p-4">
                    <!-- Texte du témoignage -->
                    <p class="mb-0">J'ai eu une expérience fantastique avec T Power Mods. Leur équipe m'a fourni un excellent service et m'a aidé à résoudre mes problèmes mécaniques de manière efficace. Je les recommande vivement!</p>
                </div>
            </div>
            <!-- Troisième témoignage -->
            <div class="testimonial-item text-center">
                <!-- Image du client -->
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                <!-- Nom du client -->
                <h5 class="mb-0">Marie Leclerc</h5>
                <!-- Profession du client -->
                <p>Enseignante</p>
                <!-- Contenu du témoignage -->
                <div class="testimonial-text bg-light text-center p-4">
                    <!-- Texte du témoignage -->
                    <p class="mb-0">T Power Mods a été incroyablement utile lorsque j'ai eu des problèmes avec ma voiture. Leur équipe a été très professionnelle et a résolu le problème rapidement. Je suis reconnaissante pour leur excellent service!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section Témoignages Fin -->

<!-- Pied de page Début -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Colonne 1: Adresse et coordonnées -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Adresse</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Rue, Paris, France</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+01 23 45 67 89</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@example.com</p>
                <!-- Réseaux sociaux -->
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <!-- Colonne 2: Horaires d'ouverture -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Horaires d'Ouverture</h4>
                <h6 class="text-light">Lundi - Vendredi:</h6>
                <p class="mb-4">09h00 - 21h00</p>
                <h6 class="text-light">Samedi - Dimanche:</h6>
                <p class="mb-0">09h00 - 12h00</p>
            </div>
            <!-- Colonne 3: Services -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                <a class="btn btn-link" href="">Test de Diagnostic</a>
                <a class="btn btn-link" href="">Entretien du Moteur</a>
                <a class="btn btn-link" href="">Remplacement de Pneus</a>
                <a class="btn btn-link" href="">Changement d'Huile</a>
                <a class="btn btn-link" href="">Nettoyage Intérieur</a>
            </div>
            <!-- Colonne 4: Newsletter -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Newsletter</h4>
                <p>Restez informé des dernières nouvelles et offres.</p>
                <!-- Formulaire d'inscription à la newsletter -->
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Pied de page - Informations supplémentaires et droits d'auteur -->
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <!-- Texte des droits d'auteur -->
                    &copy; <a class="border-bottom" href="#">Votre Nom de Site</a>, Tous Droits Réservés.
                    <!-- Crédits de conception et distribution -->
                    Conçu par <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> - Distribué par: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
                <!-- Menu du pied de page -->
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Accueil</a>
                        <a href="">Cookies</a>
                        <a href="">Aide</a>
                        <a href="">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pied de page Fin -->


<!-- Retour en Haut -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- Bibliothèques JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Modèle JavaScript -->
<script src="js/main.js"></script>
</body>

</html>
