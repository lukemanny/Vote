<?php
include('header.php');
include('function.php');
error_reporting(0);

$conn = mysqli_connect("localhost","root","","search");
if (isset($_POST['remove'])) {
	
	$fname = $_POST['uname'];

	$query = "DELETE FROM contestant WHERE firstname = '$fname'";
	$result = mysqli_query($conn,$query);

	if (mysqli_num_rows($result)==0) {
		echo "<script>alert('You have successfully Remove $fname From the competition ')</script>";
	}else{
       echo "<script>alert('Such name can not be found')</script>";
	}
}
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
					<h5><b>NOTE:</b> Remove Contestant By using The First Name of the Contestant</h5>
					<br>
					<br>
				<form method="post" action="remove_contestant.php">
		              <label>Enter First Name</label>
		              <input type="text" name="uname" class="form-control"><br><br>
		              <input type="submit" name="remove" class="btn btn-danger" value="Remove Contestant">
	              </form>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<br>
					<br><br>					
					<h5>All Contestant</h5>
					<br>

				

                        <?php
                        

                        $q = "SELECT * FROM contestant";
                        $r = mysqli_query($conn,$q);


                      

                        $output .= "<table class='table table-bordered'>
                        <tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Surname</th>
						<th>Type</th>
						<th>Department</th>
						</tr>
                         
						" ;

                        while ($row = mysqli_fetch_array($r)) {

                     	

                     	$output .="
                         <tr>
                           	<td>".$row['id']."</td>
	                        <td>".$row['firstname']."</td>
	                        <td>".$row['surname']."</td>
	                        <td>".$row['type']."</td>
	                        <td>".$row['department']."</td>";
                        }

                     
                        echo $output;
                        ?>
						
					
				</div>
			</div>
		</div>
	</div>

</body>
</html>