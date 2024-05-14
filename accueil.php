<?php
$URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<center>
<a href="<?=$URL?>visiteur">
    Gestion des visiteurs
</a> / 
<a href="<?=$URL?>commande">
    Gestion des commandes
</a>  / 
<a href="<?=$URL?>produit">
    Gestion des produits
</a>

</center>

<?php
$controleur=$action=$id="";

$Tableau_controleurs=array("Visiteur","Commande","Produit");
$url=$_GET['adresse'];
if($url!="")
{
$data_url=explode("/",$url);
$controleur=$data_url[0];
if(count($data_url)>1)
{
   $action=$data_url[1];
   if(count($data_url)>2)
      $id=$data_url[2];
}
}
 $controleur=ucfirst(strtolower($controleur));
if(in_array($controleur,$Tableau_controleurs))
{
include_once "controleur/$controleur.php";
}



?>