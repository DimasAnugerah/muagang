<?php
include "koneksi.php";
?>

<?php

$nik			= $_POST['nik'];
$nama_karyawan	= $_POST['nama_karyawan'];
$jabatan		= $_POST['jabatan'];
$tgl_masuk		= $_POST['tgl_masuk'];
$divisi			= $_POST['divisi'];

$query_insert= "INSERT INTO barang
            (nik,nama_karyawan,jabatan,tgl_masuk,divisi)VALUES ('$nik',
        '$nama_karyawan',
        '$jabatan',
        '$tgl_masuk',
        '$divisi')";


$query_insert_ok =mysqli_query($koneksi,$query_insert);


if ($query_insert_ok){
	
	header("location:tambah_barang.php?pesan=SuksesTambah");
}else{
	header("location:index_admin.php?pesan=GagalTambah");
}

?> 