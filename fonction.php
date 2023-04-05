<?php

function prixHT ($prixTTC){
    return $prixTTC/1.2;
}
function affichageProduit($a){
        $nom = $a['nom'];
        $prix = $a['prix'];
        $description = $a['description'];
    echo'
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