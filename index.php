<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2 align="center">Masukkan Karyawan Baru</h2>
<form action="home.php" method="POST" class="form-group row">
<b>Nip:</b> <input type="text" name="nip" class="form-control" required><br>
<b>Nama:</b> <input type="text" name="nama" class="form-control"><br>
<b>Jabatan:</b> <input type="text" name="jabatan" class="form-control"><br>
<b>Umur:</b> <input type="number" name="umur" class="form-control"><br>
<b>Alamat:</b> <input type="text" name="alamat" class="form-control"><br>
<center><input type="submit" name="tmbh_karyawan" value="Tambah" class="btn btn-success">&nbsp;&nbsp;
<input type="reset" value="Reset" class="btn btn-warning"></center>
</form>
</div>
</body>
</html>
