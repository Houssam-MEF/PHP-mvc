<center>
    <h1>Ajouter une Commande</h1>
    <form action="?GAction=commande&action=ajouter" method="post">
     <table>
        <tr>
            <td>Visiteur</td>
            <td>

                <select name="visiteur" id="">
                    <?php
                        foreach ($visiteurs as $h1 => $val1) {
                    ?>
                    <option value="<?=$val1['id']?>"><?=$val1['nom'] . " " . $val1['prenom']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Produit</td>
            <td>

                <select name="produit" id="">
                    <?php
                        foreach ($produits as $k2 => $val2) {
                    ?>
                    <option value="<?=$val2['id']?>"><?=$val2['libelle']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Quantite</td>
            <td><input type="number" name="quantite" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer"></td>
            <td><input type="reset" value="Annuler"></td>
        </tr>
     </table>

    </form>
</center>