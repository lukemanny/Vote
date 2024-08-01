<?php
error_reporting(0);
include('voting_lnks.php');

if (isset($_POST['log'])) {
	$err = array();
	$id = $_POST['voters_id'];

	$name = $_SESSION['username'];

	$qq = "SELECT voters_id FROM vote WHERE username = '$name'";
	$rrr = mysqli_query($con,$qq);

	while ($rows = mysqli_fetch_array($rrr)) {
		$ids =   $rows['voters_id'];
	}

$q = "SELECT voters_id FROM vote WHERE voters_id ='$id'";
$r = mysqli_query($con,$q);

 if(mysqli_num_rows($r) == 1 ){
     $err = "<script>alert('You have already voted')</script>";
     echo $err;
	}

if (count($err) == 0) {

$query = "SELECT * FROM signup WHERE voters_id ='$id' AND username ='$name'";
	$result = mysqli_query($con,$query);
   
	if (mysqli_num_rows($result) == 1) {
    echo "<script>alert('You are good to go')</script>";
	echo "<script>window.location.href='boys_prefect.php'</script>";
	}else{
		 echo "<script>alert('Invalid Voters ID')</script>";
	}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login to Vote</title>
</head>
<body>
<a href="vote.php"><button class="btn btn-danger my-4 mx-2">Back</button></a>
	<div style="margin-top: 100px;"></div>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form method="post" action="login_to_vote.php">
					<h4>Enter Your Voters ID</h4>
					<input type="text" name="voters_id" placeholder="Enter Your Voters ID" class="form-control">
					<br><br>
					<input type="submit" name="log" value="Start Voting" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</div> 
</body>
</html>