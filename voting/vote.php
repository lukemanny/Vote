<?php
error_reporting(0);
include('header.php');
include('function.php');
$con = mysqli_connect("localhost","root","","search");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
	<style type="text/css">
		.vote{
			animation: dd 10s linear infinite;
		}
		@keyframes dd{
			10%{
				background-color: skyblue;
			}
			20%{
				background-color: red;
			}
			30%{
				background-color: pink;
			}
			40%{
				transform: skew(10deg);
			}
			50%{
				transform: skew(-10deg);
			}
		}
	</style>
</head>
<body>
	<div style="margin-top: 150px;"></div>
	<div class="col-md-12">
		<script type="text/javascript">
		function Activated(){
			var a = "You can't return until you have finished voting";
			alert(a);
			window.location.href="login_to_vote.php";
		}
	</script>
	<script type="text/javascript">
		function Deactivated(){
			var a = "Voting Is Deactivated";
			alert(a);
			
		}
	</script>
	<?php
    $q = "SELECT status FROM status WHERE id = 1";
    $r = mysqli_query($con,$q);

    while ($rows = mysqli_fetch_array($r)) {
    	$idd = $rows['status'];

    	$d = "me";
    }

    if ($idd == "Activated") {
       echo "<button  class='btn btn-primary vote' style='position: fixed;z-index: 1;
	margin-left: 89%;'  onclick='Activated()' >Start Voting<button>";
    }else {
    	 echo "<button  class='btn btn-primary mr-auto my-4 vote' style='position: fixed;z-index: 1;
	margin-left: 89%;'  onclick='Deactivated()' >Deactivated<button>";
    }
	?>
	</div>
	<h4 class="text-center ">All Contestant</h4>

	
    <br><br>
	<div class="container-fluid w-90 col-md-12" style="width:;">
	
	<!--Boys Prefect-->
		<div class="col-md-12 bg-primary text-center"  style="height: 70px;color: black;">
			<h3 class="" style="margin-top: -10px;">Boys Prefect</h3>
		</div>
<div class="container-fluid">
	<div class="row text-center py-5">
		<?php
  
             $boy = "SELECT * FROM contestant WHERE type = 'Boys Prefect'";
             $boys= mysqli_query($con,$boy);
    if (mysqli_num_rows($boys) < 1) {
               	echo "<br><br><h3 class='my-2 text-info'>No contestant yet</h3>";	
               }else{
   while ($row = mysqli_fetch_array($boys)) {
   	viewcontestant($row['image'],$row['firstname'],$row['surname'],$row['type'],$row['department']);
   }
}


		?>
		</div>
</div>



<br><br><br><br><br>
				<!--Girls Prefect-->
		<div class="col-md-12 bg-primary text-center"  style="height: 70px;color: black;">
			<h3 class="" style="margin-top: -10px;">Girls Prefect</h3>
		</div>
		<div class="container-fluid">
	<div class="row text-center py-5">
		      <?php
               $boy = "SELECT * FROM contestant WHERE type = 'Girls Prefect'";
               $boys= mysqli_query($con,$boy);

               if (mysqli_num_rows($boys) < 1) {
               	echo "<br><br><h3 class='my-2 text-info'>No contestant yet</h3>";	
               }else{
               	while ($row = mysqli_fetch_array($boys)) {
              viewcontestant($row['image'],$row['firstname'],$row['surname'],$row['type'],$row['department']);
               	}
               }
		      ?>
			</div>
</div>

<br><br><br><br><br>
				<!--Compound boys Prefect-->
		<div class="col-md-12 bg-primary text-center"  style="height: 70px;color: black;">
			<h3 class="" style="margin-top: -10px;">Compound Boys Prefect</h3>
		</div>
		<div class="container-fluid">
	<div class="row text-center py-5">
		      <?php
               $boy = "SELECT * FROM contestant WHERE type ='Compound Boys Prefect'";
               $boys= mysqli_query($con,$boy);

               if (mysqli_num_rows($boys) < 1) {
               	echo "<br><br><h3 class='my-2 text-info'>No contestant yet</h3>";	
               }else{
               	while ($row = mysqli_fetch_array($boys)) {
              viewcontestant($row['image'],$row['firstname'],$row['surname'],$row['type'],$row['department']);
               	}
               }
		      ?>
</div>
</div>

		      <br><br><br><br><br>
				<!--Compound Girls Prefect-->
		<div class="col-md-12 bg-primary text-center"  style="height: 70px;color: black;">
			<h3 class="" style="margin-top: -10px;"> Compound Girls Prefect</h3>
		</div>
		<div class="container-fluid">
	<div class="row text-center py-5">
		      <?php
               $boy = "SELECT * FROM contestant WHERE type = 'Compound Girls Prefect'";
               $boys= mysqli_query($con,$boy);

               if (mysqli_num_rows($boys) < 1) {
               	echo "<br><br><h3 class='my-2 text-info'>No contestant yet</h3>";	
               }else{
               	while ($row = mysqli_fetch_array($boys)) {
              viewcontestant($row['image'],$row['firstname'],$row['surname'],$row['type'],$row['department']);
               	}
               }
		      ?>
			</div>
		</div>

			
			
		</div>





</body>
</html>