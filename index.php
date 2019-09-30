<?php
   include('koneksi.php');
?>

<!DOCTYPE html> 
<html lang="en">
	<head> 
		<title>Penyewaan Alat Camping</title>
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
    <center><h4 class="blog-title">Penyewaan Alat Camping</h4></center>

</div><br><br>

			<!-- Membuat navbar di sebelah kiri halaman -->
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
                        <a  href="transaksi.php"><i class="fa fa-2x"></i>Transaksi</a>
                    </li>
                </ul>
			</div>
			<div class= "container col-md-10">        
        
      <div class="row">
          
          <div class="col-md-10">
            <br>
            <center><h2>Select Menu to Begin</h2></center>
          </div>
      </div>
    </div>
	</body>        
</html>