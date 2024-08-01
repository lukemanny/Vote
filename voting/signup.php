
<?php
include('header.php');
$connect = mysqli_connect("localhost","root","","search");
?>
<?php
if (isset($_POST['signup'])) {
	$errors = array();

	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$uname = $_POST['uname'];
	$gender = $_POST['gender'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

	if (empty($fname)) {
		$errors['fname'] = "First Name Can't Be Empty";
	}else if(strlen($fname) < 5){
        $errors['fname'] = "First Name is too short";
	}else if(!preg_match("/[a-zA-Z]/", $fname)){
        $errors['fname'] = "Only letters are allowed";
	}else{
		$sucf = "Successful";
	}

	if (empty($sname)) {
		$errors['sname'] = "Surname Can't Be Empty";
	}else if(strlen($sname) < 5){
        $errors['sname'] = "Surname is too short";
	}else if(!preg_match("/[a-zA-Z]/", $sname)){
        $errors['sname'] = "Only letters are allowed";
	}else{
		$sucs = "Successful";
	}


	if (empty($uname)) {
		$errors['uname'] = "Username Can't Be Empty";
	}else if(strlen($uname) < 8){
        $errors['uname'] = "Username is too short";
	}else{
		$sucu = "Successful";
	}


	if ($gender=="Select Your Gender") {
		$errors['gender'] = "Select Your Gender";
	}else{
		$sucg = "Successful";
	}


	if (empty($pass)) {
		$errors['pass'] = "Password Can't Be Empty";
	}else if(strlen($pass) < 8){
        $errors['pass'] = "Password is too short";
	}else{
		$sucp = "Successful";
	}

	if ($cpass != $pass) {
		$errors['cpass'] = "Both Password do not match";
	}else{
		$succp = "Successful";
	}
        
        if ($gender=="Male") {
        	$image = "male1.jpg";
        }else{
        	$image = "female.jpg";
        }
         $amount = 8;
         $generate = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $voters_id = substr(str_shuffle($generate),0, $amount);
	if (count($errors) == 0) {
		$date = date("h-i-s:a  M-D-Y ");
		$query = "INSERT INTO signup(firstname,surname,username,gender,password,voters_id,dates,image) VALUES('$fname','$sname','$uname','$gender','$pass','$voters_id','$date','$image')";
		$result = mysqli_query($connect,$query);

		if ($result) {
		echo "<script>alert('You have Succefully Sign-Up')</script>";
		header("Location:login.php");
		}else{
		echo "<script>alert('Faield to Sign-Up')</script>";
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
				<form method="post" action="signup.php">
					<div class="row text-center">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<label>First Name</label>
							<input type="text" class="form-control" name="fname" placeholder="Please Enter First Name" autocomplete="off" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>">
							<p class="text-danger"><?php if(isset($errors['fname'])) echo $errors['fname']; ?></p>
							<p class="text-success"><?php if(isset($sucf)) echo $sucf; ?></p>
                          

								<label>Userame</label>
							<input type="text" class="form-control" name="uname" placeholder="Please Enter Userame" autocomplete="off" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>" >
                            <p class="text-danger"><?php if(isset($errors['uname'])) echo $errors['uname']; ?></p>
							<p class="text-success"><?php if(isset($sucu)) echo $sucu; ?></p>
							
								<label>Password</label>
							<input type="password" class="form-control" name="pass" placeholder="Please Enter Password" autocomplete="off">
							<p class="text-danger"><?php if(isset($errors['pass'])) echo $errors['pass']; ?></p>
							<p class="text-success"><?php if(isset($sucp)) echo $sucp; ?></p>
                            
						</div>
						<div class="col-md-4">
						<label>Surname</label>
						<input type="text" class="form-control" name="sname" placeholder="Please Enter Surname" autocomplete="off" value="<?php if(isset($_POST['sname'])) echo $_POST['sname']; ?>">
						<p class="text-danger"><?php if(isset($errors['sname'])) echo $errors['sname']; ?></p>
							<p class="text-success"><?php if(isset($sucs)) echo $sucs; ?></p>
							<label>Gender</label>
							<select class="form-control" name="gender">
								<option value="Select Your Gender">Select Your Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							 <p class="text-danger"><?php if(isset($errors['gender'])) echo $errors['gender']; ?></p>
							<p class="text-success"><?php if(isset($sucg)) echo $sucg; ?></p>

							<br>
							<label>Confirm-Password</label>
							<input type="password" class="form-control" name="cpass" placeholder="Please Enter Confirm-Password " autocomplete="off">
							<p class="text-danger"><?php if(isset($errors['cpass'])) echo $errors['cpass']; ?></p>
							<p class="text-success"><?php if(isset($succp)) echo $succp; ?></p>

							<br>
					<input type="submit" name="signup" class="btn btn-primary" value="Sign-Up">
					</div>

					</div>
                 
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>