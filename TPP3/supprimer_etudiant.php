<?php
// Connexion à la base de données
$serveur = "localhost"; // Nom du serveur MySQL
$utilisateur = "root";
$mot_de_passe = "root";
$bd = "bd_tp_php";
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $bd);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

// Vérifier si l'identifiant de l'étudiant à supprimer a été transmis
if (isset($_GET['id'])) {
    $id_etudiant = $_GET['id'];

    // Requête SQL pour supprimer l'étudiant de la base de données
    $sql = "DELETE FROM etudiants WHERE Matricule = ?";

    // Préparation de la requête
    $stmt = $connexion->prepare($sql);
    // Liaison des paramètres
    $stmt->bind_param("s", $id_etudiant);
    // Exécution de la requête
    if ($stmt->execute()) {
        echo "L'étudiant avec l'identifiant " . $id_etudiant . " a été supprimé avec succès.<br/>";
    } else {
        echo "Erreur lors de la suppression de l'étudiant : " . $connexion->error;
    }
    $stmt->close();
} else {
    echo "Aucun identifiant d'étudiant valide à supprimer n'a été fourni.";
}


// Fermeture de la connexion à la base de données
$connexion->close();
