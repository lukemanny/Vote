<?php 
include('voting_lnks.php');
$con = mysqli_connect("localhost","root","","search");
if (isset($_POST['confirm'])) {
	 if (isset($_SESSION['username'])) {
	 	
	 
	 $boys_prefect = $_SESSION['boys_prefect'];
	 $girls_prefect = $_SESSION['girls_prefect'];
	 $compound_boys_prefect = $_SESSION['compound_boys_prefect'];
	 $compound_girls_prefect = $_SESSION['compound_girls_prefect'];
	 $name = $_SESSION['username'];

	 $q = "SELECT voters_id FROM signup WHERE username = '$name'";
	 $r = mysqli_query($con,$q);

	 while ($row = mysqli_fetch_array($r)) {
	 	$id = $row['voters_id'];
	 }

	 $query = "INSERT INTO vote(boys_prefect,girls_prefect,compound_boys_prefect,compound_girls_prefect,username, voters_id) VALUES('$boys_prefect','$girls_prefect','$compound_boys_prefect','$compound_girls_prefect','$name','$id')";

	 $result = mysqli_query($con,$query);

	 if ($result) {

	 		if (isset($_SESSION['boys_prefect'])) {
	 		$b = "UPDATE contestant SET votes =votes +1 WHERE full_name ='$boys_prefect'";
	 		$bb = mysqli_query($con,$b);
	 		}

	 		if (isset($_SESSION['girls_prefect'])) {
	 		$b = "UPDATE contestant SET votes=votes +1 WHERE full_name ='$girls_prefect'";
	 		$bb = mysqli_query($con,$b);
	 		}

	 		if (isset($_SESSION['compound_boys_prefect'])) {
	 		$b = "UPDATE contestant SET votes=votes +1 WHERE full_name ='$compound_boys_prefect'";
	 		$bb = mysqli_query($con,$b);
	 		}

	 		if (isset($_SESSION['compound_girls_prefect'])) {
	 		$b = "UPDATE contestant SET votes=votes +1 WHERE full_name ='$compound_girls_prefect'";
	 		$bb = mysqli_query($con,$b);
	 		}

	 		

	 	unset($_SESSION['boys_prefect']);
	 	unset($_SESSION['girls_prefect']);
	 	unset($_SESSION['compound_boys_prefect']);
	 	unset($_SESSION['compound_girls_prefect']);

	 	echo "<script>alert('You have successfully Voted')</script>";
	 	header("Location:index.php");
	 }else{
	 	echo "<script>alert('Falied to vote there was an error try again')</script>";
	 }


}else{
	echo "<script>alert('Login please')</script>";

}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
    window.history.forward();
  </script>
</head>
<body>
	<div style="margin-top: 40px;"></div>
	<h3 class="text-center">Confirm to vote</h3>
<div class="container">
	<div class="col-md-12">
		
			<form method="post">
				<div class="row">
			<table class="table table-bordered">
				<th>Contestant</th>
				<th>Your Vote</th>

				<tr>
					<td>Boys Prefect</td>
					<td><?php if(isset($_SESSION['boys_prefect'])) echo $_SESSION['boys_prefect']; ?></td>
				</tr>

					<tr>
					<td>Girls Prefect</td>
					<td><?php if(isset($_SESSION['girls_prefect'])) echo $_SESSION['girls_prefect']; ?></td>
				</tr>


					<tr>
					<td> Compound Boys Prefect</td>
					<td><?php if(isset($_SESSION['compound_boys_prefect'])) echo $_SESSION['compound_boys_prefect']; ?></td>
				</tr>

					<tr>
					<td>Compund Girls Prefect</td>
					<td><?php if(isset($_SESSION['compound_girls_prefect'])) echo $_SESSION['compound_girls_prefect']; ?></td>
				</tr>

				
				

			</table>
			<input type="submit" name="confirm" class="btn btn-success" value="Confirm Your Vote" style="margin-left: 86%;">
			</div>
		</form>
		
	</div>
</div>
</body>
</html>