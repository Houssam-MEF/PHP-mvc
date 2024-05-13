<?php
include_once "Connexion.php";
include_once "Produit.php";

class Gestion_Produit extends Connexion 
{
    public function __construct() 
    {
        parent::__construct("produits");
    }

    public function Ajouter (Produit $P)
    {
        $data = array(
            "libelle" => $P->getLibelle(),
            "prix" => $P->getPrix(),
            "stock" => $P->getStock()
        );
        return parent::IUD($data, "insert");
    }

    public function Modifier (Produit $P)
    {
        $data = array(
            "id" => $P->getId(),
            "libelle" => $P->getLibelle(),
            "prix" => $P->getPrix(),
            "stock" => $P->getStock()
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