
<?php
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[];
}

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $cart=$_SESSION['cart'];
    $action = 'plus';

    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }    

    if(!isset($cart[$id])){
        $cart[$id] = 0;
    }

    switch($action){
        case 'plus':
            $cart[$id]++;
            break;
        case 'moins':
            $cart[$id]--;
            break;
        case 'suprimer':
            $cart[$id]=0;
            break;
    }

    if($cart[$id]<=0){
        unset($cart[$id]);
    }
    $_SESSION['cart']=$cart;
}    
// header('Location: ?page=panier');
elseif(isset($_GET['action'])&& $_GET['action']=='vider'){
        $_SESSION['cart']=[];
    }
?>
<table> 
    <tr style="font-weight:bold;">
        <td>  
            Nom
        </td>
        <td>  
            Prix unitaire TTC (€)
        </td>
        <td>  
            Quantité
        </td>
        <td>  
            Prix TTC (€)
        </td>
    </tr>
    <?php
    $total=0;
    foreach ($_SESSION['cart'] as $id => $quantity){
        $beanie = $beanies[$id];
        $total += $beanie['prix']*$quantity;
        echo
            '<tr>
                <td>',$beanie['nom'],'</td>
                <td>',$beanie['prix'],'</td>
                <td>',$quantity,'</td>
                <td>',$beanie['prix']*$quantity,'</td>
                <td>
                    <a class="btn btn-outline-dark"
                        href="?page=panier&action=plus&id='.$id.'">
                        +
                    </a>
                    <a class="btn btn-outline-dark"
                        href="?page=panier&action=moins&id='.$id.'">
                        -
                    </a>
                    <a class="btn btn-outline-dark"
                        href="?page=panier&action=suprimer&id='.$id.'">
                        x
                    </a>
                </td> 

            </tr>
        ';
    }
    ?>
    <tr>
        <td class="bg-dark text-white">Total </td>
        <td class="bg-dark text-white"><?= $total;?></td>

    </tr>
</table>

<a class="btn btn-dark mt-3" href="?page=panier&action=vider">
    Vider le panier
</a>
