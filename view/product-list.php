<?php
include 'controller/product-controller.php';
?>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Ten San Pham</th>
        <th>Gia</th>
        <th>MoTaNgan</th>
        <th>MoTa</th>
    </tr>

    <?php
    foreach ($dulieu as $dl){
            ?>
            <tr>
                <td><?= $dl->Id ?></td>
                <td><?= $dl->Name ?></td>
                <td><?= $dl->Price ?></td>
                <td><?= $dl->MoTaNgan ?></td>
                <td><?= $dl->MoTa ?></td>
            </tr>
            <?php
    }
    ?>
</table>
