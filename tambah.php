<?php 
require 'fungsi.php' ;

if (isset($_POST["submit"])) {
	if (tambah($_POST) > 0) {
		echo "
			<script>
			alert('data berhasil ditambah !');
			document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
			alert('data gagal ditambah !');
			document.location.href = 'index.php';
			</script>
		";
	}
		
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
</head>
<body>
	<h1>Tambah siswa</h1>

	<form method="post" accept="">
		<ul>
			<li>
				<lable for="nis">nis  : </lable>
				<input type="text" name="nis" id="nis" placeholder="nis" required>
			</li>
			<li>
				<lable for="nama">nama : </lable>
			<input type="text" name="nama" id="nama" placeholder="nama">
			</li>
			<li>
				<lable for="kelas">kelas : </lable>
				<input type="text" name="kelas" id="kelas" placeholder="kelas">
			</li>
			<li>
				<lable for="jurusan">jurusan : </lable>
				<input type="text" name="jurusan" id="jurusan" placeholder="jurusan">
			</li>
			<button type="submit" name="submit">kirim</button>
		</ul>
	</form>

</body>
</html>