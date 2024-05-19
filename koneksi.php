<?php
$koneksi = new mysqli('localhost', 'root', '', 'pendaftaran_sederhana');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>