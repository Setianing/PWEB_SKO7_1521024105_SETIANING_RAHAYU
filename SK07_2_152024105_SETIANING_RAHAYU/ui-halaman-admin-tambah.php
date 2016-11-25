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
	<h2>HALAMAN ADMIN-TAMBAH OBAT-BERSESSION</h2>
	<hr>
	<table border="2">
		<form action="php-pemroses-tambah.php" method="POST">
			<tr> 
				<th>ID OBAT </th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<th>NAMA OBAT </th>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<th>DOSIS OBAT </th>
				<td>
					<select name="dosis">
						<option value="1">Rendah</option>
						<option value="2">Sedang</option>
						<option value="3">Tinggi</option>
					</select>
				</td>
			</tr>
			<tr> 
				<th>HARGA OBAT </th>
				<td>
					<input type="number" name="regone">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit">
				</td>
			</tr>
		</form>
	</table>
	<a href="logout.php">logout</a>
</body>
</html>