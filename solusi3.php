<style>
	table{
		border: 1px solid black;
		border-collapse: collapse;
	}
	tr{
		border: 1px solid black;
	}
	td{
		border: 1px solid black;
		text-align: right;
	}
	td.no{
		border: 1px solid black;
		text-align: left;
	}
</style>
<?php

$jml= count($_COOKIE["keranjang"]);
$basket = $_COOKIE["keranjang"];
echo "<table>
		<tr>
		<td><strong>NO.</strong></td>
		<td><strong>Tagihan Pembayaran</strong></td>
		</tr>";
for ($urutanKe=0; $urutanKe < $jml; $urutanKe++) { 
echo "<tr>";
echo "<td>";
echo ($urutanKe+1);
echo ".";
echo "</td>";
echo "<td class=no>";
echo " ";
echo ($basket[$urutanKe]);
echo "</td>";
}
echo"</table>";

?>
<br>
<form action="soal3.php" method="POST">
<input type="submit" name="submit" value="Back">
</form>
<form action="delcookie.php" method="POST">
<input type="submit" name="submit" value="Hapus daftar belanja">
</form>
