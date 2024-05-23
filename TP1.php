<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TP 41</title>
    <link rel="stylesheet" href="./ecommerce/php/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="./ecommerce/php/assets/css/noscript.css" />
    </noscript>
</head>

<body>
    <form method="post" action="affiche_parametres.php">
        <table style="border: solid 4px;">
            <tr>
                <td><label for="iduser">Votre Nom d'Utilisateur</label></td>
                <td><input type="text" name="nom" id="iduser" required></td>
            </tr>
            <tr>
                <td><label for="idpwd">Votre Mot de passe</label></td>
                <td><input type="password" name="pwd" id="idpwd" required></td>
            </tr>

            <tr>
                <td><label for="idproff">Votre Profession</label></td>
                <td>
                    <select name="proff" id="idproff">
                        <option value="Architecte">Architecte</option>
                        <option value="Agent immobilier">Agent immobilier</option>
                        <option value="Devellopeur d'application">Devellopeur d'application</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="idpays">Votre pays</label></td>
                <td>
                    <select name="pays" id="idpays">
                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                        <option value="Maroc">Maroc</option>
                        <option value="France">France</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="idsexe">Votre sexe</label></td>
                <td style="background-color: grey;">
                    <input type="radio" name="sexe" id="idsexe" value="M">M
                    <input type="radio" name="sexe" id="idsexe" value="F">F
                </td>
            </tr>
            <tr>
                <td><label for="idlang">Votre Langue</label></td>
                <td>
                    <select name="lang" id="idlang">
                        <option value="Français">Français</option>
                        <option value="Arabe">Arabe</option>
                        <option value="Anglais">Anglais</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="idlois">Votre Loisir</label></td>

                <td>
                    <input type="checkbox" name="lois[]" id="idlois" value="Sport">Sport
                    <input type="checkbox" name="lois[]" id="idlois" value="Musique">Musique
                    <input type="checkbox" name="lois[]" id="idlois" value="Internet">Internet
                    <input type="checkbox" name="lois[]" id="idlois" value="Voyage">Voyage
                    <input type="checkbox" name="lois[]" id="idlois" value="Recherche">Recherche
                </td>

            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Vider" style="background-color: red;">
                    <input type="submit" value="Valider" style="background-color: chartreuse;">
                    <input type="submit" value="Rétablir" style="background-color: blue;">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>