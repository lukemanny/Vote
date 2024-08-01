<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Voting System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body >

  <!--==========================
    Header
  ============================-->
  <header id="header" style="background-color: blue">
    <div class="container-fluid">

      

      <nav id="nav-menu-container" >
        <ul class="nav-menu">
          <?php
             
             if (isset($_SESSION['username'])) {
              $name = $_SESSION['username'];

                echo "<li><a href='index.php'>Home</a></li>
                <li class=''><a href='vote.php'>Vote</a></li>
          <li><a href='profile.php'>Profile</a></li>
          <li><a href='how_to_vote.php'>How To vote</a></li>
          <li><a href='contact.php'>Contact</a></li>
            <li><a href=''>$name</a></li>
             <li><a href='other_view.php'>Others View</a></li>
          <li><a href='logout.php'>Logout</a></li>
    ";
             }else if (isset($_SESSION['admin'])){

           
                echo "<li><a href='index.php'>Home</a></li>
                <li class=''><a href='vote_chat.php'>Vote Chat</a></li>
          <li><a href='add_contestant.php'>Add Contestant</a></li>
          <li><a href='remove_contestant.php'>Remove Contestant</a></li>
          <li><a href='register.php'>Registered Users</a></li>
             <li><a href='add_admin.php'>Add/Remove Administrator</a></li>
          <li><a href='logout.php'>Logout</a></li>

    ";    
             }else{
              echo " 
              <li><a href='index.php'>Home</a></li>
              <li><a href='how_to_vote.php'>How To vote</a></li>
              <li><a href='administrator.php'>Administrator</a></li>
          <li class=''><a href='signup.php'>Sign-Up</a></li>
          <li><a href='login.php'>Login</a></li>";
             }
        ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

 <script type="text/javascript">
   wow.init();
 </script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
