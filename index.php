<?php

include 'dbConnect.php';
include 'view/header.php';



include 'view/left-menu.php';


if (isset($_GET['thongbao'])){
    if ($_GET['thongbao']== 'xoa_thanh_cong'){
        echo "Ban da xoa thanh cong";
    }else{
        echo "Loi xoa San Pham : ";
    }
}


if (isset($_GET['action'])) {
    switch ($_GET['action']){
        case 'edit':
            include 'view/product-edit.php';
            break;
        case 'delete':
            include 'view/product-delete.php';
            break;
        case 'new':
            include 'view/product-new.php';
            break;
        case 'upload':
            include 'view/upload.php';
            break;
    }    
} else {
    include 'view/product-list.php';
}





mysqli_close($conn);


include 'view/footer.php';
