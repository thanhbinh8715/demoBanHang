<?php
include 'controller/product-controller.php';
$id = 0;
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
$pd = getProductById($id);
//print_r($pd);
?>

<form method="post" action="index.php">
    <table>
        
        <tr>
            <td>Ten San Pham : </td> 
            <td><input name="Name" value="<?= $pd->Name ?>" /></td>
        </tr>
        <tr>
            <td>Gia : </td> 
            <td><input name="Price" value="<?= $pd->Price ?>"/></td>
        </tr>
        <tr>
            <td>Mo Ta Ngan : </td> 
            <td><textarea name="MoTaNgan" value="<?= $pd->MoTaNgan ?>"></textarea></td>
        </tr>
        <tr>
            <td>Mo Ta : </td> 
            <td><textarea name="MoTa" value="<?= $pd->MoTa ?>"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="addProduct" value="Them San Pham moi" />
            </td>
        </tr>
    </table>
    
    
</form>

