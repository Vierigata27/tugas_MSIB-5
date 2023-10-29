<?php
session_start();
include_once 'Admin/koneksi.php';
include_once 'models/Member.php';

$username = $_POST['username'];
$password = $_POST['password'];
$data = [
    $username, $password
];

$obj = new Member();
$rs = $obj->cekLogin($data);

if(!empty($rs)){
    $_SESSION['MEMBER'] = $rs;
    header('location:Admin/index.php?url=produk');
}else{
    header('location:index.php?hal=home');
}

?>