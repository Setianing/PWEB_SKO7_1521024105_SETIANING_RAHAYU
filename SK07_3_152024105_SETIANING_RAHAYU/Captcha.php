<?php
	session_start();
	$captcha = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,6);//
	$_SESSION['captcha'] = $captcha;

	$gambar = ImageCreate(65, 25); // ukuran kotak width=60 dan heigth=20
	$wk = imagecolorallocate($gambar, 25, 200, 89); //membuat warba kotak ->Navajo White
	$wk = imagecolorallocate($gambar, 255, 255, 255); // membuat warna tulisan->Putil
	imagefilledrectangle($gambar, 0, 0, 50, 20, $wk);
	imagestring($gambar, 10, 3, 3, $captcha, $wt);
	imagejpeg($gambar);
	?>