<?php
try {
    $access = new PDO("mysql:host=localhost;dbname=nom_de_votre_base", "utilisateur", "mot_de_passe");
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
