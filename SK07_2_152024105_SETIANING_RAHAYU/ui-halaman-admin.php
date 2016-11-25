<?php
	// Start the session
	session_start();
	if (empty($_SESSION['username'])){
		header('location:ui-login.php');
	}
	//koneksi database
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<h2>HALAMAN ADMIN-BERSESSION</h2>
	<hr>
	<table border="2">
		<tr>
			<th>NO</th>
			<th>ID OBAT</th>
			<th>NAMA OBAT</th>
			<th>DOSIS OBAT</th>
			<th>HARGA OBAT</th>
		</tr>
		<?php
			//MENAMPILKAN DATA OBAT
			//1. melakukan pengambilan data
			$obat=mysql_query("SELECT * FROM obat");
			
			$no=1;
			//2. menguraikan dan menampilkan data dari tabel OBAT
			while($data=mysql_fetch_assoc($obat)){?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data['id_obat']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['dosis']; ?></td>
					<td><?php echo $data['harga']; ?></td>
				</tr>
			<?php
			 $no++;
			}
		?>
	</table>
	<a href="ui-halaman-admin-tambah.php">TAMBAH OBAT</a>
	<a href="logout.php">logout</a>
</body>
</html>