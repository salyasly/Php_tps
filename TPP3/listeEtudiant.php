<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste etudiants</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <marquee bgcolor="orange"> La liste des etudiants</marquee>

    <div style="margin: 15px;">
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

        // Exécution de la requête SQL pour récupérer les données
        $sql = "SELECT * FROM etudiants"; // Requête SQL
        $resultat = $connexion->query($sql);

        // Affichage des résultats dans un tableau HTML
        ?>
        <table>
            <thead style="color: white; background-color: blue;">
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Sexe</th>
                <th>Adresse</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                if ($resultat->num_rows > 0) {
                    // echo "<table border='1'>";
                    // echo "<tr><th>Matricule</th><th>Nom</th><th>Prénom</th><th>Date de Naissance</th><th>Sexe</th><th>Adresse</th> <th>Action</th></tr>";

                    // Parcourir les résultats
                    while ($ligne = $resultat->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $ligne["Matricule"] . "</td>";
                        echo "<td>" . $ligne["Nom"] . "</td>";
                        echo "<td>" . $ligne["Prenom"] . "</td>";
                        echo "<td>" . $ligne["Date de Naissance"] . "</td>";
                        echo "<td>" . $ligne["Sexe"] . "</td>";
                        echo "<td>" . $ligne["Adresse"] . "</td>";
                        echo "<td>";
                        echo "<a href='modif.php?id=" . $ligne["Matricule"] . "'>Modifier</a> | "; // Lien pour modifier avec l'id de l'étudiant
                        echo "<a href='supprimer_etudiant.php?id=" . $ligne["Matricule"] . " class='btn btn-primary''>Supprimer</a>"; // Lien pour supprimer avec l'id de l'étudiant
                        echo "</td>";
                        echo "</tr>";
                    }

                    // echo "</table>";
                } else {
                    echo "Aucune donnée trouvée.";
                }

                // Fermeture de la connexion à la base de données
                $connexion->close();
                ?>
            </tbody>
        </table>
        <p><a href="AjouterEtudiant.php">&laquo; Ajouter un etudiant </a></p>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>