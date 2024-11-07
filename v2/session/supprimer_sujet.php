<?php
// Démarrez la session
session_start();

// Vérifiez si l'utilisateur est connecté et s'il a les autorisations nécessaires
if(isset($_SESSION['role']) && $_SESSION['role'] == 'M' ) {
    // Vérifiez d'abord si l'ID du sujet est bien passé depuis le formulaire
    if(isset($_POST['suj_id'])) {
        // Récupérez l'ID du sujet depuis le formulaire
        $suj_id = $_POST['suj_id'];
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

        // Première requête pour supprimer les associations de fiches
        $sqlDeleteAssoc = "DELETE FROM t_association_asc WHERE fch_numero IN (SELECT fch_numero FROM t_fiche_fch WHERE suj_id = '$suj_id')";
        $resultDeleteAssoc = $mysqli->query($sqlDeleteAssoc);

        // Seconde requête pour supprimer les fiches du sujet
        $sqlDeleteFiches = "DELETE FROM t_fiche_fch WHERE suj_id = '$suj_id'";
        $resultDeleteFiches = $mysqli->query($sqlDeleteFiches);
        
        // Troisième  requête pour supprimer les sujets
        $sqlDeleteprofil="DELETE FROM `t_sujet_suj` WHERE `t_sujet_suj`.`suj_id` =$suj_id";
        $resultDeleteprofil = $mysqli->query($sqlDeleteprofil);



        // Vérifiez si les requêtes se sont bien exécutées
        if($resultDeleteAssoc && $resultDeleteFiches && $resultDeleteprofil ) {
            header("Location: admin_sujets.php");
        } else {
            if($resultDeleteprofil){
                header("Location: admin_sujets.php");
            }
            echo "Une erreur s'est produite lors de la suppression du sujet.";
        }

        // Fermeture de la connexion
        $mysqli->close();
    } else {
        echo "ID de sujet non trouvé.";
    }
} else {
    // Redirigez l'utilisateur vers une page d'erreur ou de connexion s'il n'a pas les autorisations nécessaires

echo "erruer de suppression";
    exit(); // Assurez-vous de terminer le script après la redirection
}
?>
