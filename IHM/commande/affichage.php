
<center>
<h1>La liste des Commandes</h1>
<table border="1" width="430">
    <tr>
        <th>ID</th>
        <th>Visiteur</th>
        <th>Produits</th>
        <th>Quantite</th>
        <th colspan="2"><a href="?GAction=commande&action=form_ajout">Ajouter</a></th>
    </tr>
<?php
foreach($commandes as $C)
{
?>
    <tr>
        <td><?=$C[0]?></td>
        <td>
            <?php
            foreach($visiteurs as $V) {
                if($V[0] == $C[1]) {
                    echo $V[1] . " " . $V[2];
                }
            }
            ?>
        </td>
        <td>
            <?php
            foreach($produits as $P) {
                if($P[0] == $C[2]) {
                    echo $P[1];
                }
            }
            ?>
        </td>
        <td><?=$C[3]?></td>
        <td><a href="?GAction=commande&action=supprimer&id=<?=$C[0]?>">Sup</a></td>
        <td><a href="?GAction=commande&action=form_edit&id=<?=$C[0]?>">Edit</a></td>
    </tr>
<?php
}
?>
</table>
</center>