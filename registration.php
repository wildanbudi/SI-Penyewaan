
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>
<body>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <!-- <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                            </div>
 -->
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("koneksi.php");//make connection here
if(isset($_POST['register']))
{
    $username=$_POST['username'];//here getting result from the post array after submitting the form.
    $password=$_POST['password'];//same
    
    if($username=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the username')</script>";
exit();//this use if first is not work then other will not show
    }

    if($password=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    //here query check weather if user already registered so can't register again.
    /*$check_email_query="select * from admin WHERE id_admin='$id_admin'";
    $run_query=mysqli_query($connect,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }*/
//insert the user into the database.
     $hash = password_hash($password, PASSWORD_DEFAULT);

    $insert_user="insert into admin (id_admin,username,password) VALUES ('','$username','$hash')";
    if(mysqli_query($connect,$insert_user))
    {
        echo "<script>alert('Register Success! Please Login')</script>";
        echo"<script>window.open('index.php','_self')</script>";

    }

}

?>