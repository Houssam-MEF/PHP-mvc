
<center>
<h1>la liste des visiteurs</h1>
<table border="1" width="430">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th colspan="2"><a href="?GAction=visiteur&action=form_ajout">Ajouter</a></th>
    </tr>
<?php
foreach($visiteurs as $V)
{
?>
    <tr>
        <td><?=$V[0]?></td>
        <td><?=$V[1]?></td>
        <td><?=$V[2]?></td>
        <td><?=$V[3]?></td>
        <td><a href="?GAction=visiteur&action=supprimer&id=<?=$V[0]?>">Sup</a></td>
        <td><a href="?GAction=visiteur&action=form_edit&id=<?=$V[0]?>">Edit</a></td>
    </tr>
<?php
}
?>
</table>
</center>