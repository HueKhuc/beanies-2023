
<table> 
    <tr style="font-weight:bold; color:red;">
        <td>  
            Image
        </td>
        <td>  
            Nom de bonnet
        </td>
        <td>  
            Prix HT (€)
        </td>
        <td>  
            Prix TTC (€)
        </td>
        <td>  
            Description
        </td>
    </tr>
    <?php
        for($key = 0; $key < 3; $key++)
            {
                $beanie = $beanies[$key];
                echo'
                    <tr>
                    ';
                affichageProduit($beanie);
                }

?>
</table>
<a href="?page=list" class="btn btn-outline-dark" role = "button">Voir tous les produits</a>

