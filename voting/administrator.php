<?php
require('header.php');

if (isset($_POST['login'])) {

$con = mysqli_connect("localhost","root","","search");

   $errors = array();

   $username = $_POST['username'];
   $password = $_POST['password'];
   $admin  = $_POST['admin_id'];

   if (empty($username)) {
   	$errors['username'] = "Please fill it"; 
   }

   if (empty($password)) {
   	$errors['password'] = "Please fill it";
   }

   if (count($errors) == 0 ) {
   	$query = "SELECT * FROM admin WHERE username = '$username' AND admin_id='$admin' AND password = '$password'";

   	$result = mysqli_query($con,$query);

   	if (mysqli_num_rows($result) == 1) {
   	 $_SESSION['admin'] = $username; 
   		echo "<script>alert('You have successfully Login')</script>";
   		echo '<script>window.location.href="index.php"</script>';
   		exit();
   	}else{
   		echo "<script>alert('Falied to Login')</script>";
   	}

}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(ok.jpg); background-repeat: no-repeat;background-size: cover;">


<div class="container-fluid">
	<div class="col-md-13 text-center">
	<div class="overflow navbar-expand-lg" >
		<div style="height: 0px;"></div>
<div class="col-md-12">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
	
				<div class="jumbotron my-5">
					<form method="post" action="administrator.php">
              
					<label style="font-weight: bold;font-size: 23px;margin-left: -115px;">Username</label>
					<input type="text" name="username" class="form-control" autocomplete="off"><br>
                    <p class="text-danger " style="margin-left: -170px;"><?php if (isset($errors['username'])) echo $errors['username']; ?></p>

                    <label style="font-weight: bold;font-size: 23px;margin-left: -225px;">Admin id</label>
					<input type="text" name="admin_id" class="form-control" autocomplete="off"><br>



					<label style="font-weight: bold;font-size: 23px;margin-left: -210px;">Password</label>
					<input type="password" name="password" class="form-control" autocomplete="off">
					<p class="text-danger " style="margin-left: -170px;"><?php if (isset($errors['password'])) echo $errors['password']; ?></p>

                      <button type="submit" name="login" class="btn btn-success btn-lg my-3 mx-5">LOGIN <i class="fas fa-sign-in-alt"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</div>

</div>
</div>
</div>

</body>
</html>