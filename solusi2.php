<?php
$link = mysqli_connect("localhost", "root", "", "FUNCLUB");
if ($link->connect_error) {
	die("Koneksi Gagal!". $link->connect_error);
}
$user = $_POST["varUSER"];
$pwd = $_POST["varPWD"];

$code = "SELECT * FROM PENGGEMAR WHERE IDMEMBER='$user' AND PASSWORD='$pwd'";
$hasil = mysqli_query($link, $code) or die (mysqli_error($link));
$baris = mysqli_num_rows($hasil);

if ($baris==1) {
	header("location:jakmania.php");
}
else{
	header("location:errorlogin.php");
}

?>