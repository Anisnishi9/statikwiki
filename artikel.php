<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<p><font face="Courier New"><a href="home1.html">Kembali Home</a></p></font>
<h2><p align=center>File Uploaded</p></h2>
<hr width="50%" align="center" size="5" noshade=""/><br>
<table align ="center" width="60%">


<?php 

echo '<p align="center">';

echo "Nama File 	= ".$_FILES['fileartikel']['name']."</br>";
echo "Type File 	= ".$_FILES['fileartikel']['type']."</br>";
echo "Ukuran File 	= ".$_FILES['fileartikel']['size']."</br>";
echo "Temp File 	= ".$_FILES['fileartikel']['tmp_name']."</br>";

echo '<p align="center">';
$uploaddir  = 'uploads/';
$uploadfile = $uploaddir . $_FILES['gambar']['name'];
if (move_uploaded_file($_FILES['gambar']['tmp_name'],$uploadfile)) {
	echo "File telah berhasil di upload </br>";
	echo "<img src = 'uploads/" . $_FILES['gambar']['name']."'>";}
else {
	echo "<font color = 'red'>File gambar gagal di upload.</font></br>"; }
	
$uploaddir  = 'uploads/';
$uploadfile = $uploaddir . $_FILES['fileartikel']['name'];
if (move_uploaded_file($_FILES['fileartikel']['tmp_name'],$uploadfile)) {
	echo "File telah berhasil di upload </br>";
	echo "<iframe src = 'uploads/" . $_FILES['fileartikel']['name']."'>'";}
else {
	echo "<font color = 'red'>File artikel gagal di upload.</font></br>"; }

?>
</table>
</body>
</html>