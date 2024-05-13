
<center>
    <h1>Modifier un produit</h1>
    <form action="?GAction=produit&action=modifier" method="post">
        <input type="hidden" name="id" value="<?=$P[0]?>">
     <table>
        <tr>
            <td>Libelle</td>
            <td><input type="text" name="libelle" value="<?=$P[1]?>"></td>
        </tr>
        <tr>
            <td>Prix</td>
            <td><input type="text" name="prix" value="<?=$P[2]?>"></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td><input type="number" name="stock" value="<?=$P[3]?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer"></td>
            <td><input type="reset" value="Annuler"></td>
        </tr>
     </table>

    </form>
</center>