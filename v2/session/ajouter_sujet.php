<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if(isset($_SESSION["login"])) {
    // Connexion à la base de données
    $servername = "localhost";
    $username = "e22208277sql";
    $password = "LXDqTr09";
    $dbname = "e22208277_db1";

    $connexion = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($connexion->connect_error) {
        die("Erreur de connexion à la base de données : " . $connexion->connect_error);
    }

    // Récupération des données du formulaire
    $suj_numero = $_POST["suj_numero"];
    $intitule = $_POST["intitule"];
    $date_ajout = $_POST["date_ajout"];
    $cpt_pseudo =$_POST["cpt_pseudo"]; // Récupération du pseudo depuis la session

    // Requête d'insertion du sujet
    $requete_ecreeSUJ = "INSERT INTO t_sujet_suj (suj_numero, suj_intitule, suj_date_ajout, cpt_pseudo) VALUES (?, ?, ?, ?)";
    $stmt = $connexion->prepare($requete_ecreeSUJ);

    // Vérifier si la préparation de la requête a réussi
    if ($stmt) {
        // Lier les paramètres et exécuter la requête
        $stmt->bind_param("isss", $suj_numero, $intitule, $date_ajout, $cpt_pseudo);
        $stmt->execute();

        // Redirection vers une page de confirmation ou une autre page
        header("Location: admin_sujets.php");
        exit();
    } else {
        // En cas d'échec de la préparation de la requête
        echo "Erreur lors de la préparation de la requête.";
    }

    // Fermeture du statement et de la connexion
    $stmt->close();
    $connexion->close();
} else {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: login.php");
    exit();
}
?>
