<h1>Page introuvable</h1>
<?php

    include '../backend/bdd/bdd.php';

    $bdd = Bdd::connexion();


    class ProduitsModel
{
    private $bdd;

    public function __construct()
    {
       $this->bdd = Bdd::connexion();
    }

    public function getLastProduct() {
        return $this->bdd->query("SELECT nom, description, image, prix, id_velo FROM velos WHERE date_ajout = (SELECT max(date_ajout) FROM velos);")->fetch(PDO::FETCH_ASSOC);
    }
}
?>