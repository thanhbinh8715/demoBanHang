<?php
if (isset($_POST['upload'])){
    //print_r($_FILES);
        //var_dump($_FILES);
    $target_file = 'uploads/';
    $target_file .= basename($_FILES['productImage']['name']);
    if ($_FILES['productImage']['size'] > 100000){
        echo 'File ban upload qua lon (chi duoc phep upload file < 1kb).';
        
    }  else {
        if (move_uploaded_file($_FILES['productImage']['tmp_name'], $target_file)){
            echo 'file '. $_FILES['productImage']['name'] . ' da duoc upload thanh cong.';
        }else{
            echo 'loi upload file';
        }
        
    }

}
?>

<form action="index.php?action=upload" method="post" enctype="multipart/form-data">
    <input type="file" name="productImage" />
    <input type="submit" value="Upload Anh San Pham" name="upload" />
</form>

