<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="./php/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="./php/assets/css/noscript.css" />
    </noscript>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="align-content: center;align-items: center;background-image: url(./php/assets/images/auth.jpeg); background-repeat: no-repeat; background-size: cover;-webkit-background-size: cover;-moz-background-size: cover; width: 600px;margin: auto;align-content: center; ">
    <h1 style="align-self: center; text-align: center; color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Identification</h1>
    <div style="">
        <form method="post" action="php/accueil.php">
            <fieldset>
                <legend>Identifiez-vous</legend>
                <table class="auth" style="color: white; font-weight: bold;">
                    <tr>
                        <td>Login :</td>
                        <td><input type="text" name="login" required></td>
                    </tr>
                    <tr>
                        <td>Mot de passe :</td>
                        <td><input type="password" name="pwd" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Se connecter" style="color: white; background-color: dodgerblue;">
                            <a href="inscription.php" style="color: blue" class="btn btn-succes">S'inscrire</a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>

</html>