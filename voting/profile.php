<?php
include('header.php');
include('function.php');
$con = mysqli_connect("localhost","root","","search");


if (isset($_POST['update'])) {
	$image = $_FILES["img"]["name"];
    $names = $_SESSION['username'];
	

	if (empty($image)) {
			echo "<script>alert('Sorry There must be a selected image')</script>";
	}else{
	$qq = "UPDATE signup SET image = '$image' WHERE username = '$names'";
    $q = "UPDATE suggestion SET image = '$image' WHERE username = '$names'";

	$rr = mysqli_query($con,$qq);
    $r = mysqli_query($con,$q);
	echo "<script>alert('You have successfully UPDATED your profile')</script>";
	move_uploaded_file($_FILES["img"]["tmp_name"], "img/$image");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
</head>
<body>
	<div style="margin-top: 160px;"></div>
        <div class="container-fluid">
        	<div class="col-md-12">
        		<div class="row">
        			<div class="col-md-2 wow fadeInLeft">
        				
        	<form method="post" action="profile.php" enctype="multipart/form-data">
        	              <label>Update Image Profile</label>
        	            <input type="file" name="img" class="form-control"><br><br>
        	              <input type="submit" name="update" class="btn btn-primary" value="UPDATE">
        				</form>

        			</div>
        			<div class="col-md-10 wow slideInDown">
        				<?php
        				$name = $_SESSION['username'];
                         $que = "SELECT * FROM signup WHERE username = '$name'";
                         $res = mysqli_query($con,$que);

                         while ($row = mysqli_fetch_array($res)) {
                         	profile($row['image'],$row['firstname'],$row['surname'],$row['username'],$row['gender'],$row['voters_id']);
                         }
        				?>
        			</div>
        		</div>
        	</div>
        </div>
</body>
</html>

