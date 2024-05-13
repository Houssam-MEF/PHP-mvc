<?php
include_once "Connexion.php";
include_once "Commande.php";

class Gestion_Commande extends Connexion 
{
    public function __construct() 
    {
        parent::__construct("commandes");
    }

    public function Ajouter (Commande $C)
    {
        $data = array(
            "visiteur" => $C->getVisiteur(),
            "produit" => $C->getProduit(),
            "quantite" => $C->getQuantite()
        );
        return parent::IUD($data, "insert");
    }

    public function Modifier (Commande $C)
    {
        $data = array(
            "id" => $C->getId(),
            "visiteur" => $C->getVisiteur(),
            "produit" => $C->getProduit(),
            "quantite" => $C->getQuantite()
        );
        return parent::IUD($data, "update");
    }

    public function Supprimer ($id)
    {
        $data = array(
            "id" => $id
        );
        return parent::IUD($data, "delete");
    }

    public function Rechercher ($id)
    {
        return parent::Select(array("id" => $id));
    }

    public function Lister ($param = null)
    {
        return parent::Select($param);
    }
}

?>