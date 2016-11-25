<html>
<head>
<meta charset="utf-8">
<title>Captcha</title>
</head>
<?php
	if (isset($_POST['cek'])) {// jika Sumbit cek di jalankan
		if ($_SESSION['Captcha']==$_POST['Captcha']){//jika captcha yang ditulissm dengan yang ditampilkan maka 
			echo "<script> alert ('Berhasil ! Kode Captcha Benar!</script>";
		}else{ 
			echo "<script>alert('Kode Captcha Tidak Benar!')</script";
		}
	}
	?>
<body>
	<form method="post">
		Tulis Kode Captcha ini : <img src="captcha.php"/><br/>
	<input type="text" name="captcha" maxlength="6"/><br/>
	<input type="sumbit" name="cek" value="Cek Captcha"/>
	</form>
</body>
</html>