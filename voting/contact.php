<?php
include('header.php');

$con = mysqli_connect("localhost","root","","search");

if (isset($_POST['send'])) {
	
	$message = $_POST['area'];

	$name = $_SESSION['username'];

	$qq = "SELECT * FROM signup WHERE username ='$name'";
	$res = mysqli_query($con,$qq);

	while ($row = mysqli_fetch_array($res)) {
		$fname = $row['firstname'];
		$image = $row['image'];
		$sname = $row['surname'];
	}
     $date = date("h:i:s:a  Y-M-D");
	
    $q = "SELECT * FROM suggestion WHERE username ='$name'";
    $check = mysqli_query($con,$q);
	if (empty($message)) {
		echo "<script>alert('Message box cant be empty')</script>";
	}else if(mysqli_num_rows($check) > 4) {
     echo "<script>alert('You have only five suggestion')</script>";
	}else{
	$query = "INSERT INTO suggestion(firstname,surname,username,image,message,dates) VALUES('$fname','$sname','$name','$image','$message','$date')";
	$result = mysqli_query($con,$query);

	echo "<script>alert('You have successfully added your suggestion')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
</head>
<body>
	<div style="margin-top: 150px;"></div>
    <div class="container-fluid">
    	<div class="col-md-12">
    		<div class="row">
    			<div class="col-md-7 rounded wow fadeInLeft slower">
    				<h4>Contact Us for more Information</h4>
    				<br><br>
    				<h5>Email:   dicksonawudu362375@gmail.com</h5>
    				<h5>Phone:   0550905300</h5>
    				<br><br>
    				<br>
    				<h5>Location</h5>
    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.13344364487!2d-1.769501985909514!3d4.917331841111877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfe779922de401a7%3A0xab3ae9f3539424c6!2sTakoradi%20Technical%20Institute!5e0!3m2!1sen!2sgh!4v1572345286110!5m2!1sen!2sgh" width="750" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    			</div>
    			<div class="col-md-5 wow zoomIn slower">
    				<form method="post" action="contact.php">
    					<h4>Write Your Suggestions About this Voting. </h4>
    					<h5><b>NOTE:</b> You have only five suggestions.</h5>
    					<br><br>
    					<label>Message</label>
    					<textarea name="area" class="form-control" style="resize: none;height: 210px;"></textarea><br>
    					<input type="submit" name="send" value="Send" class="btn btn-primary">
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>

