<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    $pwd_confirm = $_POST['pwd_confirm'];
    $email = $_POST['email'];
    $email_confirm = $_POST['email_confirm'];
    $captcha = $_POST['captcha'];

    // Vérification du captcha
    if ($captcha != 5) {
        echo "Erreur : captcha incorrect.";
        exit();
    }

    // Vérification des mots de passe
    if ($pwd != $pwd_confirm) {
        echo "Erreur : les mots de passe ne correspondent pas.";
        exit();
    }

    // Vérification des e-mails
    if ($email != $email_confirm) {
        echo "Erreur : les e-mails ne correspondent pas.";
        exit();
    }

    // Ajouter l'utilisateur à la base de données
    //require('commande.php');
    // Ajoutez votre fonction pour enregistrer les données ici
    // ajouterUtilisateur($login, $pwd, $email);

    echo "Bienvenu $login, chez SMI E-Co !!! <br>";
    echo "Votre panier est vide ! ?";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="./assets/css/noscript.css" />
    </noscript>
</head>

<body>
    <p><a href="ajout.php">Cliquez ici</a> pour le remplir</p>
    <p><a href="auth.php">Déconnexion</a></p> <!-- Ajout du lien de déconnexion -->
</body>

</html>