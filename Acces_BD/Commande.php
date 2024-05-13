<?php

class Commande {
    private $id, $visiteur, $produit, $quantite;

    public function __construct($id=null, $visiteur=null, $produit=null, $quantite=null)
    {
        $this->id =$id ;
        $this->visiteur =$visiteur ;
        $this->produit =$produit ;
        $this->quantite =$quantite ;  
    }

    public function getId() { return $this->id; }
    public function getVisiteur() { return $this->visiteur; }
    public function getProduit() { return $this->produit; }
    public function getQuantite() { return $this->quantite; }

}
?>