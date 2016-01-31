<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'thanhbinh';

$conn = mysqli_connect($server, $user, $pass, $dbName);
if (!$conn){
    die('Loi ket noi co so du lieu: '. mysqli_error($conn));
}
