<?php
require 'functions.php';

if( isset($_POST["submit"]) ){

	if(tambah($_POST) > 0) {
		echo "
		<script>
		alert('great :)' );
		document.location.href = 'pembelian.php';
		</script>";
	} else {
		echo "
		<script>
		alert('can't submit your request :)' );
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
	<h1>BUY ANOTHER ITEMS</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="Nama_buku" >Book's Name:</label>
				<input type ="text" name="Nama_Buku" id="Nama_Buku" required>
			</li>
			<li>
				<label for="Jumlah_Item" >Items:</label>
				<input type ="text" name="Jumlah_Item" id="Jumlah_Item" required>
			</li>
			<li>
				<label for="Alamat" >Address:</label>
				<input type ="text" name="Alamat" id="Alamat" required>
			</li>
			<li>
				<label for="Nomor_Telepon" >Telephone Numbers:</label>
				<input type ="text" name="Nomor_Telepon" id="Nomor_Telepon" required>
			</li>
			<li>
				<label for="Metode_Pembayaran" >Payment Method:</label>
				<input type ="text" name="Metode_Pembayaran" id="Metode_Pembayaran" required>
			</li>
			<li>
				<button type="submit" name="submit">Submit</button>
			</li>
		</ul>
	</form>
</body>
</html>