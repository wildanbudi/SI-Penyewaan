<?php

	include "koneksi.php";

	$id_p = $_POST['id_pelanggan'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_tlp = $_POST['no_telp'];
	$id_admin = $_POST['id_admin'];

	$query = mysqli_query($connect, "insert into pelanggan (id_pelanggan, nama, alamat, no_telp, id_admin) values ('$id_p','$nama', '$alamat', '$no_tlp', '$id_admin')");

	if ($query) {
		header('location:pelanggan.php');
	} else {
		echo mysqli_error();
	}
?>