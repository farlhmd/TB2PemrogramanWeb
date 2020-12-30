<?php
//code by: farhan ilhamdi

$link = mysqli_connect("localhost", "root", "", "KANTOR");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
$varGAJIMIN = $_POST["varGAJIMIN"];
$varGAJIMAX = $_POST["varGAJIMAX"]; 
$varGOLDAR = $_POST["varGOLDARAH"];

mysqli_query($link, "DELETE FROM KARYAWAN WHERE GAJI >= $varGAJIMIN and GAJI<=$varGAJIMAX and GOLDAR = '$varGOLDAR'");
if (mysqli_affected_rows($link)== 0) {
	echo "Tidak ada karyawan yang memenuhi kriteria!";
}else{
	echo "Data Karyawan Sukses di hapus! <br> ";
    echo "Data Karyawan terhapus: \n", mysqli_affected_rows($link) ;
}
$link->close();

echo "
<form action='Soal1.html' method='post'>
<input name='SUBMIT' type='submit' value='Kembali'>
";
/*
database: 
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Muhammad', 'A', '50000000');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Farhan', 'B', '50000000');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Ilhamdi', 'O', '50000000');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Farhan', 'AB', '50000000');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Ilhamdi', 'A', '33000');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Ilhamdi', 'A', '200000');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Ilhamdi', 'A', '20000012');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Ilhamdi', 'A', '3230000');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Ilhamdi', 'A', '3023029');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Ilhamdi', 'A', '230203');
INSERT INTO `KARYAWAN` (`NIP`, `NAMA`, `GOLDAR`, `GAJI`) VALUES ('3229928', 'Ilhamdi', 'A', '2309439');
*/
?>