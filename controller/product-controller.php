<?php

include 'model/product-model.php';

function getProductById($id){
    global $conn;
    $sql = 'select * from tblproduct where ?';
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $dulieu = new Product();
    mysqli_stmt_bind_result($stmt, $dulieu->Id,$dulieu->Name,$dulieu->Image
            ,$dulieu->Price,$dulieu->MoTaNgan,$dulieu->MoTa);
    mysqli_stmt_fetch($stmt);

    return $dulieu;
}

function getAllProduct() {
    global $conn;
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
    } else {
        echo 'cau lenh query sai';
    }
    
    return $dulieu;
}
