<?php
$beanies = [
    [
        'nom'=>'bonnet en laine',
        'prix' => 10,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida'
    ],
    [
        'nom'=>'bonnet en laine bio',
        'prix' => 14,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida'
    ],
    [
        'nom'=>'bonnet en laine et cachemire',
        'prix' => 20,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida'
    ],
    [
        'nom'=>'bonnet arc en ciel',
        'prix' => 12,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida'
    ],
    ];
function prixHT ($prixTTC){
    return $prixTTC/1.2;
}
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
        $nom = $beanie['nom'];
        $prix = $beanie['prix'];
        $description = $beanie['description'];
    ?>

<tr>
    <td>
        <?php echo $key + 1;?>
    </td> 
    <td>
        <?php echo $nom;?>
    </td>
    <td>
        <?php echo round(prixHT($prix),2);?>
    </td>
    <td <?php if ($prix<=12){ echo 'class="txtgreen"';}else{ echo 'class="txtblue"'; }?> >
        <?php echo $prix;?>
    </td>
    <td>
        <?php echo $description;?>
    </td>
</tr>
<?php
    };
?>
</table>

</body>
</html>