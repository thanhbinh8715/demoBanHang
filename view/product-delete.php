<?php
include ('controller/product-controller.php');
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $result = deleteProductById($id);
    //$result = FALSE;
    
    if ($result == TRUE){
        //echo "Xoa thanh cong";
        header("location: index.php?thongbao=xoa_thanh_cong");
    }else{
        //echo "Loi xoa San Pham : " . mysqli_error($conn);
        header("location: index.php?thongbao=xoa-that-bai");
    }
}


?>

