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
    <div class="card text-center" style="width: 18rem;">
        <img src="',$image,'" class="card-img-top" alt="..." style="height: 250px;">
        <div class="card-body">
            <h6 class="card-title">',$nom,'</h6>
            <p class="card-text">',$prix,'€ </p>
            <p class="card-text">',$description,'</p>
        </div>
        <div class="card-footer">
            <a class="btn btn-outline-dark" name = "cart" 
                    href="?page=panier&action=plus&id='.$id.'">
                        Ajouter au panier
            </a>
        </div>
    </div>';
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

