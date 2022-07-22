<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
$name1     = $_POST['name1'];
$name2     = $_POST['name2'];
$email     = $_POST['email'];
$jk        = $_POST['jk'];
$lahir     = $_POST['lahir'];
$kota      = $_POST['kota'];
$keaktifan = $_POST['keaktifan']
//$fotouser = $_POST['fotouser'];
?>

<html>
<head>
<title>Riwayat Daftar</title>
<link rel="icon" href="image\Scan_16.jpg" type="image/x-icon"/>
</head>
<div id ="header">
<body background="image/dark-wood.jpg">
<img src="image/aoa-shigatsu-wa-kimi-no-uso-wallpaper-2.jpg" width=1335 height=335>
<font face="comic sans ms" size=3 color="#000000" align="center">
<br>

<table bgcolor=white width=810 align=center border=5 bordercolor=white>

<tr>
<td>
<h2><p align=center>Riwayat Daftar</p></h2>
<hr width="50%" align="center" size="5" noshade=""/><br>
<table align ="center" width="60%">

<?php 

echo '<p align="center">';

$uploaddir  = 'uploads/';
$uploadfile = $uploaddir . $_FILES['fotouser']['name'];
if (move_uploaded_file($_FILES['fotouser']['tmp_name'],$uploadfile)) {
	echo "File telah berhasil di upload </br>";
	echo "<img src = 'uploads/" . $_FILES['fotouser']['name']."'>";}
else {
	echo "<font color = 'red'>File gagal di upload.</font></br>"; }

echo '<p br>';

echo '<p align="center">';
echo "Nama 		    = $name1 $name2. </br>";
echo "Email			= $email. </br>";
echo "Jenis Kelamin = $jk. </br>";
echo "Kota          = $kota. </br>";
echo "TTL		    = $lahir. </br>";
echo "Status aktif  = $keaktifan </br>";
echo "Nama File 	= ".$_FILES['fotouser']['name']."</br>";
echo "Type File 	= ".$_FILES['fotouser']['type']."</br>";
echo "Ukuran File 	= ".$_FILES['fotouser']['size']."</br>";
echo "Temp File 	= ".$_FILES['fotouser']['tmp_name']."</br>";
?>

<br>
<p align ="center"><a href="index.html">Kembali Home</a></p>
<p align=center>Blog 2018 @Nishi - <a href="http://www.gmail.com" target="blank">anisnishi9@gmail.com</a></p>

</table>>
</body>
</html>