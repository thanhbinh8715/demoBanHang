<?php

include 'model/product-model.php';


$sql = 'select * from tblproduct';
$result = mysqli_query($conn, $sql);

$dulieu = array();
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $model = new Product();
            $model->Id = $row['Id'];
            $model->Name = $row['Name'];
            $model->MoTa = $row['MoTa'];
            $model->Price = $row['Price'];
            $dulieu[] = $model;
        }
    }
}else{
    echo 'cau lenh query sai';
}
