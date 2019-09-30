<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/24/2014
 * Time: 11:55 PM
 */
include("koneksi.php");
$delete_id=$_GET['del'];
$delete_query="delete  from transaksi WHERE id_transaksi='$delete_id'";//delete query
$run=mysqli_query($connect,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('transaksi.php?deleted=user has been deleted','_self')</script>";
} else {
		echo mysqli_error($connect);
	}

?>