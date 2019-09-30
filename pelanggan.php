<?php
   include('koneksi.php');
?>
<!DOCTYPE html> 
<html lang="en">
	<head> 
		<title>Daftar Pelanggan</title>
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
		<div class="table-scrol">
    <h1 align="center">Rumah Rimba</h1>

</div>

<div class="col-md-2" align="left">
    <div class="row">
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
        </div>


		<div class= "container col-md-10">  			
			
			<div class="row">
  				
	  			<div class="col-md-11">
  					<table id="example1" class="table table-striped table-bordered">
			             <thead>

        <tr>

            <th>Id Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>ID Admin</th>
            <th>Option</th>
        </tr>
        </thead>
			            <tbody>

			            <!-- fungsi select pada php taruh disini-->
			             <?php

							include "koneksi.php";

							$query = "SELECT * FROM pelanggan";
							$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
							while ($row = mysqli_fetch_array($result)) {
							?>

							 <tr>
								<td><?php echo $row['id_pelanggan']; ?></td>
								<td><?php echo $row['nama']; ?></td>
								<td><?php echo $row['alamat']; ?></td>
								<td><?php echo $row['no_telp']; ?></td>
								<td><?php echo $row['id_admin']; ?></td>
								<td><a href='edit_pelanggan.php?id=<?php echo $row['id_pelanggan']; ?>'><button class='btn btn-primary btn-sm'>Edit</button></a>
									<a href='delete_pelanggan.php?del=<?php echo $row['id_pelanggan']; ?> '><button class='btn btn-danger btn-sm' name="delete" value="delete" type="submit">
									Delete</button></a></td>
							 </tr>

							<?php
							}
							?>
			            </tbody>
			    	</table>

<p><a href='add_pelanggan.php'><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus-sign'></span> Tambah Pelanggan</button></a></p>

			    </div>
			</div>
		</div>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
	</body>        
</html>

<?php