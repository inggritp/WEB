<?php
require 'functions.php';
$id = $_GET["id"];

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM datapembelian WHERE id = $id");

	return mysqli_affected_rows($conn);
}

$id_convert = intval($id);
if ($id_convert > 0) {
	hapus($id_convert);
	echo "
		<script>
		alert('your data has been removed' );
		document.location.href = 'pembelian.php';
		</script>";
} else {
	echo "
		<script>
		alert('can't delete your data );
		document.location.href = 'pembelian.php';
		</script>";
}
?>