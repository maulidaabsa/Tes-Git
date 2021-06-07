<?php
require('karyawan.php');
 
if(isset($_GET['nip'])){
$Lib = new data_karyawan();
$krywn = $Lib->edit_karyawan($_GET['nip']);
$edit = $krywn->fetch(PDO::FETCH_OBJ);
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2 align="center">Ubah Data Karyawan</h2>
<form action="edit.php" method="POST" class="form-group">
Nip: <input type="text" name="nip" value="'.$edit->nip.'" class="form-control"><br>
Nama: <input type="text" name="nama" value="'.$edit->nama.'" class="form-control"><br>
Jabatan: <input type="text" name="jabatan" value="'.$edit->jabatan.'" class="form-control"><br>
Umur: <input type="number" name="umur" value="'.$edit->umur.'" class="form-control"><br>
Alamat: <input type="text" name="alamat" value="'.$edit->alamat.'" class="form-control"><br>
<input type="submit" name="update_karyawan" value="Update" class="btn btn-info">
</form>
</div>
</body>
</html>
';
}
 
if(isset($_POST['update_karyawan'])){
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
 
$Lib = new data_karyawan();
$upd = $Lib->update_karyawan($nip, $nama, $jabatan, $umur, $alamat);
if($upd == "Success"){
header('Location: list.php');
}
}
 
?>
