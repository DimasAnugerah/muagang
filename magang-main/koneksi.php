<?php

$dbhost	= 'localhost';
$dbuser	= 'root';

$dbpass	= '';
$dbname	= 'magang'; /*Database powered By Untoro*/

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$connect) {
    die("Maaf koneksi anda gagal : " . mysqli_connect_error());
}else{
   echo "";
}



?>
