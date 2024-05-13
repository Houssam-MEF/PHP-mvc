<?php

class Produit {
    private $id, $libelle, $prix, $stock;

    public function __construct($id=null, $libelle=null,$prix=null,$stock=null)
    {
        $this->id =$id ;
        $this->libelle =$libelle ;
        $this->prix =$prix ;
        $this->stock =$stock ;  
    }

    public function getId() { return $this->id; }
    public function getLibelle() { return $this->libelle; }
    public function getPrix() { return $this->prix; }
    public function getStock() { return $this->stock; }

}
?>