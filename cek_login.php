<?php 
  include "koneksi.php";

  $username = $_POST['username']; 
  $password = $_POST['password'];

 // menyesuaikan dengan data di database
 $perintah = "select * from admin WHERE username = '$username'";
 $hasil = mysqli_query($connect,$perintah);
 $row = mysqli_fetch_array($hasil);

 if ($row['username'] == $username) {

  if (password_verify($password,$row['password'])){
    session_start(); // memulai fungsi session
    $_SESSION['username'] = $username;
    header("location:index.php"); 
  }
  else{
    echo "<script>alert('username or password is incorrect!')</script>";
  }
 }
 else {
 echo "Gagal Masuk";
 }
 ?>