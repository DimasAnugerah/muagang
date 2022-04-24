<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tambah_barang.css">
    
    <title>Barang</title>
</head>
<body>
<div class="header">
	<h2>SUCOFINDO</h2>
	<a href="login.php" class="tombol">Logout</a>
</div>

<input type="checkbox" id="cek">
		<label for="cek">
			<i class="fas fa-arrow-right" id="btn"></i>
			<i class="fas fa-arrow-left" id="close"></i>
            <img src="" alt="" srcset="">
		</label>
		<div class="sidebar">
			<ul>
				<li><a href="index_admin.php"><i class=""></i>Dashboard</a></li>
				<li><a href="barang.php"><i class=""></i>Barang</a></li>
				<li><a href="dashboard.php"><i class=""></i>Informasi Kalibrasi</a></li>
				<li><a href="dashboard.php"><i class=""></i>Kalibrasi</a></li>
				<li><a href="dashboard.php"><i class=""></i>Monitoring</a></li>
				
			</ul>
		</div>
<form action="sambung.php" method="post" >
<div class="container">  
<h1>Tambah Barang</h1>
  <form method="post" action="simpang_barang.php">
    <table cellpadding="8">
      <tr>
        <td>ID</td>
        <td><input type="text" name="id"></td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Merk</td>
        <td><input type="text" name="merk"></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="text" name="jumlah"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td><input type="text" name="keterangan"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="text" name="Harga"></td>
      </tr>
    </table>
    <a href=""><input type="submit" value="Simpan"></a>
    <a href="barang.php"><input type="button" value="Batal"></a>    
</div>
</form>




<!-- <?php
// include "koneksi.php";

// $id_barang = $_POST['id'];
// $nama_barang = $_POST['nama'];
// $merk = $_POST['merk'];
// $tipe = $_POST['tipe'];
// $jumlah = $_POST['jumlah'];
// $keterangan = $_POST['keterangan'];
// $harga = $_POST['harga'];

// mysqli_query($konek, "INSERT INTO barang values ('$id_barang','$nama_barang','$merk','$tipe','$jumlah','$keterangan','$harga')");
// if($sql){ 
//     header("location: tambah_barang.php");
//     echo "Barang Berhasil Ditambahkan";
//   }else{
//     echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
//     echo "<br><a href='tambah_barang.php'>Kembali Ke Form</a>";
//   }

?> -->











</body>
</html>

