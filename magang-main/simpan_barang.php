<?php
include "koneksi.php";

$id_barang = $_POST['id'];
$nama_barang = $_POST['nama'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];

mysqli_query($konek, "INSERT INTO barang values ('$id_barang','$nama_barang','$merk','$tipe','$jumlah','$keterangan','$harga')");
// if($sql){ 
//     header("location: tambah_barang.php");
//     echo "Barang Berhasil Ditambahkan";
//   }else{
//     echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
//     echo "<br><a href='tambah_barang.php'>Kembali Ke Form</a>";
//   }

?>