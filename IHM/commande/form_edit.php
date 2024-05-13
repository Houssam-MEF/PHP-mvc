<center>
    <h1>Modifier une Commande</h1>
    <form action="?GAction=commande&action=modifier" method="post">
        <input type="hidden" name="id" value="<?=$C[0]?>">
     <table>
        <tr>
            <td>Visiteur</td>
            <td>

                <select name="visiteur" id="" value="<?=$C[1]?>">
                    <?php
                        foreach ($visiteurs as $key => $value) {
                    ?>
                    <option value="<?=$value['id']?>"><?=$value['nom'] . " " . $value['prenom']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Produit</td>
            <td>

                <select name="produit" id="" value="<?=$C[2]?>">
                    <?php
                        foreach ($produits as $key => $value) {
                    ?>
                    <option value="<?=$value['id']?>"><?=$value['libelle']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Quantite</td>
            <td><input type="number" name="quantite" id="" value="<?=$C[3]?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer"></td>
            <td><input type="reset" value="Annuler"></td>
        </tr>
     </table>

    </form>
</center>