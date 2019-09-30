<?php

	include "koneksi.php";

	$id_brg = $_POST['id_barang'];
	$merk = $_POST['merk'];
	$nama_brg = $_POST['nama_barang'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga_satuan'];
	$id_admin = $_POST['id_admin'];

	$query = mysqli_query($connect, "insert into barang (id_barang, merk, nama_barang, stok, harga_satuan, id_admin) values ('$id_brg', '$merk','$nama_brg', '$stok', '$harga', '$id_admin')");

	if ($query) {
		header('location:barang.php');
	} else {
		echo mysqli_error();
	}
?>