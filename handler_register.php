<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php

include_once 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = $koneksi->query("INSERT INTO pengguna
(nama, email, password)
values
('$nama', '$email', '$password')
");

if ($insert) {
    echo "Data Anda berhasil disimpan";
}else {
    echo"Data anda gagal disimpan";
}

?>