<?php
$cart = new Cart();
$cart->handle($_GET);
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prix unitaire TTC (€)</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix TTC (€)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total = 0;
        foreach ($cart->getContent() as $id => $quantity) {
            $beanie = $mesProduits[$id];
            $total += $beanie->getPrice() * $quantity;
            echo '
    <tr>
      <td scope="row">', $beanie->getName(), '</td>
      <td>', $beanie->getPrice(), '</td>
      <td>', $quantity, '</td>
      <td>', $beanie->getPrice() * $quantity, '</td>
      <td>
                    <a class="btn btn-outline-dark"
                        href="?page=panier&action=plus&id=' . $id . '">
                        +
                    </a>
                    <a class="btn btn-outline-dark"
                        href="?page=panier&action=moins&id=' . $id . '">
                        -
                    </a>
                    <a class="btn btn-outline-dark"
                        href="?page=panier&action=suprimer&id=' . $id . '">
                        x
                    </a>
                </td> 
    </tr>';
        }
        ?>

        <tr>
            <td colspan="3" class="bg-dark text-white text-center">Total </td>
            <td colspan="2" class="bg-dark text-white">
                <?= $total; ?>
            </td>

        </tr>
    </tbody>
</table>

<a class="btn btn-dark mt-3 mx-3" href="?page=panier&action=vider">
    Vider le panier
</a>