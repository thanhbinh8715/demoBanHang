<?php
include 'controller/product-controller.php';

if (isset($_POST['addProduct'])){
    $name = $_POST['Name'];
    $price = $_POST['Price'];
    $motaNgan = $_POST['MoTaNgan'];
    $mota = $_POST['MoTa'];
    
    //kiem tra file upload
    $target_file = 'uploads/' . basename($_FILES['Image']['name']);
    $imageType = pathinfo($target_file, PATHINFO_EXTENSION);
    if ($imageType !== 'jpg' && $imageType !== 'png' ){
        echo 'Ban chi duoc phep upload file anh co duoi la .jpg hoac .png';
    }  else {
        if (move_uploaded_file($_FILES['Image']['tmp_name'], $target_file)){
            echo 'Ban upload file thanh cong';
            $sanpham = new Product();
            $sanpham->Name = $name;
            $sanpham->Price = $price;
            $sanpham->MoTaNgan = $motaNgan;
            $sanpham->MoTa = $mota;
            $sanpham->Image = $target_file;
            productAddNew($sanpham);
        }
    }
}
?>

<form method="post" action="index.php?action=new" enctype="multipart/form-data">
    <table>
        
        <tr>
            <td>Ten San Pham : </td> 
            <td><input name="Name" /></td>
        </tr>
        <tr>
            <td>Gia : </td> 
            <td><input name="Price" /></td>
        </tr>
        <tr>
            <td>Anh San Pham : </td>
            <td><input name="Image" type="file" /></td>
        </tr>
        <tr>
            <td>Mo Ta Ngan : </td> 
            <td><textarea name="MoTaNgan"></textarea></td>
        </tr>
        <tr>
            <td>Mo Ta : </td> 
            <td><textarea name="MoTa"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="addProduct" value="Them San Pham moi" />
            </td>
        </tr>
    </table>
    
    
</form>

