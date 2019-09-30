<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="cek_login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                    <center><b>Don't have account yet?</b> <br></b><a href="registration.php">Register here</a></center>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php

include("koneksi.php");

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

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
}
?>