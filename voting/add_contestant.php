
<?php
include('header.php');
error_reporting(0);
$connect = mysqli_connect("localhost","root","","search");
?>
<?php
if (isset($_POST['add'])) {
	$errors = array();

	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$department = $_POST['department'];
	$type = $_POST['type'];
	
	$n = "SELECT firstname FROM contestant WHERE firstname='$fname'";
	$q = mysqli_query($connect,$n);
	if (empty($fname)) {
		$errors['fname'] = "First Name Can't Be Empty";
	}else if(strlen($fname) < 3){
        $errors['fname'] = "First Name is too short";
	}else if(!preg_match("/[a-zA-Z]/", $fname)){
        $errors['fname'] = "Only letters are allowed";
	} 
	else{
		$sucf = "Successful";
	}


	

	if (empty($sname)) {
		$errors['sname'] = "Surname Can't Be Empty";
	}else if(strlen($sname) < 3){
        $errors['sname'] = "Surname is too short";
	}else if(!preg_match("/[a-zA-Z]/", $sname)){
        $errors['sname'] = "Only letters are allowed";
	}else{
		$sucs = "Successful";
	}

 

	if ($department=="Department of the Contestant") {
		$errors['department'] = "Department of the Contestant";
	}else{
		$sucd = "Successful";
	}

		

	if ($type=="Type Of Contestant") {
		$errors['type'] = "Type Of Contestant";
	}else{
		$suct = "Successful";
	}


	

if ($_FILES["image"]["size"] > 5000000) {
   $errors['image']= "Sorry, your file is too large.";
   
}else if(empty($_FILES["image"]["name"])){
	$errors['image'] = "Sorry insert Image";
}else{

}
	


	if (count($errors)==0) {
	
		$image = $_FILES["image"]["name"];

		$con = mysqli_connect("localhost","root","","search");

$full = "$fname $sname";

$q = "INSERT INTO contestant(firstname,surname,full_name,type,department,image,votes) VALUES('$fname','$sname','$full','$type','$department','$image','0')";

$r = mysqli_query($con,$q);

if ($r) {
     move_uploaded_file($_FILES["image"]["tmp_name"], "img/$image");

	echo "<script>alert('You have Succefully added new ".$type."')</script>";

	
}else{
	echo "<script>alert('You have')</script>";
}
   
		
	}
        
      
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
</head>
<body style="background-image: url(ok.jpg); background-repeat: no-repeat;background-size: cover;">
	<div style="margin-top: 100px;"></div>
<div class="col-md-12">

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="jumbotron bg-white">
	<form method="post" action="add_contestant.php" enctype="multipart/form-data">
					<div class="row text-center">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<label>First Name</label>
							<input type="text" class="form-control" name="fname" placeholder="Please Enter First Name" autocomplete="off" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>">
							<p class="text-danger"><?php if(isset($errors['fname'])) echo $errors['fname']; ?></p>
							<p class="text-success"><?php if(isset($sucf)) echo $sucf; ?></p>
                          


                              <label>Type</label>
							<select class="form-control" name="type">
								<option value="Type Of Contestant">Type Of Contestant</option>
							<option value="Boys Prefect">Boys Prefect</option>
							<option value="Girls Prefect">Girls Prefect</option>
							<option value="Compound Boys Prefect">Compound Boys Prefect</option>
							<option value="Compound Girls Prefect">Compound  Girls Prefect</option>
						
							

							</select>
							 <p class="text-danger"><?php if(isset($errors['type'])) echo $errors['type']; ?></p>
							<p class="text-success"><?php if(isset($suct)) echo $suct; ?></p>

							<br>
							 <input type="file" name="image" class="form-control">
							  <p class="text-danger"><?php if(isset($errors['image'])) echo $errors['image']; ?></p>
						  


								
                            
						</div>
						<div class="col-md-4">
						<label>Surname</label>
						<input type="text" class="form-control" name="sname" placeholder="Please Enter Surname" autocomplete="off" value="<?php if(isset($_POST['sname'])) echo $_POST['sname']; ?>">
						<p class="text-danger"><?php if(isset($errors['sname'])) echo $errors['sname']; ?></p>
							<p class="text-success"><?php if(isset($sucs)) echo $sucs; ?></p>


							
						  
							<label>Department</label>
							<select class="form-control" name="department">
								<option value="Department of the Contestant">Department of the Contestant</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Automotive">Automotive</option>
								<option value="Mechanical">Mechanical</option>
                                 <option value="Welding">Welding</option>
                                 <option value="Building & Constraction">Building & Constraction</option>
		
							</select>
							 <p class="text-danger"><?php if(isset($errors['department'])) echo $errors['department']; ?></p>
							<p class="text-success"><?php if(isset($sucd)) echo $sucd; ?></p>

                            <br>
							
					<input type="submit" name="add" class="btn btn-primary" value="Add Contestant">
					</div>

					</div>
                 
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>