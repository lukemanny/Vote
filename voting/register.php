<?php
include('header.php');
include('function.php');
$con = mysqli_connect("localhost","root","","search");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
</head>
<body>
	<div style="margin-top: 100px;"></div>

<div class="container-fluid">
	<div class="row text-center py-5">
		<?php
   $query = "SELECT * FROM signup";
   $result = mysqli_query($con,$query);

   while ($row = mysqli_fetch_array($result)) {
   	registered($row['image'],$row['firstname'],$row['surname'],$row['username'],$row['gender'],$row['voters_id'],$row['dates']);
   }


		?>
		</div>
</div>
</body>
</html>
