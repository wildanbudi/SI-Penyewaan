<?php
   include('koneksi.php');
?>
<!DOCTYPE html> 
<html lang="en">
	<head> 
		<title>Tambah Pelanggan</title>
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
                        <a class="active-menu" href="pelanggan.php"><i class="fa fa-2x"></i>Pelanggan</a>
                    </li>
                    <li>
                        <a  href="transaksi.php"><i class="fa fa-2x"></i>Transaksi</a>
                    </li>

                </ul>
			</div>


		<div class= "container col-md-10">  			
  			<div class="row">
  				<div class="col-md-12">
  					<form method="post" action="aksi_addpelanggan.php" class='form-horizontal'>
				    <h2>Tambah Pelanggan</h2>
					  <!-- <div class="form-group">
					    <label class="col-sm-1 control-label">ID Pelanggan</label>
					    <div class="col-sm-10">
					      <input type="text" name='id_pelanggan' class="form-control">
					    </div>
					  </div> -->

					  
					  <div class="form-group">
					  <label class="col-sm-1 control-label">Nama</label>
					    <div class="col-sm-10">
					      <input type="text" name='nama' class="form-control">
					    </div>
					  </div>

					  <div class="form-group">
					  <label class="col-sm-1 control-label">Alamat</label>
					    <div class="col-sm-10">
					      <input type="text" name='alamat' class="form-control">
					    </div>
					  </div>

					  <div class="form-group">
					  <label class="col-sm-1 control-label">No Telp</label>
					    <div class="col-sm-10">
					      <input type="text" name='no_telp' class="form-control" >
					    </div>
					  </div>
					
					  <div class="form-group">
					  <label class="col-sm-1 control-label">Admin</label>
					  <div class="col-sm-10">
					    <select class="form-control" name='id admin'>

					    <?php include "koneksi.php"; 
					    	$query = "SELECT * FROM admin";
					    													    	
			            	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
			            	while ($row = mysqli_fetch_array($result)) {
			                
			            ?>
							  <option value="<?php echo $row['id_admin']; ?>" ><?php echo $row['username']; ?></option>
						<?php } ?>

						</select>
					  </div>
					  </div>				

					  <div class="form-group">
					    <div class="col-sm-offset-1 col-sm-4">
					      <button type='submit' name='submit' class='btn btn-success'>Submit</button>
					    </div>
					  </div>
					</form>
			    </div>
			</div>
		</div>
	</body> 

</html>



