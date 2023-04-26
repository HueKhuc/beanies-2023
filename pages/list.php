<?php
$beaniesFiltered = new BeanieFilter($mesProduits, $_POST);

?>
<form action="" method="POST">
    <div class="form-row d-flex flex-row gap-2 m-3">
        <div class="form-group d-flex flex-row gap-2 align-items-center col-md-2">
            <label for="material" class="mr-sm-2">Matériel</label>
            <select name="material" class="form-control custom-select mr-sm-2">
                <option value="">Choose...</option>

                <?php
                foreach (Beanie::AVAILABLE_MATERIALS as $value => $name) {
                    echo '<option value="' . $value . '"';
                    if ($value == $beaniesFiltered->getMaterial()) {
                        echo 'selected';
                    }
                    echo '>' . $name . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="form-group d-flex flex-row gap-2 align-items-center">
            <label for="size" class="mr-sm-2">Taille</label>
            <select name="size" class="form-control custom-select mr-sm-2">
                <option value="">Choose...</option>
                <?php
                foreach (Beanie::AVAILABLE_SIZES as $taille) {
                    echo '<option value="' . $taille . '"';
                    if ($taille == $beaniesFiltered->getSize()) {
                        echo 'selected';
                    }
                    echo '>' . $taille . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="form-group d-flex flex-row gap-2 align-items-center text-center">
            <label for="minPrice">Min (€)</label>
            <input type="number" name="minPrice" id="minPrice" class="form-control custom-select"
                value="<?php echo $beaniesFiltered->getMinPrice(); ?>">
        </div>
        <div class="form-group d-flex flex-row gap-2 align-items-center text-center">
            <label for="maxPrice">Max (€)</label>
            <input type="number" name="maxPrice" id="maxPrice" class="form-control custom-select"
                value="<?php echo $beaniesFiltered->getMaxPrice(); ?>">
        </div>
        <button class="btn btn-outline-dark align-self-center" type="submit">Filtre</button>
    </div>
</form>

<div class="d-flex flex-row justify-content-center gap-5">
    <?php
    foreach ($beaniesFiltered->getResult() as $beanie) {
        affichageProduit($beanie);
    }
    ?>
    

</div>