<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/pw2023_223040106/kuliah/pertemuan11/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040106') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data) {
  $conn = koneksi();
  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

 $query = "INSERT INTO
            mahasiswa
          VALUES
          (null,'$nim', '$nama', '$email', '$jurusan', '$gambar')";

          mysqli_query($conn, $query) or die(mysqli_error($conn));
          
   return mysqli_affected_rows($conn);     
}


function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}

function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id= $id");

  return mysqli_affected_rows($conn);

}