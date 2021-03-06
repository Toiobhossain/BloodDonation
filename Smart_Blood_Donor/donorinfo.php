<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Donate Blood</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    	input
    	{
    		width: 400px;
    		height: 28px;
    		bottom: 1px solid;
    		font-size: 14px;
    	}
    </style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+880 1627560336</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">golamrabbi45@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="login.html" class="mr-3">Sign in</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="homepage.php"><span style="color: red">BLOOD!</span><span style="color: green;">DONOR</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="donorlist.php" class="nav-link"><span>All donor list</span></a></li>
	         <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Donors by Groups
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="anegative.php"> A negative(-)</a>
                                        <a class="dropdown-item" href="apositive.php">A positive(+)</a>
                                        <a class="dropdown-item" href="bnegative.php">B negative(-)</a>
                                        <a class="dropdown-item" href="bpositive.php">B positive(+)</a>
                                        <a class="dropdown-item" href="abnegative.php">AB negative(-)</a>
                                        <a class="dropdown-item" href="abpositive.php">AB positive(+)</a>
                                        <a class="dropdown-item" href="onegative.php">O negative(-)</a>
                                        <a class="dropdown-item" href="opositive.php">O positive(+)</a>
                                        
                                    </div>
                                </li>
	          <li class="nav-item"><a href="bloodrequestlist.php" class="nav-link"><span>Blood Request list</span></a></li>
	          <li class="nav-item"><a href="bloodrequest.php" class="nav-link"><span>Blood Request</span></a></li>
	          <li class="nav-item cta mr-md-2"><a href="donorinfo.php" class="nav-link">DONATE NOW</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap js-fullheight" style="background: white;" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		<h4 style="color: green;">Donate <span style="color: red">Blood</span> Save Life</h4>
          		<form action="adddonor.php" method="POST">
      		<input type="text" name="name" placeholder="Enter your name" required><br><br>
            <input type="password" name="password" placeholder="Enter your password" required><br><br>
      		<input type="text" name="phonenumber" placeholder="Enter your Contact number" required><br><br>
      		<select name="bloodgroup" style="width: 400px;
    		height: 28px;
    		bottom: 1px solid;font-size: 14px;">
    		<option>Select Blood Group</option>
    		<option value="A negative(-)">A negative(-)</option>
    		<option value="A positive(+)">A positive(+)</option>
    		<option value="B negative(-)">B negative(-)</option>
    		<option value="B positive(+)">B positive(+)</option>
    		<option value="AB negative(-)">AB negative(-)</option>
    		<option value="AB positive(+)">AB positive(+)</option>
    		<option value="O negative(-)">O negative(-)</option>
    		<option value="O positive(+)">O positive(+)</option>
      			
      		</select><br><br>
          <input type="email" name="email" placeholder="Enter your email" required><br><br>
          <input type="text" name="livingdistrict" placeholder="Enter your Living District" required><br><br>
          <input type="number" name="bloodamount" placeholder="Enter amount of Blood(unit/bag)" required><br><br>
      		<input type="submit" name="submit" value="Submit" class="btn btn-success" style="width: 200px; height: 36px;">
      	</form>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">Donate <span>Blood</span> Save life</h2>
			            <p></p>
			            <p><a href="#" class="btn btn-primary py-3 px-4">DONATE!</a> <a href="#" class="btn btn-secondary py-3 px-4">Contact us</a></p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
  
		
		

    <footer style="background:gray;">
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p style="text-align: center;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website<i class="icon-heart color-danger" aria-hidden="true"></i> is <a href="#" target="_blank">BLOOD DONOR</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      
    </footer>
    
  

  <!-- loader -->
  


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>