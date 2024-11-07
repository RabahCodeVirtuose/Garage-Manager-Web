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
                            <a href="./admin_acceuil.php#biggi" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Accueil & profil(s)</h6>
                             </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Gestion des actualités</h6>
                             </a>
                            <hr class="dropdown-divider">
                            <a href="./admin_sujets.php" class="dropdown-item">
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

    } else {
        echo "Vous n'êtes pas connecté.";
    }
?>


</section>

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
// Vérification du rôle de l'utilisateur
if($_SESSION["role"]=='G'){
    // Connexion à la base de données

    // Requête SQL pour récupérer tous les sujets avec les pseudos associés et les intitulés des fiches
    $sqlSQ = "SELECT suj.suj_id, suj.suj_intitule, suj.suj_date_ajout, suj.cpt_pseudo, GROUP_CONCAT(fch.fch_label) AS labels
            FROM t_sujet_suj suj
            LEFT JOIN t_fiche_fch fch ON suj.suj_id = fch.suj_id
            GROUP BY suj.suj_id";
    $resultatSQ = $mysqli->query($sqlSQ);

    if ($resultatSQ->num_rows > 0) {
        // Affichage du tableau HTML
        echo '<h1 style="color: #D82A05;">Liste des Sujets</h1>';

        echo '<table class="table text-start align-middle table-bordered table-hover mb-0">';
        echo '<thead class="text-white">';
        echo '<tr>';
        echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Sujet</th>';
        echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Fiche</th>';
        echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Intitulé</th>';
        echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Date d\'ajout</th>';
        echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Pseudo</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        // Initialiser un compteur pour les numéros de fiche
        $numFiche = 1;
        // Affichage des données
        while ($ligne = $resultatSQ->fetch_assoc()) {
            // Séparer les labels par des virgules
            $labels = explode(',', $ligne['labels']);
            $rowCount = count($labels);
            // Afficher chaque sujet avec ses fiches seulement s'il y a des fiches associées
            if (!empty($labels[0])) {
                foreach ($labels as $index => $label) {
                    // Afficher chaque ligne de sujet avec le label approprié
                    echo "<tr>";
                    if ($index === 0) { // Pour la première fiche, afficher également le sujet et les autres informations
                        echo "<td class='text-white' rowspan='" . $rowCount . "'>" . $ligne["suj_intitule"] . "</td>";
                    }
                    echo "<td class='text-white'>" . $numFiche . "</td>";
                    echo "<td class='text-white'>" . $label . "</td>";
                    if ($index === 0) { // Pour la première fiche, afficher également les autres informations
                        echo "<td class='text-white' rowspan='" . $rowCount . "'>" . $ligne["suj_date_ajout"] . "</td>";
                        echo "<td class='text-white' rowspan='" . $rowCount . "'>" . $ligne["cpt_pseudo"] . "</td>";
                        echo "<td class='text-white' rowspan='" . $rowCount . "'>
                                         
                                </td>";
                    }
                    echo "</tr>";
                    // Incrémenter le numéro de fiche
                    $numFiche++;
                }
            } else {
                // Afficher une ligne pour le sujet sans fiche
                echo "<tr>";
                echo "<td class='text-white'>" . $ligne["suj_intitule"] . "</td>";
                echo "<td class='text-white' colspan='2'>Aucune fiche associée</td>";
                echo "<td class='text-white'>" . $ligne["suj_date_ajout"] . "</td>";
                echo "<td class='text-white''>" . $ligne["cpt_pseudo"] . "</td>";
                echo "<td class='text-white'>
                                          
                                </td>";
                echo" </tr>";
            }
            // Ajouter une ligne vide entre les sujets
            echo '<tr><td colspan="6"></td></tr>';
            // Réinitialiser le numéro de fiche pour le prochain sujet
            $numFiche = 1;
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo "Aucun sujet trouvé.";
    }
   

}



if ($_SESSION["role"]=='M'){
    // Connexion à la base de données
    
        // Requête SQL pour récupérer tous les sujets avec les pseudos associés et les intitulés des fiches
        $sqlSQ = "SELECT suj.suj_id, suj.suj_intitule, suj.suj_date_ajout, suj.cpt_pseudo, GROUP_CONCAT(fch.fch_label) AS labels
        FROM t_sujet_suj suj
        LEFT JOIN t_fiche_fch fch ON suj.suj_id = fch.suj_id
        WHERE suj.cpt_pseudo = '" . $_SESSION['login'] . "'
        GROUP BY suj.suj_id";
        $resultatSQ = $mysqli->query($sqlSQ);
    
        if ($resultatSQ->num_rows > 0) {
            // Affichage du tableau HTML
            echo '<h1 style="color: #D82A05;">Liste des Sujets</h1>';
    
            echo '<table class="table text-start align-middle table-bordered table-hover mb-0">';
            echo '<thead class="text-white">';
            echo '<tr>';
            echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Sujet</th>';
            echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Fiche</th>';
            echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Intitulé</th>';
            echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Date d\'ajout</th>';
            echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Pseudo</th>';
            echo '<th scope="col" class="bg-secondary fs-5" style="color: #D82A05;">Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            // Initialiser un compteur pour les numéros de fiche
            $numFiche = 1;
            // Affichage des données
            while ($ligne = $resultatSQ->fetch_assoc()) {
                // Séparer les labels par des virgules
                $labels = explode(',', $ligne['labels']);
                $rowCount = count($labels);
                // Afficher chaque sujet avec ses fiches seulement s'il y a des fiches associées
                if (!empty($labels[0])) {
                    foreach ($labels as $index => $label) {
                        // Afficher chaque ligne de sujet avec le label approprié
                        echo "<tr>";
                        if ($index === 0) { // Pour la première fiche, afficher également le sujet et les autres informations
                            echo "<td class='text-white' rowspan='" . $rowCount . "'>" . $ligne["suj_intitule"] . "</td>";
                        }
                        echo "<td class='text-white'>" . $numFiche . "</td>";
                        echo "<td class='text-white'>" . $label . "</td>";
                        if ($index === 0) { // Pour la première fiche, afficher également les autres informations
                            echo "<td class='text-white' rowspan='" . $rowCount . "'>" . $ligne["suj_date_ajout"] . "</td>";
                            echo "<td class='text-white' rowspan='" . $rowCount . "'>" . $ligne["cpt_pseudo"] . "</td>";
                            echo "<td class='text-white' rowspan='" . $rowCount . "'>
                            <form action='supprimer_sujet.php' method='post'>
                            <input type='hidden' name='suj_id' value='" . $ligne["suj_id"] . "'>
                            <button type='submit' name='supprimer' class='btn btn-warning'>Supprimer</button>
                        </form>                    
                                    </td>";
                        }
                        echo "</tr>";
                        // Incrémenter le numéro de fiche
                        $numFiche++;
                    }
                } else {
                    // Afficher une ligne pour le sujet sans fiche
                    echo "<tr>";
                    echo "<td class='text-white'>" . $ligne["suj_intitule"] . "</td>";
                    echo "<td class='text-white' colspan='2'>Aucune fiche associée</td>";
                    echo "<td class='text-white'>" . $ligne["suj_date_ajout"] . "</td>";
                    echo "<td class='text-white''>" . $ligne["cpt_pseudo"] . "</td>";
                    echo "<td class='text-white'>
                            <form action='supprimer_sujet.php' method='post'>
                            <input type='hidden' name='suj_id' value='" . $ligne["suj_id"] . "'>
                            <button type='submit' name='supprimer' class='btn btn-warning'>Supprimer</button>
                        </form>                    
                                    </td>";
                    echo" </tr>";
                }
                // Ajouter une ligne vide entre les sujets
                echo '<tr><td colspan="6"></td></tr>';
                // Réinitialiser le numéro de fiche pour le prochain sujet
                $numFiche = 1;
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "Aucun sujet trouvé.";
        }
        echo '<div class="container mt-5 bg-secondary">';
        echo '<h2 class="mb-4" style="color: #D82A05;">Ajouter un nouveau sujet</h2>';
        echo '<form action="ajouter_sujet.php" method="post">';
        echo '<div class="form-group">';
        echo '<label for="intitule" class="text-white">Intitulé du sujet :</label>';
        echo '<input type="text" class="form-control" id="intitule" name="intitule" required>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="suj_numero" class="text-white"> Numéro du</label>';
        echo '<input type="text" class="form-control" id="cpt_pseudo" name="suj_numero" required>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="date_ajout" class="text-white">Date d\'ajout :</label>';
        echo '<input type="date" class="form-control" id="date_ajout" name="date_ajout" value="' . date("Y-m-d") . '" required>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="cpt_pseudo" class="text-white">Pseudo de l\'utilisateur :</label>';
        echo '<input type="text" class="form-control" id="cpt_pseudo" name="cpt_pseudo" value="' . htmlspecialchars($_SESSION['login']) . '" required readonly>';
        echo '</div>';
        
        echo '<button type="submit" class="btn btn-primary">Ajouter le sujet</button>';
        echo '</form>';
        echo '</div>';
    
    
    
    
        }
        
    // Fermeture de la connexion
    $mysqli->close();
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
