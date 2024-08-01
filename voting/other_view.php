<?php
include('header.php');
include('function.php');

$con = mysqli_connect("localhost","root","","search");
$name = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
</head>
<body style="background: ">
	<div style="margin-top: 150px;"></div>
  <div class="container-fluid">
  	<div class="col-md-12">
  		<h5 class="text-center">Click here to add your Suggestion <a class="text-primary" href="contact.php">Click</a></h5>
  		<div class="row">
  			<div class="col-md-0"></div>
  			<div class="col-md-10">
  				<div class="row">
  					<div class="col-md-7">
  					<h5>	Other People's Suggestions</h5>
  						<?php
                     $qqq = "SELECT * FROM suggestion WHERE username NOT LIKE '%$name%'";
                     $rrr = mysqli_query($con,$qqq);

                     while ($row = mysqli_fetch_array($rrr)) {
                     	othersview($row['image'],$row['firstname'],$row['surname'],$row['dates'],$row['message']);
                     }

  						?>
  					</div>
  					<div class="col-md-5">
  						<h5>My Suggestions</h5>

  						<?php
                           $qu = "SELECT * FROM suggestion WHERE username = '$name'";
                           $res = mysqli_query($con,$qu);

                           while ($row = mysqli_fetch_array($res)) {
                           	 myview($row['image'],$row['dates'],$row['message']);
                           }
  						?>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>

