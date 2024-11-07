<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>T Power Mods - Modèle HTML de réparation de voitures</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Chargement...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Rue, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lun - Ven : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
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
   



    <!-- Barre de navigation début -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="../index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>T Power Mods</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="../index.php" class="nav-item nav-link">Accueil</a>
            <a href="about.php" class="nav-item nav-link">À propos</a>
            <a href="service.php" class="nav-item nav-link active">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="booking.php" class="dropdown-item">Réservation</a>
                    <a href="team.php" class="dropdown-item">Techniciens</a>
                    <a href="testimonial.php" class="dropdown-item">Témoignages</a>
                    <a href="404.php" class="dropdown-item">Page 404</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Obtenir un devis<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Barre de navigation fin -->

<!-- En-tête de la page début -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Details</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- En-tête de la page fin -->

<section class="ftco-counter ftco-section img" id="section-counter" style="overflow: hidden;">
      <?php
            if(isset($_GET['code'])){
              $code_fiche = $_GET['code'];
              if(strlen($code_fiche) == 12){
                $servername = "localhost";
                $username = "e22208277sql";
                $password1 = "LXDqTr09";
                $dbname = "e22208277_db1";
                          
                $mysqli = new mysqli($servername, $username, $password1, $dbname);
                if ($mysqli->connect_error) {
                  die("Erreur de connexion à la base de données : " . $mysqli->connect_error);
                }
                // Préparer la requête SQL pour récupérer les données de la fiche
                $sql = "SELECT *
                FROM t_sujet_suj
                    INNER JOIN t_fiche_fch USING(suj_id)
                    LEFT JOIN t_association_asc USING(fch_numero)
                    LEFT JOIN t_hyperlien_hln USING(hln_numero)
                WHERE fch_code = '". $code_fiche ."';";

                // Exécuter la requête SQL
                $result = $mysqli->query($sql);

                // Vérifier s'il y a des résultats
                if($result->num_rows > 0) {
                // Récupérer les données de la fiche
                  $fiche = $result->fetch_assoc();

                  // Afficher les détails de la fiche
                  if($fiche['fch_etat'] === 'C'){
                    echo "<div class='row justify-content-center mb-5' style='padding: 0 100px;'>";
                    echo '<div class="container-fluid alert alert-danger text-center" role="alert">';
                    echo "ERROR : Can't show ' fiche ' : La fiche concernée est INDISPONIBLE !";
                    echo '</div>';
                    echo "</div>";
                  }else{
                    echo "<div class='container'>";
                    echo "<div class='row justify-content-center mb-5'>";
                    echo "<div class='col-md-8 text-center heading-section ftco-animate'>";
                    echo "<h2 class='mb-3'>" . $fiche['suj_intitule'] . "</h2>";
                    echo "</div>";
                    echo "</div>";

                    echo "<div class='row justify-content-center mb-5'>";
                    echo "<div class='col-md-8'>";
                    echo "<div class='card'>";
                    echo "<img class='card-img-top' src='../images/" . $fiche['fch_fichier_image'] . "' alt='Card image cap'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title' style='color: #;'>" . $fiche['fch_label'] . "</h5>";
                    echo "<p class='card-text'>" . $fiche['fch_contenu'] . "</p>";
                    echo "<p class='card-text'><small class='text-muted'></small></p>";

                    echo "<h3> Plus de  détails : </h3>";
                    
                    $requete_hyp = "SELECT hln_nom , hln_url
                    FROM t_fiche_fch 
                        INNER JOIN t_association_asc USING(fch_numero)
                        INNER JOIN t_hyperlien_hln USING(hln_numero)
                    WHERE fch_code = '". $code_fiche ."';";

                    $result_hyp = $mysqli->query($requete_hyp);
                    if ($result_hyp == false) //Erreur lors de l’exécution de la requête
                    { // La requête a echoué
                      echo "Error: La requête a echoué \n";
                      echo "Errno: " . $mysqli->errno . "\n";
                      echo "Error: " . $mysqli->error . "\n";
                      exit();
                    }

                    if($result_hyp->num_rows == 0){
                      echo "<p class='card-text'>Aucun HYPERLIEN !</p>";
                    }else{
                      echo "<ul>";
                      while($hyp_row = $result_hyp->fetch_assoc()){
                        echo "<li><a href='" . $hyp_row['hln_url'] . "' target='_blank'>" . $hyp_row['hln_nom'] . "</a></li>";
                      }
                      echo "</ul>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                  } 
                }else {
                  echo "<div class='row justify-content-center mb-5' style='padding: 0 100px;'>";
                  echo '<div class="container-fluid alert alert-danger text-center" role="alert">';
                  echo "ERROR : Can't find ' fiche ' trouvée with this CODE !";
                  echo '</div>';
                  echo "</div>";
                }
                $mysqli->close();
              }else{
                echo "<div class='row justify-content-center mb-5' style='padding: 0 100px;'>";
                echo '<div class="container-fluid alert alert-danger text-center" role="alert">';
                echo "ERROR : The code should contain 12 caracters  !";
                echo '</div>';
                echo "</div>";
              }


            }else{
              echo "<div class='row justify-content-center mb-5' style='padding: 0 100px;'>";
              echo '<div class="container-fluid alert alert-danger text-center" role="alert">';
              echo "Access DENIED  !";
              echo '</div>';
              echo '</div>';
            }
        ?>
      </section>	


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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>