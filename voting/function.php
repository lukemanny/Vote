<?php

function registered($img,$fname,$sname,$uname,$gender,$id,$date){
	$registered = "
     
			
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 270px;'>
					</div>
				   <div class=\"col-md-12 \">
						<div class=\"row\">
							<div class=\"col-md-5\">
								<h5>First Name</h5>
								<h5>Surname</h5>
								<h5>Username</h5>
								<h5>Gender</h5>
								<h5>Voters ID</h5>
								<h5>Date</h5>
							</div>
							<div class=\"col-md-7\">
							    <h5>$fname</h5>
								<h5>$sname</h5>
								<h5>$uname</h5>
								<h5>$gender</h5>
								<h5>$id</h5>
								<h5>$date</h5>	
									
								</div>		
									</div>
							</div>



             	</div>
       </div>

	";
	echo $registered;
}



function admins($id,$uname,$admin_id){
	$admin = "

    <tr>
	<td>$id</td>
	<td>$uname</td>
	<td>$admin_id</td>
	</tr>
	";
	echo $admin;
}

function profile($img,$fname,$sname,$uname,$gender,$id){
	$profile = "
    <div class=\"row\">
	<div class=\"col-md-3\">
		<img src=img/$img class=\"shadow w-30\" style=\"width: 250px;\">
	</div>
	<div class=\"col-md-3\">
		<h5>First Name</h5>
		<h5>Surname</h5>
		<h5>Username</h5>
		<h5>Gender</h5>
		<h5>Voters ID</h5>
	</div>
	<div class=\"col-md-4\">
		<h5>$fname</h5>
		<h5>$sname</h5>
		<h5>$uname</h5>
		<h5>$gender</h5>
		<h5>$id</h5>
	</div>



</div>
	";
	echo $profile;
}


function othersview($img,$fname,$sname,$date,$message){
	$othersview = "<div class=\"bg-info my-2 wow zoomIn delay-09s\" style=\"color: black; border-radius: 10px;overflow: hidden;\">
  							<div class=\"row\">
  								<div class=\"col-md-2\">
  									<a href='img/$img'><img src=img/$img class=\"\" style=\"width: 70px; height: 70px;border-radius: 50%;\" alt=''></a>
  								</div>
  								<div class=\"col-md-8\">
  			            <h6 class=\"my-2 \"><b>FROM:</b> $fname $sname   <span><b>AT:</b>  $date</span></h6>
  			           <h6>$message</h6>

  								</div>
  							</div>
  						</div>";
	echo $othersview;
}





function myview($img,$date,$message){
	$myview = "<div class=\"bg-primary my-2 wow fadeInRight\" style=\"color: black;border-radius: 10px;\">
  						<div class=\"row\">
  							<div class=\"col-md-9\">
  								<h6 class=\"my-2 mx-2\"><b>AT:</b> $date</h6>
  								<h6 style=\"overflow: hidden;\" class='mx-2'>$message</h6>
  							</div>
  							<div class=\"col-md-3\">
  								<a href='img/$img'><img src=img/$img class=\"\" style=\"width: 70px;height: 70px;border-radius: 50%;\"></a>
  							</div>
  						</div>
  						</div>";
	echo $myview;

}


function viewcontestant($img,$fname,$sname,$type,$department){
	$viewcontestant = "

			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 180px;'>
					</div>
				   <div class=\"col-md-12 \">
						<div class=\"row\">
							<div class=\"col-md-5\">
								<h5>First Name</h5>
								<h5>Surname</h5>
								<h5>type</h5>
								<h5>Department</h5>
								
							</div>
							<div class=\"col-md-7\">
							    <h5>$fname</h5>
								<h5>$sname</h5>
								<h5>$type</h5>
								<h5>$department</h5>
								
									
								</div>		
									</div>
							</div>



             	</div>
       </div>
	";
	echo $viewcontestant;
}

function selectcontestantboysprefect($img,$fname,$sname,$id){
	$selectcontestant = "
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
					<form method='post' action='boys_prefect.php?action=vote&id=$id'>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 290px;'>
					</div>
				   <div class=\"col-md-12 \">
				   
				<input type=\"submit\" name=\"vote\" value=\"Vote for $fname $sname\" class=\"btn btn-primary mx-5 my-4 text-center\">
							</div>

                  </form>

             	</div>
       </div>
       ";
	echo $selectcontestant;
}


function selectcontestantgirlsprefect($img,$fname,$sname,$id){
	$selectcontestant = "
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
					<form method='post' action='girls_prefect.php?action=vote&id=$id'>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 290px;'>
					</div>
				   <div class=\"col-md-12 \">
				   
				<a href='compound_boys_prefect.php'><input type=\"submit\" name=\"votes\" value=\"Vote for $fname $sname\" class=\"btn btn-primary mx-5 my-4 text-center\"></a>
							</div>

                  </form>

             	</div>
       </div>
       ";
	echo $selectcontestant;
}



