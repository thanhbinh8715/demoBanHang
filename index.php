<?php
include 'dbConnect.php';
include 'view/header.php';


?>
<div id="main-content">
    <?php
        include 'view/left-menu.php';

        

//        if (isset($_POST['addProduct'])) {
//
//        $Name = $_POST['Name'];
//        $Price = $_POST['Price'];
//        $MoTaNgan = $_POST['MoTaNgan'];
//        $MoTa = $_POST['MoTa'];
//
//        $sql = "INSERT INTO `tblProduct`( `Name`, `Price`, `MoTaNgan`, `MoTa`) VALUES ('$Name','$Price','$MoTaNgan','$MoTa')";
//        $result = mysqli_query($conn, $sql);
//        if ($result){
//        echo 'Them San Pham thanh cong';
//        }else{
//        echo 'Loi them san pham : ' . mysqli_error($conn);
//        }
//        }


        include 'view/product-new.php';

        include 'view/product-list.php';

        mysqli_close($conn);
        ?>
</div>
<?php
include 'view/footer.php';
