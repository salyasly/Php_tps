<?php
session_start();

// Téléphones disponibles
$telephones = [
    'iPhone' => 10000,
    'Samsung' => 8000,
    'Huawei' => 6000,
];

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Ajouter téléphone au panier
if (isset($_GET['telephone'])) {
    $telephone = $_GET['telephone'];
    if (isset($telephones[$telephone])) {
        if (!isset($_SESSION['panier'][$telephone])) {
            $_SESSION['panier'][$telephone] = 0;
        }
        $_SESSION['panier'][$telephone]++;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Ajout de téléphones</title>
    <link rel="stylesheet" href="./assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="./assets/css/noscript.css" />
    </noscript>
</head>

<body>
    <div style="margin: 2px;">
        <h1>Liste des téléphones</h1>
        <table>
            <tr>
                <th>Téléphone</th>
                <th>Prix</th>
                <th>Ajouter</th>
            </tr>
            <?php foreach ($telephones as $telephone => $prix) : ?>
                <tr>
                    <td><?php echo $telephone; ?></td>
                    <td><?php echo $prix; ?> DH</td>
                    <td><a href="ajout.php?telephone=<?php echo $telephone; ?>">Ajouter</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>Votre commande en quantité</h2>
        <table>
            <tr>
                <th>Téléphone</th>
                <th>Quantité</th>
            </tr>
            <?php foreach ($_SESSION['panier'] as $telephone => $quantite) : ?>
                <tr>
                    <td><?php echo $telephone; ?></td>
                    <td><?php echo $quantite; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a href="initialisation.php">Vider mon panier</a><br>
        <a href="calcul_total.php">Calculer le total</a>
    </div>
</body>

</html>