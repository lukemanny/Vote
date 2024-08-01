<?php
include('voting_lnks.php');
include('function.php');
 
 if (isset($_POST['cbpvote'])) {
        $iid = $_GET['id'];
         $query = "SELECT * FROM contestant WHERE id = '$iid'";
            $result = mysqli_query($con,$query);

  if ($result) {
     while ($row = mysqli_fetch_array($result)) {
         $gggname = $row['firstname'];
         $ggname = $row['surname'];
         $cbname = "$gggname $ggname";
          $_SESSION['compound_boys_prefect'] = $cbname;
          $url = "";
          header('Location: compound_girls_prefect.php');    
} 
  }

}
   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Compound Boys Prefect</title>
   <script type="text/javascript">
    window.history.forward();
  </script>
</head>

<body>
	<div style="margin-top: 30px;"></div>
<div class="container-fluid">
	<h3 class="text-center text-info">Vote For Your Favourate Compound Boys Prefect</h3>

<div class="container-fluid">
	<div class="row text-center py-3">
			<?php
             
             $query = "SELECT * FROM contestant WHERE type ='Compound Boys Prefect'";

             $result = mysqli_query($con,$query);

             while ($row = mysqli_fetch_array($result)) {
             	    selectcontestantcompoundboysprefect($row['image'],$row['firstname'],$row['surname'],$row['id']);

             	
             	     
             }
             

             	 
               
			?>
			
		
		</div>
	</div>
</div>
</body>
</html>