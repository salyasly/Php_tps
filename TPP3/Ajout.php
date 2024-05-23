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

// Récupérer les données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    $sexe = $_POST['sexe'];
    $adresse = $_POST['adresse'];

    // Requête SQL pour insérer un nouvel étudiant dans la base de données
    $sql = "INSERT INTO etudiants (Matricule, Nom, Prenom, `Date de Naissance`, Sexe, Adresse) 
    VALUES ('$matricule', '$nom', '$prenom', '$date', '$sexe', '$adresse')";


    if ($connexion->query($sql) === TRUE) {
        echo "Nouvel étudiant ajouté avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $connexion->error;
    }
}

// Fermeture de la connexion à la base de données
$connexion->close();
