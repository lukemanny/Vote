<?php
include('voting_lnks.php');
include('function.php');
 
 if (isset($_POST['vote'])) {
        $id = $_GET['id'];
         $query = "SELECT * FROM contestant WHERE id = '$id'";
            $result = mysqli_query($con,$query);

   while ($row = mysqli_fetch_array($result)) {
         $ffname = $row['firstname'];
         $fffname = $row['surname'];
          $fname = "$ffname $fffname";
          $_SESSION['boys_prefect'] = $fname;
        
           header("Location:girls_prefect.php");
           exit();
        
}

}
   
?>

<!DOCTYPE html>
<html>
<head>
  
	<title>Boys Prefect</title>
  <script type="text/javascript">
    window.history.forward();
  </script>
</head>
<body>
	<div style="margin-top: 30px;"></div>
<div class="container-fluid">
	<h3 class="text-center text-info">Vote For Your Favourate Boys Prefect</h3>

<div class="container-fluid">
	<div class="row text-center py-3">
			<?php
             
             $query = "SELECT * FROM contestant WHERE type ='Boys Prefect'";

             $result = mysqli_query($con,$query);

             while ($row = mysqli_fetch_array($result)) {
             	    selectcontestantboysprefect($row['image'],$row['firstname'],$row['surname'],$row['id']);

             	
             	     
             }
             

             	 
               
			?>
			
		
		</div>
	</div>
</div>
</body>
</html>