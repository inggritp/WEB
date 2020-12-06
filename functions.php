<?php
$conn = mysqli_connect("localhost", "root", "", "pembelian");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;
}



function tambah ($_add){
	global $conn;
	$Nama_Buku = $_add["Nama_Buku"];
	$Jumlah_Item = $_add["Jumlah_Item"];
	$Alamat = $_add["Alamat"];
	$Nomor_Telepon = $_add["Nomor_Telepon"];
	$Metode_Pembayaran = $_add["Metode_Pembayaran"];

	$query = "INSERT INTO datapembelian VALUES ('', '$Nama_Buku', '$Jumlah_Item', '$Alamat', '$Nomor_Telepon', '$Metode_Pembayaran')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);




}

?>