<?php
// Assurez-vous que la session est démarrée
session_start();

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assurez-vous que le pseudo et la validité ont été envoyés
    if (isset($_POST['pseudo']) && isset($_POST['validite'])) {
        // Récupérez le pseudo et la validité du formulaire
        $pseudo = $_POST['pseudo'];
        $validite_prec = $_POST['validite'];

        // Déterminez la nouvelle valeur de validité en fonction de l'état précédent
        $vival1 = ($validite_prec == 'A') ? 'D' : 'A';
        $vival = ($validite_prec == 'M') ? 'G' : 'M';

        // Assurez-vous d'avoir une connexion à la base de données
        $serveur = "localhost";
        $utilisateur = "e22208277sql";
        $motdepasse = "LXDqTr09";
        $basededonnees = "e22208277_db1";

        $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

        // Vérification de la connexion
        if ($connexion->connect_error) {
            die("Échec de la connexion à la base de données : " . $connexion->connect_error);
        }

        // Préparez et exécutez la requête pour mettre à jour la validité dans la base de données
        $sql1 = "UPDATE t_profil_utilisateur_prf SET prf_validite = ? WHERE cpt_pseudo = ?";
        $requete1 = $connexion->prepare($sql1);
        $requete1->bind_param("ss", $vival1, $pseudo);

        $sql2 = "UPDATE t_profil_utilisateur_prf SET prf_statut = ? WHERE cpt_pseudo = ?";
        $requete2 = $connexion->prepare($sql2);
        $requete2->bind_param("ss", $vival, $pseudo);

        // Exécutez les requêtes en fonction de la validité précédente
        if ($validite_prec == 'A' || $validite_prec == 'D') {
            if ($requete1->execute()) {
                // Redirigez l'utilisateur vers la page précédente après la modification
                header("Location: admin_acceuil.php#biggi");
                exit();
            } else {
                // En cas d'échec de la requête SQL, affichez un message d'erreur
                echo "Erreur lors de la mise à jour de la validité : " . $requete1->error;
            }
        } else {
            if ($requete2->execute()) {
                // Redirigez l'utilisateur vers la page précédente après la modification
                header("Location: admin_acceuil.php#biggi");
                exit();
            } else {
                // En cas d'échec de la requête SQL, affichez un message d'erreur
                echo "Erreur lors de la mise à jour du statut : " . $requete2->error;
            }
        }

        // Fermez la connexion avec la base de données
        $connexion->close();
    } else {
        // Redirigez l'utilisateur avec un message d'erreur si le pseudo ou la validité n'ont pas été envoyés
        header("Location: admin_acceuil.php?erreur=donnees_manquantes");
        exit();
    }
} else {
    // Redirigez l'utilisateur si le formulaire n'a pas été soumis
    header("Location: admin_acceuil.php");
    exit();
}
?>

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
