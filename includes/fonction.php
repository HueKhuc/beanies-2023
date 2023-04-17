<?php

function prixHT ($prixTTC){
    return $prixTTC/1.2;
}
function affichageProduit($a){
        $image = $a['image'];
        $nom = $a['nom'];
        $prix = $a['prix'];
        $description = $a['description'];
        $id = $a['id'];
    echo'
    <td>
    <img src="',
    $image,
    '" width = 100px height = 100px>
    </td>
    <td>',
    $nom,
    '</td>
    <td>',
         round(prixHT($prix),2),
    '</td>
    <td>',
        $prix,
    '</td>
    <td>',
        $description,
    '</td>
</tr>';
}
?>
