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

// Vérifier si le formulaire de modification a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    $sexe = $_POST['sexe'];
    $adresse = $_POST['adresse'];

    // Requête SQL pour mettre à jour les informations de l'étudiant
    $sql = "UPDATE etudiants 
            SET Nom='$nom', Prenom='$prenom', `Date de Naissance`='$date', Sexe='$sexe', Adresse='$adresse'
            WHERE Matricule='$matricule'";

    if ($connexion->query($sql) === TRUE) {
        echo "Les informations de l'étudiant ont été mises à jour avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $connexion->error;
    }
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>