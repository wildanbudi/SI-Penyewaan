<?php

	include "koneksi.php";

	$id = $_GET['id'];
	$id_user = $_POST['id_pelanggan'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no = $_POST['no_telp'];
	$id_admin = $_POST['id_admin'];

	$query = mysqli_query($connect,  "update pelanggan set id_pelanggan='$id_user', nama='$nama', alamat='$alamat', no_telp='$no', id_admin='$id_admin' where id_pelanggan='$id'") or die(mysqli_error($connect));

	if ($query) {
		header('location:pelanggan.php');
	} else {
		echo mysqli_error();
	}
?>