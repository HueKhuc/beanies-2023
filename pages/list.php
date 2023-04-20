<?php
$beaniesFiltered = $mesProduits;
$material = null;
$minPrice = null;
$maxPrice = null;
$size = null;


if (!empty($_POST['material'])) {
    $material = trim($_POST['material']);

    $beaniesFiltered = array_filter($beaniesFiltered, function (Beanie $beanie) use ($material) {
        return in_array($material, $beanie->getMaterial());
    });
}
if (!empty($_POST['size'])) {
    $size = trim($_POST['size']);

    $beaniesFiltered = array_filter($beaniesFiltered, function (Beanie $beanie) use ($size) {
        return in_array($size, $beanie->getSizes());
    });
}
if (!empty($_POST['minPrice'])) {
    $minPrice = floatval($_POST['minPrice']);

    $beaniesFiltered = array_filter($beaniesFiltered, function (Beanie $beanie) use ($minPrice) {
        return $beanie->getPrice() >= $minPrice;
    });
}
if (!empty($_POST['maxPrice'])) {
    $maxPrice = floatval($_POST['maxPrice']);

    $beaniesFiltered = array_filter($beaniesFiltered, function (Beanie $beanie) use ($maxPrice) {
        return $beanie->getPrice() <= $maxPrice;
    });
}
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
                    if ($value == $material) {
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
                    echo '<option value="' . $taille. '"';
                    if ($taille == $size) {
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
                value="<?php echo $minPrice; ?>">
        </div>
        <div class="form-group d-flex flex-row gap-2 align-items-center text-center">
            <label for="maxPrice">Max (€)</label>
            <input type="number" name="maxPrice" id="maxPrice" class="form-control custom-select"
                value="<?php echo $maxPrice; ?>">
        </div>
        <button class="btn btn-outline-dark align-self-center" type="submit">Filtre</button>
    </div>
</form>

<div class="d-flex flex-row justify-content-center gap-5">
    <?php
    foreach ($beaniesFiltered as $key => $beanie) {
        affichageProduit($beanie);
        echo $key . '">
                Ajouter au panier </a></div></div>';
    }
    ?>

</div>