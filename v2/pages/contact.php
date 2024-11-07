<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>T Power Mods - Modèle HTML de réparation automobile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Polices Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Feuille de style de l'icône de police -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Feuilles de style des bibliothèques -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Feuille de style personnalisée de Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Feuille de style du modèle -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Démarrage du spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Chargement...</span>
        </div>
    </div>
    <!-- Fin du spinner -->


    <!-- Barre supérieure de navigation -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Rue, New York, États-Unis</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lun - Ven : 09.00 - 21.00</small>
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
    <!-- Fin de la barre supérieure de navigation -->


    <!-- Barre de navigation -->
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
                <a href="service.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.php" class="dropdown-item">Réservation</a>
                        <a href="team.php" class="dropdown-item">Techniciens</a>
                        <a href="testimonial.php" class="dropdown-item">Témoignages</a>
                        <a href="404.php" class="dropdown-item">Page 404</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link active">Contact</a>
            </div>
            <a href="../recapitulatif/recapitulatif.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Récapitulatif<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Fin de la barre de navigation -->


    <!-- En-tête de la page -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Fin de l'en-tête de la page -->


    <!-- Section Contact -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Contact //</h6>
                <h1 class="mb-5">Contactez-nous pour toute question</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Réservation //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Général //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Technique //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4">Le formulaire de contact est actuellement inactif. Obtenez un formulaire de contact fonctionnel avec Ajax et PHP en quelques minutes. Il suffit de copier et coller les fichiers, d'ajouter un peu de code et le tour est joué. <a href="https://htmlcodex.com/contact-form">Télécharger maintenant</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Votre nom">
                                        <label for="name">Votre nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Votre e-mail">
                                        <label for="email">Votre e-mail</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Sujet">
                                        <label for="subject">Sujet</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Laissez un message ici" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la section Contact -->


   
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


       <!-- Retour en haut -->
       <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


       <!-- Bibliothèques JavaScript -->
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
   
       <!-- JavaScript du modèle -->
       <script src="../js/main.js"></script>
   
</body>

</html>