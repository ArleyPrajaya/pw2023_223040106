<?php
require('functions.php');

$title = 'Form Tambah Data';

// INSERT DATA JIKA TOMBOL DI KLIK

if(isset($_POST['tambah'])) {
// tampilkan pesan jika data berhasil terimput ke database
 if(tambah($_POST) > 0) {
    echo "<script>
     alert('data berhasil di tambahkan');
     document.location.href = 'index.php';
    </script>";
 }
}

require('views/tambah.view.php');
