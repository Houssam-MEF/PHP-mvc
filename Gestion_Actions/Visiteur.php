<?php 
include_once 'Acces_BD/Visiteur.php';
include_once 'Acces_BD/Gestion_Visiteur.php';
$GV=new Gestion_Visiteur();
$visiteurs=$GV->Lister();

switch($action)
{
 case "form_ajout": include_once('IHM/visiteur/form_saisie.php');
                   break;
 case "form_edit": 
                   $V=$GV->Rechercher($_GET['id'])[0];
                   include_once('IHM/visiteur/form_edit.php');
                   break;
 case "ajouter":  $GV->Ajouter(new Visiteur(0,$_POST['nom'],$_POST['prenom'],$_POST['email']));
                   header('Location:?GAction=visiteur');
                   break;    
  case "modifier": $GV->Modifier(new Visiteur($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email']));
                   header('Location:?GAction=visiteur');
                   break;                                    
  case "supprimer": $GV->Supprimer($_GET['id']);
                   header('Location:?GAction=visiteur');
                   break;  
 default:  include_once('IHM/visiteur/affichage.php'); 
}

?>