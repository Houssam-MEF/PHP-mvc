<center>
<a href="?GAction=visiteur">
    Gestion des visiteurs
</a> / 
<a href="?GAction=commande">
    Gestion des commandes
</a>  / 
<a href="?GAction=produit">
    Gestion des produits
</a>

</center>

<?php
$Gestionnaire_Actions="";

$Tableau_GA=array("Visiteur","Commande","Produit");
if(!empty($_GET["GAction"]))
  $Gestionnaire_Actions=ucfirst(strtolower($_GET["GAction"]));
if(in_array($Gestionnaire_Actions,$Tableau_GA))
{
    $action="";
    if(!empty($_GET['action']))
    $action=$_GET['action'];
include_once "Gestion_Actions/$Gestionnaire_Actions.php";

}



?>