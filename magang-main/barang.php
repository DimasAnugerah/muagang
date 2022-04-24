<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="barang.css">
    
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
				<li><a href="dashboard.php"><i class=""></i>Barang</a></li>
				<li><a href="dashboard.php"><i class=""></i>Informasi Kalibrasi</a></li>
				<li><a href="dashboard.php"><i class=""></i>Kalibrasi</a></li>
				<li><a href="dashboard.php"><i class=""></i>Monitoring</a></li>
				
			</ul>
		</div>
		<section>
<div class="container"> 
<a href="tambah_barang.php">Tambah Data</a><br><br> 
<table class="table">
		<tr>
			<th>ID</th>
			<th>Nama Barang</th>
			<th>Merk</th>
			<th>Jumlah</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Edit</th>
		</tr>
		<tr>
			<td>666</td>
			<td>Seperangkat alat sholat</td>
			<td>Honda</td>
			<td>50</td>
            <td>Bagus</td>
            <td>Rp.666.666</td>
            <td><button>Hapus</button></td>
            
		</tr>
		<tr>
            <td>777</td>
			<td>Seperangkat alat perang</td>
			<td>Yamaha</td>
			<td>50</td>
            <td>Lecet</td>
            <td>Rp.666.666</td>
            <td><button>Hapus</button></td>
		</tr>
		<tr>
            <td>888</td>
			<td>Seperangkat alat musik</td>
			<td>Suzuki</td>
			<td>50</td>
            <td>Bagus</td>
            <td>Rp.666.666</td>
            <td><button>Hapus</button></td>
		</tr>
	</table>
    </div>
        </section>
 </body>
</html>