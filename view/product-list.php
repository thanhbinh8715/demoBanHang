<?php
include 'controller/product-controller.php';
$dulieu = getAllProduct();
?>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Ten San Pham</th>
        <th>Gia</th>
        <th>MoTaNgan</th>
        <th>MoTa</th>
        <th>Chuc nang</th>
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
                <td>
                    <a href="index.php?action=edit&id=<?= $dl->Id ?>">Edit</a>
                </td>
            </tr>
            <?php
    }
    ?>
</table>
