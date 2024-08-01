<?php
error_reporting(0);
include('header.php');
include('function.php');

$con = mysqli_connect("localhost","root","","search");


if (isset($_POST['activate'])) {
	$q = "UPDATE status SET status = 'Activated' WHERE id =1";
	$r = mysqli_query($con,$q);

	if ($r) {
		echo "<script>alert('You have Activated voting Everyone one can vote Now')</script>";
	}
}



if (isset($_POST['deactivate'])) {
	
	$q = "UPDATE status SET status = 'Deactivated' WHERE id =1";
	$r = mysqli_query($con,$q);

	if ($r) {
		echo "<script>alert('You have Deactivated voting No one can vote Now')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
</head>
<body >
	<div style="margin-top: 130px;"></div>
      <h3 class="text-center text-success"> Vote Chat</h3>
    <span>
      <form method="post" style="margin-left: 70%">
      <div class="col-md-12">
      	<div class="row">
      		<div class="col-md-6">
      	<input type="submit" name="activate" value="Activate Voting" class="btn btn-success my-5">
  
      		</div>
      		<div class="col-md-6">
      	<input type="submit" name="deactivate" value="Deactivate Voting" class="btn btn-danger my-5">
      		</div>
      	</div>
      </div>
      </form>
      </span>


<!--boy prefect-->

			
		<div class="col-md-12 bg-primary text-center"  style="height: 70px;color: black;">
			<h3 class="" style="margin-top: -10px;"> Boy Prefect</h3>
		</div>
		<div class="container-fluid">
	<div class="row text-center py-5">
		 	<?php
       $qu = "SELECT * FROM contestant WHERE type = 'Boys Prefect'";
       $rs = mysqli_query($con,$qu);

     if (mysqli_num_rows($rs)==0) {
     	echo "<h1 class='text-center'>No contestant yet</h1>";
     }else{
     	  while ($row = mysqli_fetch_array($rs)) {
     chat($row['image'],$row['firstname'],$row['surname'],$row['votes']);
     
       	  
       }
     }
        
  	?>
			</div>
		</div>

			<br><br>
				<!--Girls Prefect-->
		<div class="col-md-12 bg-primary text-center"  style="height: 70px;color: black;">
			<h3 class="" style="margin-top: -10px;">Girls Prefect</h3>
		</div>
		<div class="container-fluid">
	<div class="row text-center py-5">
		      	<?php
       $qu = "SELECT * FROM contestant WHERE type = 'Girls Prefect'";
       $rs = mysqli_query($con,$qu);

     if (mysqli_num_rows($rs)==0) {
     	echo "<h1 class='text-center'>No contestant yet</h1>";
     }else{
     	  while ($row = mysqli_fetch_array($rs)) {
     chat($row['image'],$row['firstname'],$row['surname'],$row['votes']);
     
       	  
       }
     }
        
  	?>
			</div>
</div>
			<br><br><br>


					<!--Compound boys Prefect-->
		<div class="col-md-12 bg-primary text-center"  style="height: 70px;color: black;">
			<h3 class="" style="margin-top: -10px;">Compound Boys Prefect</h3>
		</div>
		<div class="container-fluid">
	<div class="row text-center py-5">
		      	<?php
       $qu = "SELECT * FROM contestant WHERE type = 'Compound Boys Prefect'";
       $rs = mysqli_query($con,$qu);

     if (mysqli_num_rows($rs)==0) {
     	echo "<h1 class='text-center'>No contestant yet</h1>";
     }else{
     	  while ($row = mysqli_fetch_array($rs)) {
     chat($row['image'],$row['firstname'],$row['surname'],$row['votes']);
     
       	  
       }
     }
        
  	?>
			</div>
</div>
			<br><br><br>


					<!--Compund Girls Prefect-->
		<div class="col-md-12 bg-primary text-center"  style="height: 70px;color: black;">
			<h3 class="" style="margin-top: -10px;">Compound Girls Prefect</h3>
		</div>
		<div class="container-fluid">
	<div class="row text-center py-5">
		      	<?php
       $qu = "SELECT * FROM contestant WHERE type = 'Compound Girls Prefect'";
       $rs = mysqli_query($con,$qu);

     if (mysqli_num_rows($rs)==0) {
     	echo "<h1 class='text-center'>No contestant yet</h1>";
     }else{
     	  while ($row = mysqli_fetch_array($rs)) {
     chat($row['image'],$row['firstname'],$row['surname'],$row['votes']);
     
       	  
       }
     }
        
  	?>
			</div>
</div>
			<br><br><br>

			
</body>
</html>





		