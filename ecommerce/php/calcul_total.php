<?php
session_start();

// Téléphones disponibles avec leurs prix
$telephones = [
    'iPhone' => 10000,
    'Samsung' => 8000,
    'Huawei' => 6000,
];

$total = 0;

foreach ($_SESSION['panier'] as $telephone => $quantite) {
    $total += $telephones[$telephone] * $quantite;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Total du panier</title>
    <link rel="stylesheet" href="./assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="./assets/css/noscript.css" />
    </noscript>
</head>

<body>
    <h1>Total de votre panier</h1>
    <p>Le total de votre panier est : <?php echo $total; ?> DH</p>
    <a href="ajout.php">Modifier mon panier</a><br>
    <a href="initialisation.php">Vider mon panier</a><br>
    <a href="facture.php">Confirmer la commande</a>
</body>

</html>