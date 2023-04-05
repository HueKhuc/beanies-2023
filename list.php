<?php
    foreach ($beanies as $key => $beanie){
        echo'
            <tr>
            <td>',
            $key + 1,
            '</td>
            ';
        affichageProduit($beanie);
    };
?>
