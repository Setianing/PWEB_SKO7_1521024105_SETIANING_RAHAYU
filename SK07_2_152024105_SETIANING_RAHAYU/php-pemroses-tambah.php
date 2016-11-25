<?php
	// Start the session
	session_start();
?>
<?php
	//memanggil koneksi
	include("koneksi.php");
	//menangkap inputan
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$dosis=$_POST['dosis'];
	$harga=$_POST['regone'];

	// jika ada salah satu id, nama, dosis, harga kosong
	if (empty($id) OR empty($nama) OR empty($dosis) OR empty($harga)){
		header('location:ui-halaman-admin-tambah.php');
	} 
	// jika seluruh data ada isiannya
	else{
		mysql_query("INSERT INTO obat VALUES ('$id', '$nama', '$dosis', '$harga')");
		header('location:ui-halaman-admin.php');
	}
?>