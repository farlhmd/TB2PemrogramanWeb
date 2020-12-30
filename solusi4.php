<style>
	img{
		width:20%; 
		height:20%;
	}
</style>
<?php
$info = pathinfo($_FILES['varPHOTO']['name']);
$ext = $info['extension'];
$uploadOk = 1;
$varNPM = $_POST['varNPM'];
$newname = "$varNPM.".$ext; 
$target = 'uploads/'.$newname;
if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif") {
  echo "Hanya file ekstensi foto yang boleh di upload!";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "<br> Gagal di upload.";
} else {
if (move_uploaded_file( $_FILES['varPHOTO']['tmp_name'], $target)){
echo "File $newname anda berhasil diupload:<br><br>";
echo "<img src='uploads/$newname' alt='Foto yang sudah anda upload' class='foto'>";

  } else {
    echo "<br>Gagal Upload.";
  }
}
?>