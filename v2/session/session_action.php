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






<!-- En-tête de la page début -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Session</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Session</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- En-tête de la page fin -->
 <!-- Section: Design Block -->
<section class="text-center" style="margin-bottom : 60px; padding: 60px;">
      <?php
        //Ouverture d'une session
        session_start();
        /*Affectation dans des variables du pseudo/mot de passe s'ils existent,
        affichage d'un message sinon*/
        if(empty($_POST["pseudo"])){
          echo "<div class='row justify-content-center mb-5' style='padding: 0 100px;'>";
          echo '<div class="container-fluid alert alert-danger text-center" role="alert">';
          echo "ERROR : Please Fill pseudo Input !";
          echo "<br /> <a href='../index.php' style='color:green;' class='alert-link'> Return to HOME page</a>";;
          echo '</div>';
          echo '</div>';
          exit();
        }


        if(empty($_POST["mdp"])){
          echo "<div class='row justify-content-center mb-5' style='padding: 0 100px;'>";
          echo '<div class="container-fluid alert alert-danger text-center" role="alert">';
          echo "ERROR : Please Fill PASSWORD Input !";
          echo "<br /> <a href='../index.php' style='color:green;' class='alert-link'> Return to HOME page</a>";;
          echo '</div>';
          echo '</div>';
          exit();
        }


        
        if ($_POST["pseudo"] && $_POST["mdp"]){
          $id = htmlspecialchars(addslashes($_POST["pseudo"]));
          $motdepasse = htmlspecialchars(addslashes($_POST["mdp"]));
          // A COMPLETER...
          // Connexion à la base MariaDB
          $servername = "localhost";
          $username = "e22208277sql";
          $mdp1 = "LXDqTr09";
          $dbname = "e22208277_db1";
                          
          $mysqli = new mysqli($servername, $username, $mdp1, $dbname);
          if ($mysqli->connect_error) {
            die("Erreur de connexion à la base de données : " . $mysqli->connect_error);
          }
          /* 1) Requête SQL n° 1) incomplète de recherche du compte utilisateur à partir
          des pseudo / mot de passe saisis */
          $sql="SELECT cpt_pseudo , cpt_mot_de_passe , prf_validite , prf_statut FROM t_compte_utilisateur_cpt INNER JOIN t_profil_utilisateur_prf USING(cpt_pseudo) WHERE
          cpt_pseudo='" . $id . "' AND cpt_mot_de_passe = MD5('" . $motdepasse . "');";
          /* 1bis) A NOTER : on préparera plutôt une requête SQL n° 1bis) complète avec
          une jointure pour rechercher si un compte utilisateur valide ('A') existe dans
          la table des données des profils et récupérer aussi son rôle à partir des
          pseudo / mot de passe saisis */

          /* Exécution de la requête pour vérifier si le compte (=pseudo+mdp) existe !*/
          $resultat = $mysqli->query($sql);
          if ($resultat == false) {
            echo "<div class='row justify-content-center mb-5' style='padding: 0 100px;'>";
            echo '<div class="container-fluid alert alert-danger text-center" role="alert">';
            echo "Error: La requête a echoué \n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Error: " . $mysqli->error . "\n";
            echo '</div>';
            echo '</div>';
            exit();
          }
          else {
            /* Dans le cas de la requête n° 1) non complétée ou n° 1bis), on teste si
            une ligne de résultat a été renvoyée, c'est à dire si le compte
            existe bien (n° 1)) et est activé (n° 1bis)) :
            */
            if($resultat->num_rows == 1) {
              $profil = $resultat->fetch_assoc();
              if($profil["prf_validite"] != 'A'){
                echo "<div class='row justify-content-center mb-5' style='padding: 0 100px;'>";
                echo '<div class="container-fluid alert alert-danger text-center" role="alert">';
                echo "ERROR : Your account is currently DISABLED. Please try again later !";
                echo "<br /> <a href='../index.php' style='color:green;' class='alert-link'> Return to HOME page</a>";;
                echo '</div>';
                echo '</div>';
                exit();
              }
              //Mise à jour des données de la session
              $_SESSION['login'] = $id;
              //affecter la valeur du rôle à $_SESSION['role']
              $_SESSION['role'] = $profil['prf_statut'];
              
              
              /* Redirection vers la page autorisée à cet utilisateur
                ATTENTION !! Ne pas mettre d'appel d'echo() / de balise HTML
                au-dessus de header() dans cette condition */
              header("Location:admin_acceuil.php");
            }
            else{
                // aucune ligne retournée
                // => le compte n'existe pas.
                echo "<div class='row justify-content-center mb-5' style='padding: 0 100px;'>";
                echo '<div class="container-fluid alert alert-danger text-center" role="alert">';
                echo "ERROR : pseudo or mdp INCORRECT !";
                echo "<br /> <a href='./session.php' style='color:green;' class='alert-link'> Return to log in page</a>";
                echo '</div>';
                echo '</div>';
            }
            //Fermeture de la communication avec la base MariaDB
            $mysqli->close();
          }
        }
      ?>
  
    </section>
    <!-- Section: Design Block -->









    <!--Pied de page Début -->
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
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre pseudo">
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