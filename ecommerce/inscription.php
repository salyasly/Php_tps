<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./php/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="./php/assets/css/noscript.css" />
    </noscript>
</head>

<body>
    <div style="margin: 20px;">
    <h1>Inscription</h1>
    <form action="php/accueil.php" method="post">
        <table style="border: solid 4px;">
            <tr>
                <td>Login :</td>
                <td><input type="text" name="login" required></td>
            </tr>
            <tr>
                <td>Mot de passe :</td>
                <td><input type="password" name="pwd" required></td>
            </tr>
            <tr>
                <td>Retapez votre mot de passe :</td>
                <td><input type="password" name="pwd_confirm" required></td>
            </tr>
            <tr>
                <td>E-mail :</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Retapez votre e-mail :</td>
                <td><input type="email" name="email_confirm" required></td>
            </tr>
            <tr>
                <td>Captcha : (Quel est 3 + 2 ?)</td>
                <td><input type="number" name="captcha" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="S'inscrire" style="background-color: royalblue;"></td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>