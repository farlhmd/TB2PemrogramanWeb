<?php
$cookie = $_COOKIE["keranjang"];
setcookie($cookie, "", time() - 36000);
?>
<html>
<body>

<?php
echo "Daftar belanjaan sukses di hapus! silahkan kembali berbelanja~ <br><br>";
?>
<form action="soal3.php" method="POST">
<input type="submit" name="SUBMIT" value="Back">
</body>
</html>