<?php 
require 'fungsi.php' ;


$id = $_GET["nis"];

$ss = query("SELECT * FROM siswa WHERE nis =$id")[0];


if (isset($_POST["submit"])) {
	if ( ubah($_POST) > 0) {
		echo "
			<script>
			alert('data berhasil diubah !');
			document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
			alert('data gagal diubah !');
			document.location.href = 'index.php';
			</script>
		";
	}
		
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah</title>
</head>
<body>
	<h1>Ubah siswa</h1>

	<form method="post" action="">
		<ul>
			<li>
				<lable for="nis">nis  : </lable>
				<input type="hidden" name="nis" id="nis" placeholder="nis" required value="<?= $ss['nis']; ?>"><?= $ss['nis']; ?>
			</li>
			<li>
				<lable for="nama">nama : </lable>
			<input type="text" name="nama" id="nama" placeholder="nama" value="<?= $ss['nama']; ?>">
			</li>
			<li>
				<lable for="kelas">kelas : </lable>
				<input type="text" name="kelas" id="kelas" placeholder="kelas" value="<?= $ss['kelas']; ?>">
			</li>
			<li>
				<lable for="jurusan">jurusan : </lable>
				<input type="text" name="jurusan" id="jurusan" placeholder="jurusan" value="<?= $ss['jurusan']; ?>">
			</li>
			<button type="submit" name="submit">kirim</button>
		</ul>
	</form>

</body>
</html>