function selectcontestantcompoundboysprefect($img,$fname,$sname,$id){
	$selectcontestant = "
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
					<form method='post' action='compound_boys_prefect.php?action=vote&id=$id'>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 290px;'>
					</div>
				   <div class=\"col-md-12 \">
				   
				<input type=\"submit\" name=\"cbpvote\" value=\"Vote for $fname $sname\" class=\"btn btn-primary mx-5 my-4 text-center\">
							</div>

                  </form>

             	</div>
       </div>
       ";
	echo $selectcontestant;
}

function selectcontestantcompoundgirlsprefect($img,$fname,$sname,$id){
	$selectcontestant = "
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
					<form method='post' action='compound_girls_prefect.php?action=vote&id=$id'>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 290px;'>
					</div>
				   <div class=\"col-md-12 \">
				   
				<input type=\"submit\" name=\"cgpvote\" value=\"Vote for $fname $sname\" class=\"btn btn-primary mx-5 my-4 text-center\">
							</div>

                  </form>

             	</div>
       </div>
       ";
	echo $selectcontestant;
}

function selectcontestantchaplinprefect($img,$fname,$sname,$id){
	$selectcontestant = "
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
					<form method='post' action='chaplin_prefect.php?action=vote&id=$id'>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 290px;'>
					</div>
				   <div class=\"col-md-12 \">
				   
				<input type=\"submit\" name=\"chvote\" value=\"Vote for $fname $sname\" class=\"btn btn-primary mx-5 my-4 text-center\">
							</div>

                  </form>

             	</div>
       </div>
       ";
	echo $selectcontestant;
}

function selectcontestantentertainmentboysprefect($img,$fname,$sname,$id){
	$selectcontestant = "
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
					<form method='post' action='entertainment_girls_prefect.php?action=vote&id=$id'>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 290px;'>
					</div>
				   <div class=\"col-md-12 \">
				   
				<input type=\"submit\" name=\"ebvote\" value=\"Vote for $fname $sname\" class=\"btn btn-primary mx-5 my-4 text-center\">
							</div>

                  </form>

             	</div>
       </div>
       ";
	echo $selectcontestant;
}




function selectcontestantentertainmentgirlsprefect($img,$fname,$sname,$id){
	$selectcontestant = "
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
					<form method='post' action='entertainment_girls_prefect.php?action=vote&id=$id'>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 290px;'>
					</div>
				   <div class=\"col-md-12 \">
				   
				<input type=\"submit\" name=\"egvote\" value=\"Vote for $fname $sname\" class=\"btn btn-primary mx-5 my-4 text-center\">
							</div>

                  </form>

             	</div>
       </div>
       ";
	echo $selectcontestant;
}



function selectcontestantcanteenprefect($img,$fname,$sname,$id){
	$selectcontestant = "
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
					<form method='post' action='canteen_prefect.php?action=vote&id=$id'>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 290px;'>
					</div>
				   <div class=\"col-md-12 \">
				   
				<input type=\"submit\" name=\"cavote\" value=\"Vote for $fname $sname\" class=\"btn btn-primary mx-5 my-4 text-center\">
							</div>

                  </form>

             	</div>
       </div>
       ";
	echo $selectcontestant;
}


function selectcontestantdickson($img,$fname,$sname,$id){
	$selectcontestant = "
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
					<form method='post' action='dickson.php?action=vote&id=$id'>
						<img src=img/$img alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 290px;'>
					</div>
				   <div class=\"col-md-12 \">
				   
				<input type=\"submit\" name=\"dvote\" value=\"Vote for $fname $sname\" class=\"btn btn-primary mx-5 my-4 text-center\">
							</div>

                  </form>

             	</div>
       </div>
       ";
	echo $selectcontestant;
}


function chat($img,$fname,$sname,$votes){
	$chat = "
   	
			 
			 <div class=\"col-md-4 col-sm-4 my-3 my-md-0 py-2\">
				<div class=\"card shadow\">
					<div>
						<img src='img/$img' alt=\"image1\" class=\"img-fluid card-img-top\" style='height: 270px;'>
					</div>
				   <div class=\"col-md-12 \">
						<div class=\"row\">
							<div class=\"col-md-5\">
								<h5> Name</h5>
								<h5>Votes</h5>
								
							</div>
							<div class=\"col-md-7\">
							    <h5>$fname $sname</h5>
								<h5>$votes</h5>
								<h5></h5>
								
									
								</div>		
									</div>
							</div>
</div>
</div>


             	
	";
	echo $chat;
}

?>