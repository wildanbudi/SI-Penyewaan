<?php

	include "koneksi.php";

	
	$id_tr = $_POST['id_transaksi'];
	$tgl_s = $_POST['tgl_sewa'];
	$tgl_k = $_POST['tgl_kembali'];
	$jml_brg = $_POST['jumlah_barang'];
	$harga = $_POST['harga_satuan'];
	// $total = $_POST['total_harga'];
	$id_brg = $_POST['id_barang'];
	$id_p = $_POST['id_pelanggan'];
	$awal = new DateTime($tgl_s);
	$akhir = new DateTime($tgl_k);
	$interval = $awal->diff($akhir);
	$diff = $interval->format('%d days');

	$query = mysqli_query($connect, "insert into transaksi (id_transaksi, tgl_sewa, tgl_kembali, jumlah_barang, harga_satuan, total_harga, id_barang, id_pelanggan) values ('$id_tr', '$tgl_s','$tgl_k', '$jml_brg', '$harga', '$diff' * '$jml_brg' * '$harga', '$id_brg', '$id_p')");

	if ($query) {
		header('location:transaksi.php');
	} else {
		echo mysqli_error($connect);
	}
?>