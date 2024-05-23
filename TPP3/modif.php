<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modifier un étudiant</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div style="margin: 20px;">
        <h1 style="color: gray;">Modifier Étudiant</h1>
        <form method="post" action="ModifierEtudiant.php">
            <table style="border: solid 4px;">
                <tr>
                    <td>Matricule :</td>
                    <td><input type="text" name="matricule" required></td>
                </tr>
                <tr>
                    <td>Nom :</td>
                    <td><input type="text" name="nom" required></td>
                </tr>
                <tr>
                    <td>Prénom :</td>
                    <td><input type="text" name="prenom" required></td>
                </tr>
                <tr>
                    <td>Date de Naissance :</td>
                    <td><input type="date" name="date" required></td>
                </tr>
                <tr>
                    <td>Sexe :</td>
                    <td>
                        <select name="sexe">
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Féminin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Adresse :</td>
                    <td><input type="text" name="adresse" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Modifier" style="color: white; background-color: royalblue;">
                        <input type="reset" value="Effacer" style="color: white; background-color: red;">
                    </td>
                </tr>
            </table>
        </form>
        <p><a href="listeEtudiant.php">&laquo; Retour à la page d'accueil</a></p> <!-- Déplacement du lien de retour pour le placer en dehors du tableau -->
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