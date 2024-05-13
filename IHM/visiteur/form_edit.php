
<center>
    <h1>Modifier un visiteur</h1>
    <form action="?GAction=visiteur&action=modifier" method="post">
        <input type="hidden" name="id" value="<?=$V[0]?>">
     <table>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nom" value="<?=$V[1]?>"></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><input type="text" name="prenom" value="<?=$V[2]?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?=$V[3]?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer"></td>
            <td><input type="reset" value="Annuler"></td>
        </tr>
     </table>

    </form>
</center>