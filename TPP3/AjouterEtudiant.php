<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ajouter un étudiant</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>Ajouter Étudiant</h1>

    <form method="post" action="Ajout.php" style="margin: 30px;">
        <fieldset>
            <legend>Vos informations</legend>
            <table>
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
                    <td><input type="date" name="date" required></td> <!-- Utilisation du type "date" pour la date de naissance -->
                </tr>
                <tr>
                    <td>Sexe :</td>
                    <td>
                        <select name="sexe"> <!-- Correction: ajout des attributs "name" et "id" -->
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Féminin</option> <!-- Correction: ajout d'un accent sur "Féminin" -->
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Adresse :</td>
                    <td><input type="text" name="adresse" required></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <input type="submit" value="Enregistrer" class="btn btn-primary" style="color: white; background-color: royalblue;">
                        <input type="reset" value="Effacer" class="btn btn-danger" style="color: white; background-color: red;"> <!-- Correction: remplacement de type="submit" par type="reset" pour effacer le formulaire -->
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>