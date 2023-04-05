<?php
include 'includes/header.php';
?>
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
    </tr>
<?php
    foreach ($beanies as $key => $beanie){
        echo'
            <tr>
            <td>',
            $key + 1,
            '</td>
            ';
        affichageProduit($beanie);
    };
?>
</table>