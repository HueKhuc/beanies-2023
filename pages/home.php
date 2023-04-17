<div class = "d-flex flex-row justify-content-center gap-5">
    <?php
        for($key = 0; $key < 3; $key++)
            {
                $beanie = $beanies[$key];
                affichageProduit($beanie);
                }
?>
</div>
<div class=" d-flex justify-content-end m-3">
  <a href="?page=list" class="btn btn-outline-dark" role = "button">Voir tous les produits</a>
</div>