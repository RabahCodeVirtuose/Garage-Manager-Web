 <!-- Section: Design Block -->
 <section class="design-block" style="margin-bottom : 60px;">
      <?php
        //Ouverture d'une session
        session_start();
        if ($_SESSION["role"]=='G'){
            $achuyi="Gesionnaire";
        }else{
            $achuyi="Membre";

        }
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
        // Utilisation de mysqli_real_escape_string pour prévenir les injections SQL
        $pseudo = $mysqli->real_escape_string($_SESSION['login']);

        // Requête SQL pour récupérer les informations du profil
        $sql = "SELECT * FROM t_profil_utilisateur_prf WHERE cpt_pseudo = '$pseudo'";
        $resultat = $mysqli->query($sql);

        // Vérification s'il y a des résultats
        if ($resultat->num_rows > 0) {
            $profil = $resultat->fetch_assoc();
  
} else {
    echo "Aucun résultat trouvé pour ce pseudo.";
}



// 1) Profils 
// Requête SQL pour compter le nombre de profils
$requete1 = "SELECT COUNT(*) AS nombre_profils FROM t_profil_utilisateur_prf";
$resultat1 = $mysqli->query($requete1);

// Vérifier s'il y a des données retournées
if ($resultat1->num_rows > 0) {
    // Afficher le nombre de profils dans la structure demandée
    $row1 = $resultat1->fetch_assoc();
    $nombre_profils = $row1["nombre_profils"];
} 






// 2) Actualités 

// Requête SQL pour compter le nombre d'actualité
$requete2 = "SELECT COUNT(*) AS nombre_comptes FROM t_compte_utilisateur_cpt";
$resultat2 = $mysqli->query($requete2);

// Vérifier s'il y a des données retournées
if ($resultat2->num_rows > 0) {
    // Afficher le nombre de profils dans la structure demandée
    $row2 = $resultat2->fetch_assoc();
    $nombre_comptes = $row2["nombre_comptes"];

   
} 


// 3) Fiches 

// Requête SQL pour compter le nombre de fiches
$requete3 = "SELECT COUNT(*) AS nombre_fiches FROM t_fiche_fch";
$resultat3 = $mysqli->query($requete3);

// Vérifier s'il y a des données retournées
if ($resultat3->num_rows > 0) {
    // Afficher le nombre de profils dans la structure demandée
    $row3 = $resultat3->fetch_assoc();
    $nombre_fiches = $row3["nombre_fiches"];
}


// 4) Sujets 


// Requête SQL pour compter le nombre de sujet
$requete4 = "SELECT COUNT(*) AS nombre_sujets FROM t_sujet_suj";
$resultat4 = $mysqli->query($requete4);

// Vérifier s'il y a des données retournées
if ($resultat4->num_rows > 0) {
    // Afficher le nombre de profils dans la structure demandée
    $row4 = $resultat4->fetch_assoc();
    $nombre_sujets = $row4["nombre_sujets"];

} 
      ?>
  
    </section>
    <!-- Section: Design Block -->
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
 
        <!-- Début de la barre latérale -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>T Power Mods Dev</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../images/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"> <?php echo $profil['prf_nom']." ".$profil['prf_prenom']; ?></h6>
                        <span><?php echo $achuyi; ?></span>
                    </div>
                </div>
                
            </nav>
        </div>
        <!-- Fin de la barre latérale -->

        <!-- Contenu Début -->
        <div class="content">
            <!-- Barre de navigation Début -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Recherche">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../images/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon vous a envoyé un message</h6>
                                             </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../images/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon vous a envoyé un message</h6>
                                             </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="../images/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon vous a envoyé un message</h6>
                                             </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Voir tous les messages</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex"> Espace d’administration</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#biggi" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Accueil & profil(s)</h6>
                             </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Gestion des actualités</h6>
                             </a>
                            <hr class="dropdown-divider">
                            <a href="./admin_sujets.php#biggi" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Gestion des sujets & fiches</h6>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Gestion des hyperliens</h6>
                            </a>
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../images/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"> <?php echo $_SESSION["login"] ; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mon Profil</a>
                            <a href="#" class="dropdown-item">Paramètres</a>

                            <form action="deconnexion.php" method="post">
                                <button type="submit" name="deconnexion" class="btn btn-danger">Déconnexion</button>
                            </form>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Barre de navigation Fin -->
            <div style="padding:70px">

</div>
            <section class="text-center p-5">
            <?php
  
    
    // Vérification si l'utilisateur est connecté
    if(isset($_SESSION["login"])) {
      
        // Préparation de la requête pour récupérer les informations de l'utilisateur
        $requeteUserInfo = "SELECT prf_nom, prf_prenom, prf_validite, prf_statut, prf_date_creation
                           FROM t_profil_utilisateur_prf
                           WHERE cpt_pseudo = '" . $_SESSION["login"] . "'";

        // Exécution de la requête
        $resultUserInfo = $mysqli->query($requeteUserInfo);

        // Vérification s'il y a des résultats
        if ($resultUserInfo && $resultUserInfo->num_rows > 0) {
            // Récupération des informations de l'utilisateur
            $userInfo = $resultUserInfo->fetch_assoc();
            if ($userInfo["prf_validite"]=='A'){
                $amekakken="Activé";
            }else{
                $amekakken="Désactivé";

            }
            if($userInfo["prf_statut"]=='G'){
                $lhalaw="Gestionnaire";
            }else{
                $lhalaw="Membre";

            }
            // Affichage des informations de l'utilisateur avec l'icône de personne
            echo "<div class='user-info'>";
            echo "<i class='fas fa-user fa-6x'></i>"; // Icône de personne
            echo "<h4 class='mb-3'>Bienvenue, " . $userInfo["prf_nom"] . " " . $userInfo["prf_prenom"] . "!</h4>";
            echo "<p class='mb-0'>Validité: <span>" .  $amekakken . "</span></p>";
            echo "<p class='mb-0'>Statut: <span>" .$lhalaw . "</span></p>";
            echo "<p class='mb-0'>Date de création: <span>" . $userInfo["prf_date_creation"] . "</span></p>";
            echo "</div>";
        } else {
            echo "Erreur: Impossible de récupérer les informations de l'utilisateur.";
        }

        // Fermeture de la connexion avec la base de données
    } else {
        echo "Vous n'êtes pas connecté.";
    }
