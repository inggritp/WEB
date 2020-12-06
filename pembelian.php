<?php
require 'functions.php';

$pembeli = query("SELECT * FROM datapembelian");

$result = mysqli_query($conn, "SELECT * FROM datapembelian");
?>
<!DOCTYPE html>
<html>
<head>
	<title> LIST PEMBELIAN</title>
</head>
<body>
<h1>BUYING DETAILS </h1>
<a href="add.php">BUY ANOTHER ITEMS</a>
<br><br>


	
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO.</th>
			<th>Aksi</th>
			<th>Book's Name</th>
			<th>Items</th>
			<th>Address</th>
			<th>Telephone Numbers</th>
			<th>Paymnet Method</th>
		</tr>
		<?php $i = 1; ?>

		<?php foreach($pembeli as $row) :?>
		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="change.php?id=<?= $row["ID"]; ?>">Change</a>|
				<a href="delete.php?id=<?= $row["ID"]; ?>">Delete</a>
			</td>
			<td><?= $row["Nama_Buku"]; ?></td>
			<td><?= $row["Jumlah_Item"]; ?></td>
			<td><?= $row["Alamat"]; ?></td>
			<td><?= $row["Nomor_Telepon"]; ?></td>
			<td><?= $row["Metode_Pembayaran"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>

</body>
</html>