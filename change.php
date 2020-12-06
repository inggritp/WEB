<?php
require 'functions.php';

$id = $_GET["id"];

$buy = query("SELECT * FROM datapembelian WHERE id = $id") [0];


if( isset($_POST["submit"]) ){

	$id_convert = intval($id);
	if($id_convert > 0) {

		global $conn;
		$Nama_Buku = $_POST["Nama_Buku"];
		$Jumlah_Item = $_POST["Jumlah_Item"];
		$Alamat = $_POST["Alamat"];
		$Nomor_Telepon = $_POST["Nomor_Telepon"];
		$Metode_Pembayaran = $_POST["Metode_Pembayaran"];

		$query = "UPDATE datapembelian SET 
		Nama_Buku = '$Nama_Buku', 
		Jumlah_Item = $Jumlah_Item,
		Alamat = '$Alamat',
		Nomor_Telepon = $Nomor_Telepon,
		Metode_Pembayaran = '$Metode_Pembayaran'

		WHERE id = $id
		";

		mysqli_query($conn, $query);
		
		echo "
		<script>
		alert('your data has been changed' );
		document.location.href = 'pembelian.php';
		</script>";
		return mysqli_affected_rows($conn);
	} else {
		echo "
		<script>
		alert('can't change your data' );
		document.location.href = 'pembelian.php';
		</script>";
	}
	
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>CHANGE YOUR ITEMS</h1>

	<form action="" method="post">
		<input type="hidden" name="ID" value="<?= $buy["id"];?>">
		<ul>
			<li>
				<label for="Nama_buku" >Book's Name:</label>
				<input type ="text" name="Nama_Buku" id="Nama_Buku" 
				value="<?= $buy["Nama_Buku"];?>">
			</li>
			<li>
				<label for="Jumlah_Item" >Items:</label>
				<input type ="text" name="Jumlah_Item" id="Jumlah_Item"value="<?= $buy["Jumlah_Item"];?>" >
			</li>
			<li>
				<label for="Alamat" >Address:</label>
				<input type ="text" name="Alamat" id="Alamat"value="<?= $buy["Alamat"];?>" >
			</li>
			<li>
				<label for="Nomor_Telepon" >Telephone Numbers:</label>
				<input type ="text" name="Nomor_Telepon" id="Nomor_Telepon"value="<?= $buy["Nomor_Telepon"];?>" >
			</li>
			<li>
				<label for="Metode_Pembayaran" >Payment Method:</label>
				<input type ="text" name="Metode_Pembayaran" id="Metode_Pembayaran"value="<?= $buy["Metode_Pembayaran"];?>" >
			</li>
			<li>
				<button type="submit" name="submit">Save your changes</button>
			</li>
		</ul>
	</form>
</body>
</html>