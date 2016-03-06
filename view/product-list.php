<?php
include 'controller/product-controller.php';
$dulieu = getAllProduct();
?>

<a href="index.php?action=new" >
    <button>Them San Pham moi</button>
</a>
<br />

<table border="1">
    <tr>
        <th>Id</th>
        <th>Ten San Pham</th>
        <th>Anh dai dien</th>
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
                <td><img class="anhdaidien"  
                         style="width: 200px;height: 200px" 
                         src="<?= $dl->Image ?>" title="anh dai dien" alt="image" />
                </td>
                <td><?= $dl->Price ?></td>
                <td><?= $dl->MoTaNgan ?></td>
                <td><?= $dl->MoTa ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $dl->Id ?>">Edit</a>
                </td>
                <td>
                    <a href="index.php?action=delete&id=<?= $dl->Id ?>">Delete</a>
                </td>
            </tr>
            <?php
    }
    ?>
</table>
