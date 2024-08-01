<?php
include('header.php');
include('function.php');
error_reporting(0);
$con = mysqli_connect("localhost","root","","search");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
</head>
<body>
	<div style="margin-top: 100px;"></div>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-4">
				<br>
				<br><br>
				<form method="post" action="add_admin.php">
					<h4>ADD ADMINISTRATOR</h4>
					<label>Username</label>
					<input type="text" name="uname" class="form-control" placeholder="Username" autocomplete="off">

					<label>Admin id</label>
					<input type="text" name="id" class="form-control" placeholder="Admin id" autocomplete="off">

					<label>password</label>
					<input type="password" name="pass" class="form-control" placeholder="password" autocomplete="off">

					<br>
					<input type="submit" name="add" value="Add Administrator" class="btn btn-primary">
				</form>

				<?php

                   if (isset($_POST['add'])) {
                   	   
                   	   $uname = $_POST['uname'];
                   	   $id = $_POST['id'];
                   	   $pass = $_POST['pass'];
                            

                  $qq = "SELECT username FROM admin WHERE username = '$uname'";
                  $rr = mysqli_query($con,$qq);
                           if (mysqli_num_rows($rr)) {
                           	  echo "<script>alert('Username is Exiting')</script>";
                           }else if(empty($uname) or empty($id) or empty($pass)){
                                 echo "<script>alert('There is no empty space required')</script>";
                           }else{

                           $query = "INSERT INTO admin(username,admin_id,password) VALUES('$uname','$id','$pass')";
                           $result = mysqli_query($con,$query);
                             if ($result) {
                             	 echo "<script>alert('You have successfully Added New Administrator')</script>";
                             }else{
                             	 echo "<script>alert('failed to Add New Administrator')</script>";
                             }
                           }

                   }
                
				?>
			</div>
			<div class="col-md-4"><br>
				<br><br>
				<h4>All Administrators</h4>	
				<table class="table table-bordered">
					 <table class='table table-bordered'>
						<th>ID</th>
						<th>Username</th>
						<th>Admin id</th>
                    	<?php
                  
                  $qqq = "SELECT * FROM admin";
                  $r = mysqli_query($con,$qqq);
                   
                    while ($row = mysqli_fetch_array($r)) {
                     	admins($row['id'],$row['username'],$row['admin_id']);
                  				}
                  		?>
					


                    
				</table>

			
			</div>
			<div class="col-md-4">
				<br>
				<br><br>
				<form method="post" action="add_admin.php">
					<h4 class="text-danger">REMOVE ADMINISTRATOR</h4>
					<h5><b>NOTE:</b> Remove Administrator by the username of the administrator.</h5>
                    <br>
					<label>Username</label>
					<input type="text" name="admin" class="form-control" placeholder="Enter Username to remove Administrator" autocomplete="off"><br><br>
					<input type="submit" name="remove" value="Remove Administrator" class="btn btn-danger">
				</form>
				<?php
                 if (isset($_POST['remove'])) {
                 	
                 	$admin = $_POST['admin'];

                 	$q = "DELETE FROM admin WHERE username ='$admin'";
                 	$r = mysqli_query($con,$q);

                 	if (mysqli_num_rows($r)==0) {
                    echo "<script>alert('You have successfully Remove $admin')</script>";
                 	}else{
                     echo "<script>alert('Such name can not be found')</script>";
                 	}
                 }
				?>
			</div>
			
			
		</div>
	</div>
</div>
</body>
</html>

