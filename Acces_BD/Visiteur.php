<?php
class Visiteur{
private $id,$nom,$prenom,$email;

public function __construct($id=null, $nom=null,$prenom=null,$email=null)
{
    $this->id =$id ;
    $this->nom =$nom ;
    $this->prenom =$prenom ;
    $this->email =$email ;  
}

public function getId(){

    return $this->id;
}
public function getNom(){

    return $this->nom;
}
public function getPrenom(){

    return $this->prenom;
}
public function getEmail(){

    return $this->email;
}

}
?>