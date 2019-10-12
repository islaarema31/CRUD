<?php 


// koneksi
 $conn = mysqli_connect("localhost","root" , "" , "db_sekolah");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row ; 
	}
	return $rows;
}

function tambah($data){
	global $conn;

	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	$query = "INSERT INTO siswa 
				VALUES 
				('$nis','$nama','$kelas','$jurusan')
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}



function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM siswa WHERE nis = $id");

	return mysqli_affected_rows($conn);
}



function ubah($data){
	global $conn;

	$id = $data["nis"];
	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	$query = "UPDATE siswa 
				SET 
				nis = '$nis', nama = '$nama', kelas = '$kelas', jurusan = '$jurusan' WHERE nis = $id
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}


function cari($cari){
	$query = "SELECT * FROM siswa WHERE
				nis LIKE '%$cari%' OR 
				nama LIKE '%$cari%' OR 
				kelas LIKE '%$cari%' OR
				jurusan LIKE '%$cari%'
				";

	return query($query);
}









 ?>