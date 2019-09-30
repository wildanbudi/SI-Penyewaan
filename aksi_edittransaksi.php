<?php

	include "koneksi.php";
	$id = $_GET['id'];
	$id_tr = $_POST['id_transaksi'];
	$tgl_s = $_POST['tgl_sewa'];
	$tgl_k = $_POST['tgl_kembali'];
	$jml_brg = $_POST['jumlah_barang'];
	$harga = $_POST['harga_satuan'];
	$total = $_POST['total_harga'];
	$id_barang = $_POST['id_barang'];
	$id_pelanggan = $_POST['id_pelanggan'];
	$awal = new DateTime($tgl_s);
	$akhir = new DateTime($tgl_k);
	$interval = $awal->diff($akhir);
	$diff = $interval->format('%d days');


	$query = mysqli_query($connect, "update transaksi set id_transaksi= '$id_tr', tgl_sewa='$tgl_s', tgl_kembali='$tgl_k', jumlah_barang='$jml_brg', harga_satuan='$harga', total_harga='$diff' * '$jml_brg' * '$harga', id_barang='$id_barang', id_pelanggan='$id_pelanggan' where id_transaksi='$id'") or die(mysqli_error($connect));

	if ($query) {
		header('location:transaksi.php');
	} else {
		echo mysqli_error();
	}
?>