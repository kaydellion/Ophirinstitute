<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ophir</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicons -->
	<link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">


	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

	
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="fonts/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link href="https://fonts.cdnfonts.com/css/euclid-circular-a" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/nanum-pen" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>            
                
</head>
<body>

<?php  include "connect_to_mysqli.php";  include "apply.php"; 

$kayd="disabled";
if(isset($_SESSION['ecode'])){
    
    $kayd="";
}


?>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container navkayd" id="navkayd">
			<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" style="max-height: 50px;" class="img-fluid"></a>
		

			<div class="navbar-toggler" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item cta"><a href="#" class="nav-link"  data-toggle="modal" data-target="#modaltweet" <?php echo $kayd; ?>>Generate Tweet</a></li>

				</ul>
			</div>

			<div class="collapse navbar-collapse " id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal"  data-target="#modaltweet" <?php echo $kayd; ?>>Generate Tweet</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->