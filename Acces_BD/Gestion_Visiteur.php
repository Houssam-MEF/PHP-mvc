<?php
include_once "Connexion.php";
include_once "Visiteur.php";

class Gestion_Visiteur extends Connexion{
public function __construct()
{
 parent::__construct("visiteurs");
}

function Ajouter(Visiteur $V){
   $data=array("nom"=>$V->getNom(),
               "prenom"=>$V->getPrenom(),
               "email"=>$V->getEmail()
              );
    return parent::IUD($data,"insert");
    
    }
    
    function Modifier(Visiteur $V){
      $data=array("id"=>$V->getId(),
                "nom"=>$V->getNom(),
                "prenom"=>$V->getPrenom(),
                "email"=>$V->getEmail()); 
     return parent::IUD($data,"update");  
        }
    
        function Supprimer($id){  
          $data=array("id"=>$id) ; 
          return parent::IUD($data,"delete");  
            }
        
            function Rechercher($id){   
              return parent::Select(array("id"=>$id));    
                }
    
          function Lister($param=null){
            
          return parent::Select($param);         
                    }

}
?>