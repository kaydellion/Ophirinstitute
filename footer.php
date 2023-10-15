

<style>
.show-navbar {
  display: block !important;
}

.modal-content{
  background: transparent !important ;
  border:none !important;
  margin-top:25%;
  margin-bottom: 20%;
}
.modal-content h2{
font-weight:600;
color:white;
font-size: 42px;
text-align:center;
}

.modal-content h2 span{
  color: #9536EC;
}

.modal-body{
background: rgba(149, 54, 236, 0.1);
border: 1px solid rgba(255, 255, 255, 0.11);
border-radius: 20px;
padding:50px;
}

.modal-body p{
  font-size: 14px;
font-weight: 400;
text-align:center;
color:#fff;
}

.btnkayd{
justify-content: center;
align-items: center;
padding: 16px 23px;
gap: 11px;
margin-top: 10%;
color:#fff;
background: rgba(149, 54, 236, 0.8);
border-radius: 8px;
border:0;
outline:#9536EC;
width:100%;
}

.btnkayd:hover{
 color: #fff !important;
}
#my_input {
  background: rgba(255, 255, 255, 0.2) !important; 
border: 1px solid rgba(255, 255, 255, 0.06);
border-radius: 10px;
color: #fff !important;
font-size: 14px;
}

#my_input::placeholder{
  color: lightgray;
}

@media (max-width: 768px) {

  
#my_input {
   background: transparent !important; 
border: 1px solid rgba(255, 255, 255, 0.06);
border-radius: 10px;
color: #fff !important;
font-size: 14px;
}

#my_input::placeholder{
  color: lightgray;
}

.modal-body{
  background: transparent !important; 
border: none !important;
padding:10px;

}
#modal-thanks{
 align-items: center;
padding: 20px 10px;
gap: 24px;

position: relative;
width: 376px;
height: 258px;
text-align:center !important;
color: #fff !important;

background: #200E34;
border-radius: 8px;
}


.modal-body p{
text-align: left !important;
}

.modal-content h2{
font-weight:600;
color:white;
font-size: 32px;
text-align:left;
padding: 10px;
}


.modal-content{

  margin-top:40%;}

}
</style>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="generatetweet" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container navkayd" id="navkayd">
			<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" style="max-height: 50px;" class="img-fluid"></a>
		

			<div class="navbar-toggler" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item cta"><a href="#" class="nav-link"  data-toggle="modal" data-target="#generatetweet"<?php echo $kayd; ?>>Generate Tweet</a></li>


				</ul>
			</div>

			<div class="collapse navbar-collapse " id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal" data-target="#generatetweet"<?php echo $kayd; ?>>Generate Tweet</a></li>


				</ul>
			</div>
		</div>
	</nav>
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
    <h2>Kindly Fill In Your <span c>Details</span></h2>
   <div class="modal-body">
  <p>Become one of the knight,  your 2 steps away from reaching your new
title, filled with different life changing opportunities.( Join our community if You’ve not and also generate a tweet)</p>
<p><form method="post">
<div class="row" style="margin-top: 10%;;">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="my_input" name="name" placeholder="Your Name" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" class="form-control" id="my_input" name="email" placeholder="Email" required>
</div></div></div>
<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="my_input" name="discord" placeholder="Discord ID" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="my_input" name="twitter"  placeholder="Twitter ID " required>
</div></div></div>


<div class="row">
<div class="col-md-12"><input type="submit" name="submit" class="btnkayd w-100" value="Submit"/></div>
</div>
</form>
</p>

</div>
    </div>
  </div>
</div>





<div class="modal fade bd-example-modal-lg" tabindex="-1" id="modalsuccess" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container navkayd" id="navkayd">
			<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" style="max-height: 50px;" class="img-fluid"></a>
		

			<div class="navbar-toggler" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item cta"><a href="#" class="nav-link"  data-toggle="modal"  data-target="#modaltweet" <?php echo $kayd; ?>>Generate Tweet</a></li>

				</ul>
			</div>

			<div class="collapse navbar-collapse " id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal"  data-target="#modaltweet" <?php echo $kayd; ?>>Generate Tweet</a></li>

				</ul>
			</div>
		</div>
	</nav>
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
   <div class="modal-body" id="modal-thanks">
    <h2>&#129395;</h2>
  <p>Congratulations! Your application has been received.</p>
   


    </div>
    </div>
  </div>
</div>




<div class="modal fade bd-example-modal-lg" tabindex="-1" id="modaltweet" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
					<li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal" data-target="#modaltweet" <?php echo $kayd; ?>>Generate Tweet</a></li>

				</ul>
			</div>
		</div>
	</nav>
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
   <div class="modal-body" id="modal-thanks">
  <p>Congratulations to me &#127881;&#127881;&#127881;  .I have successfully applied to Ophir workshop. Join me to apply here&#x1F447;
  <a href="http://ophir.institute">http://ophir.institute</a><p>
   <br>
<div class="row">
<div class="col-lg-12"> <a href="https://twitter.com/share?text=Congratulations to me &#127881;&#127881;&#127881;. I have successfully applied to Ophir workshop @InstituteOphir %0a%0aJoin me to apply here&#x1F447;
 %0ahttps://www.ophir.institute" target=”_blank”   class="btnkayd w-100">Click here to tweet</a></div>
</div>

    </div>
    </div>
  </div>
</div>





<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>