<?php
	// Start the session
	session_start();
?>
<?php
	//memanggil koneksi
	include("koneksi.php");
	//menangkap inputan
	$u=$_POST['username'];
	$p=$_POST['password'];

	//jika ada form yang kosong
	if (empty($u) || empty($p)){
		header('location:ui-login.php');
	}
	//jika tidak
	else {
		//MENCOCOKKAN DGN DATABASE
		//mengecek data inputan di database
		$sql=mysql_query("SELECT * FROM user WHERE nama='$u' AND kunci='$p'");
		$ketemu = mysql_num_rows($sql);
		//jika ditemukan data di database
		if ($ketemu>0){
			$_SESSION['username'] = $u;
			$_SESSION['password'] = $p;
			header('location:ui-halaman-admin.php');
		}
		//jika tidak
		else {
			header('location:ui-halaman-gagal.php');
		}
	}
?>