?>


</section>
<div  style="padding:120px">

</div>
<div id="biggi" style="padding:50px">

</div>

<?php if($_SESSION["role"]=='G'){
echo '
<!-- Ventes & Revenus Début -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-users fa-3x text-primary"></i> <!-- Icône pour les Profils -->
                <div class="ms-3">
                    <p class="mb-2">Nombre de Profils</p>
                    <h6 class="mb-0">'.$nombre_profils.'</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-newspaper fa-3x text-primary"></i> <!-- Icône pour les Actualités -->
                <div class="ms-3">
                    <p class="mb-2">Nombre de comptes</p>
                    <h6 class="mb-0">'.$nombre_comptes.'</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-file-alt fa-3x text-primary"></i> <!-- Icône pour les Fiches -->
                <div class="ms-3">
                    <p class="mb-2">Nombre de fiches</p>
                    <h6 class="mb-0">'.$nombre_fiches.'</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-book fa-3x text-primary"></i> <!-- Icône pour les Sujets -->
                <div class="ms-3">
                    <p class="mb-2">Nombre de Sujets</p>
                    <h6 class="mb-0">'.$nombre_sujets.'</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ventes & Revenus Fin -->';}
?>



   <br>
   <br>       

<?php
if($_SESSION["role"]=='G'){
    
    // Requête pour récupérer tous les profils
    $requeteProfils = "SELECT * FROM t_profil_utilisateur_prf;";
    $resultProfils = $mysqli->query($requeteProfils);

    if ($resultProfils === false) {
        echo "Error: La requête a échoué \n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit();
    } else {
        echo "<h1 style='color: #D82A05;'>Liste des Profils Utilisateur</h1>\n";

        echo '<table class="table text-start align-middle table-bordered table-hover mb-0">';
        echo '<thead class="text-white">';
        echo '<tr>';
        echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Nom</th>';
echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Prénom</th>';
echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Validité</th>';
echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Statut</th>';
echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Date de Création</th>';
echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Pseudo du Compte</th>';
echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Actions</th>';

         // Ajout d'une colonne pour les actions
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($profil = $resultProfils->fetch_assoc()) {

            if ($profil['prf_statut'] == 'M') {
                $zagou = 'Membre';
            } else {
                $zagou = 'Gestionnaire';
            }

            if ($profil['prf_validite'] == 'A') {
                $zagou1 = 'Activé';
            } else {
                $zagou1 = 'Désactivé';
            }

            echo '<tr>';
            echo '<td class="text-white">' . $profil['prf_nom'] . '</td>';
            echo '<td class="text-white">' . $profil['prf_prenom'] . '</td>';
            echo '<td class="text-white">' . $zagou1 . '</td>';
            echo '<td class="text-white">' . $zagou . '</td>';
            echo '<td class="text-white">' . $profil['prf_date_creation'] . '</td>';
            echo '<td class="text-white">' . $profil['cpt_pseudo'] . '</td>';
            echo '<td class="text-white">'; // Colonne des actions
            echo '<form action="comptes_action.php" method="post">';
            echo '<input type="hidden" name="pseudo" value="' . $profil['cpt_pseudo'] . '">';
            echo '<input type="hidden" name="validite" value="' . $profil['prf_validite'] . '">';
            echo '<button type="submit" class="btn btn-sm btn-success">Modifier Validité</button>';
            echo '</form>';

            echo '<form action="comptes_action.php" method="post">';
            echo '<input type="hidden" name="pseudo" value="' . $profil['cpt_pseudo'] . '">';
            echo '<input type="hidden" name="validite" value="' . $profil['prf_statut'] . '">';
            echo '<button type="submit" class="btn btn-sm btn-primary">Modifier Statut</button>';
            echo '</form>';
            echo '</td>';

            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    }


    // Ferme la connexion avec la base MariaDB
    $mysqli->close();
}


?>






           

            <!-- Pied de page Début -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">T Brothers</a>, Tous droits réservés.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** Ce modèle est gratuit tant que vous conservez le lien de crédit de l'auteur du pied de page/lien d'attribution/backlink. Si vous souhaitez utiliser le modèle sans le lien de crédit de l'auteur du pied de page/lien d'attribution/backlink, vous pouvez acheter la licence de suppression de crédit sur "https://htmlcodex.com/credit-removal". Merci pour votre soutien. ***/-->
                            Conçu par <a href="https://www.instagram.com/rabah_tb63/">Rabah TOUBAL</a>
                            <br>Distribué par : <a href="https://www.maison-sauvage.fr/" target="_blank">AXXAM LXUNI (maison sauvage)</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pied de page Fin -->
        </div>
        <!-- Contenu Fin -->


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
