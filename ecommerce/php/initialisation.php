<?php
session_start();
$_SESSION['panier'] = [];
header('Location: ajout.php');
exit;
