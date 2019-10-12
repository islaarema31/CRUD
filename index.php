<?php 

require 'fungsi.php' ;

 // ambil data table
$ss = query("SELECT * FROM siswa ORDER BY nama");

if (isset($_POST["submit"])) {
	$ss = cari($_POST["cari"]);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
<center><h1>Daftar siswa</h1></center>
	<form method="post" action="">
		
		<input type="text" name="cari" autofocus placeholder="cari siswa" autocomplete="off">
		<button type="submit" name="submit">Cari</button>


	</form><br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>no</th>
		<th>nis</th>
		<th>nama</th>
		<th>kelas</th>
		<th>jurusan</th>
		<th>aksi</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach ($ss as $row ) : ?>
	<tr>
		<td><?= $i++; ?></td>
		<td><?= $row["nis"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["kelas"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
		<td><a href="hapus.php?nis=<?= $row["nis"]; ?>">hapus</a> | <a href="ubah.php?nis=<?= $row["nis"]; ?>">ubah</a>
		</td>
	</tr>
<?php  endforeach; ?>
</table>

<a href="tambah.php">tambah</a>


</body>
</html>