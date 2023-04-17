<!-- <form method="post" action="" name="add"> -->
<table> 
    <tr style="font-weight:bold; color:red;">
        <td>  
            No.
        </td>
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
        <td>  
            
        </td>
    </tr>
<?php
    foreach ($beanies as $id => $beanie){
        echo'
            <tr>
            <td>',
            $id + 1,
            '</td>
            ';
        affichageProduit($beanie);
        echo '<td>
                <a class="btn btn-outline-dark" name = "cart" 
                    href="?page=panier&action=plus&id='.$id.'">
                        Ajouter au panier
                </a>
                </td>';
        
        
    }
?>
</table>
<!-- </form> -->

