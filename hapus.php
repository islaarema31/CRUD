<?php 

require 'fungsi.php' ;

$id = $_GET["nis"];

if ( hapus($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus !');
			document.location.href = 'index.php';
			</script>
	";
}else{
	echo "<script>
			alert('data berhasil dihapus !');
			document.location.href = 'index.php';
			</script>
	";
}


 ?>