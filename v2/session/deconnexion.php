<section class="text-center" style="margin-bottom : 60px; padding: 60px;">
<?php
// Démarrer ou reprendre la session
session_start();

// Détruire toutes les données de session existantes
session_destroy();

// Rediriger l'utilisateur vers la page de destination après la déconnexion
header("Location:session.php"); // Remplacez index.php par le chemin de votre page de destination
exit();
?>

</section>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>T Power Mods BO - Modèle d'administration Bootstrap 5</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-+ogc7ZFp6sh/6lk4FgF5jGOKxRkDOJdw35JVwD8+Gd0G/xMScgjnT+fIzW5Z3SPf" crossorigin="anonymous">


    <!-- Polices Google Web -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Feuille de styles des icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Feuilles de styles des bibliothèques -->
    <link href="lib/owlcarousel1/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus1/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Feuille de styles Bootstrap personnalisée -->
    <link href="../css/bootstrap1.min.css" rel="stylesheet">

    <!-- Feuille de styles du modèle -->
    <link href="../css/style1.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
 


        <!-- Retour en Haut -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- Bibliothèques JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart1/chart.min.js"></script>
    <script src="lib/easing1/easing.min.js"></script>
    <script src="lib/waypoints1/waypoints.min.js"></script>
    <script src="lib/owlcarousel1/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus1/js/moment.min.js"></script>
    <script src="lib/tempusdominus1/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus1/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- JavaScript du modèle -->
    <script src="../js/main1.js"></script>
</body>

</html>
