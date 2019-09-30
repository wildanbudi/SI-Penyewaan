<?php

	include "koneksi.php";
	$id = $_GET['id'];
	$id_brg = $_POST['id_barang'];
	$merk = $_POST['merk'];
	$nama_brg = $_POST['nama_barang'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga_satuan'];
	$id_admin = $_POST['id_admin'];

	$query = mysqli_query($connect, "update barang set id_barang= '$id_brg', merk='$merk', nama_barang='$nama_brg', stok='$stok', harga_satuan='$harga', id_admin='$id_admin' where id_barang='$id'") or die(mysqli_error($connect));

	if ($query) {
		header('location:barang.php');
	} else {
		echo mysqli_error();
	}
?>