

<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM transaksi where id_transaksi = '$id'";
	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
	$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html> 
<html lang="en">
	<head> 
		<title>Edit Transaksi</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
		<link href="assets/css/font-awesome.css" rel="stylesheet" />
		<link href="assets/css/custom.css" rel="stylesheet" />

		<link rel="stylesheet" href="assets/css/bootstrap.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 
		<script type='javascript' src="assets/js/bootstrap.min.js"></script>
	</head>

	
	<body style="background-color : #fafafa;">
	<?php
   session_start();
   if (empty($_SESSION['username'])) {
   header("location:login.php"); 
   }
   else {
   ?>
   Welcome <b><?php echo $_SESSION['username'] ?></b>, you have logged in <br />
   <a href="logout.php"> Logout </a> here
   <?php } ?>	 
		<br><br>
  			<div class="table-scrol">
    <h1 align="center">Rumah Rimba</h1>

</div>
<br><br>

			<div class="col-md-2" align="left">
				 <ul class="nav" id="main-menu">
                <br>
                	<li>
                        <a href="barang.php"><i class="fa fa-2x"></i>Barang</a>
                    </li>
                    <li>
                        <a href="pelanggan.php"><i class="fa fa-2x"></i>Pelanggan</a>
                    </li>
                    <li>
                        <a class="active-menu" href="transaksi.php"><i class="fa fa-2x"></i>Transaksi</a>
                    </li>
                </ul>
			</div>


		<div class= "container col-md-10">  			
  			<div class="row">
  				<div class="col-md-12">
  					<form method="post" action="aksi_edittransaksi.php?id=<?php echo $id; ?>" class='form-horizontal'>
				    <h2>Edit Transaksi</h2>
					  <div class="form-group">
					    <label class="col-sm-1 control-label">Kode Transaksi</label>
					    <div class="col-sm-10">
					      <input type="text" name='id_transaksi' class="form-control" value="<?php echo $row['id_transaksi']; ?>" readonly>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Tanggal Sewa</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" placeholder="YYYY-MM-DD" name='tgl_sewa' value="<?php echo $row['tgl_sewa']; ?>"></textarea>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Tanggal Kembali</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" placeholder="YYYY-MM-DD" name='tgl_kembali' value="<?php echo $row['tgl_kembali']; ?>"></textarea>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Jumlah Barang</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name='jumlah_barang' value="<?php echo $row['jumlah_barang']; ?>"></textarea>
					    </div>
					  </div>

					  <div class="form-group">
					  <label class="col-sm-1 control-label">Harga</label>
					    <div class="col-sm-10">
					      <input type="text" name='harga_satuan' class="form-control" value="<?php echo $row['harga_satuan']; ?>">
					    </div>
					  </div>

					
					  <div class="form-group">
					  <label class="col-sm-1 control-label">ID Barang</label>
					  <div class="col-sm-10">
					    <select class="form-control" name='id_barang'>

					    <?php include "koneksi.php"; 
					    	$query = "SELECT * FROM barang";
					    	$queryadmin = "SELECT id_barang FROM transaksi where id_transaksi= $id";
												    	
			            	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
			            	$resultadmin = mysqli_query($connect, $queryadmin) or die(mysqli_error($connect));

			                $rowadmin = mysqli_fetch_array($resultadmin);
			                while ($row = mysqli_fetch_array($result)) {
			                
			            ?>
							  <option value="<?php echo $row['id_barang']; ?>" <?php if($row['id_barang'] == $rowadmin['id_barang']) echo 'selected = "selected"'; ?> ><?php echo $row['nama_barang']; ?></option>
						<?php } ?>

						</select>
					  </div>
					  </div>				

					  <div class="form-group">
					  <label class="col-sm-1 control-label">ID Pelanggan</label>
					  <div class="col-sm-10">
					    <select class="form-control" name='id_pelanggan'>

					    <?php include "koneksi.php"; 
					    	$query = "SELECT * FROM pelanggan";
					    	$querypelanggan = "SELECT id_pelanggan FROM transaksi where id_transaksi= $id";
												    	
			            	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
			            	$resultpelanggan = mysqli_query($connect, $querypelanggan) or die(mysqli_error($connect));

			                $rowpelanggan = mysqli_fetch_array($resultpelanggan);
			                while ($row = mysqli_fetch_array($result)) {
			                
			            ?>
							  <option value="<?php echo $row['id_pelanggan']; ?>" <?php if($row['id_pelanggan'] == $rowpelanggan['id_pelanggan']) echo 'selected = "selected"'; ?> ><?php echo $row['nama']; ?></option>
						<?php } ?>

						</select>
					  </div>
					  </div>

					  <div class="form-group">
					    <div class="col-sm-offset-1 col-sm-4">
					      <button type='submit' name='submit' class='btn btn-primary'>Simpan</button>
					    </div>
					  </div>
					</form>
			    </div>
			</div>
		</div>
	</body> 

</html>



