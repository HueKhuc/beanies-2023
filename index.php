<?php
include 'variable.php';
include 'fonction.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid;
        }
        .txtgreen {
            color : green;
        }
        .txtblue {
            color : blue;
        }
    </style>
</head>
<body>

<table> 
    <tr style="font-weight:bold; color:red;">
        <td>  
            No.
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
            '</td>';
affichageProduit($beanie);
    };
?>
</table>
</body>
</html>