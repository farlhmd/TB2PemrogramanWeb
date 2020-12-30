<?php
if ($_GET["SUBMIT"] == "MASUKKAN KERANJANG")  {
	if ($_GET["varBELI"])  {
		$jml = 0;
		if (isset($_COOKIE["keranjang"])) {
			$jml = count($_COOKIE["keranjang"]);
		}
		$namacookie = "keranjang[$jml]";
		setcookie($namacookie, $_GET["varBELI"], time() + 60 * 15);
	}
 
}
if ($_GET["SUBMIT"] == "SELESAI BELANJA")  {
	header("Location: solusi3.php");
	exit();
}
?>

<html><head><title>Soal 3</title></head>
<body>
<form method="get" action="soal3.php">
Pilihan barang yang boleh dibeli :<br>
<input type="radio" name="varBELI" value="BUKU" checked> BUKU <br>
<input type="radio" name="varBELI" value="TAS"> TAS <br>
<input type="radio" name="varBELI" value="PENSIL"> PENSIL <br>
<input type="radio" name="varBELI" value="DISKET"> DISKET <br>
<input type="radio" name="varBELI" value="TOPI"> TOPI <br>
<input type="submit" name="SUBMIT" value="MASUKKAN KERANJANG"> <br>
<input type="submit" name="SUBMIT" value="SELESAI BELANJA"> <br>
<?php
if ($_GET["SUBMIT"] == "MASUKKAN KERANJANG")  {
	if ($_GET["varBELI"]) {
		echo "Barang ke-" . ($jml + 1) . 
        		        " yang dimasukkan ke keranjang cookie = <strong> " .    
        $_GET["varBELI"] ." </strong>";
	}
}

?>



</form>
</body>
</html>
