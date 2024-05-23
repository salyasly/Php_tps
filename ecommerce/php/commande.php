<?php
function ajouter($image, $nom, $prix, $description) {
    if (require(_DIR_ . "/connexion.php")) {
        $req = $access->prepare("INSERT INTO produit (image, nom, prix, description) VALUES (:image, :nom, :prix, :description)");
        $req->execute(array(
            'image' => $image,
            'nom' => $nom,
            'prix' => $prix,
            'description' => $description
        ));
        $req->closeCursor();
    }
}

function afficher() {
    if (require(_DIR_ . "/connexion.php")) {
        $req = $access->prepare("SELECT * FROM produit ORDER BY id DESC");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;
    }
}

function supprimer($id) {
    if (require(_DIR_ . "/connexion.php")) {
        $req = $access->prepare("DELETE FROM produit WHERE id = ?");
        $req->execute(array($id));
        $req->closeCursor();
  }
}
?>
