<?php 
	$result = "";
	if(isset($_POST ['submit'])) {
		require 'phpmailer/src/Exception.php';
		require 'phpmailer/src/PHPMailer.php';
		function sendMail($to, $from, $fromName, $subject, $body) {
			$mail = new PHPMailer\PHPMailer\PHPMailer();
			$mail -> setFrom($from, $fromName);
			$mail -> addAddress($to);
			$mail -> Subject = $subject;
			$mail -> Body = $body;
			$mail -> isHTML(false);
			return $mail -> send(); 
		}
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$body = $_POST['message'];

		if(sendMail('rajvishal2704@gmail.com', $email, $name, $subject, $body)) {
			$result .= '<div class="alert alert-success alert-dismissible" role="alert">';
			$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			$result .= 'Thank You! We will be in touch';
			$result .= '</div>';
			die();
		}
		else {
			$result = '';
			$result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
			$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			$result .= 'Something bad happend during sending this message. Please try again later';
			$result .= '</div>';
		}	
	}	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Swapmotion</title>
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i&display=swap" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">

		<link rel="stylesheet" href="css/aos.css">

		<link rel="stylesheet" href="css/ionicons.min.css">

		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="css/jquery.timepicker.css">

		
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
  	<body>
		<!-- Start Nav Section -->
		<nav id="navbar" class="navbar">
			<ul class="nav-menu">
				<li>
					<a data-scroll="home" href="#home" class="dot active">
						<span>Home</span>
					</a>
				</li>
				<li>
					<a data-scroll="about" href="#about" class="dot">
						<span>About</span>
					</a>
				</li>
				<li>
					<a data-scroll="services" href="#services" class="dot">
						<span>Services</span>
					</a>
				</li>
				<li>
					<a data-scroll="work" href="#work" class="dot">
						<span>Work</span>
					</a>
				</li>
				<li>
					<a data-scroll="contact" href="#contact" class="dot">
						<span>Contact</span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- End Nav Section -->

		<!-- Start Home Section -->
		
		<section id="home" class="hero-wrap js-fullheight">
			<header>
				<div class="overlay"></div>
				<video class="video-banner" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
					<source src="images/videobanner.mp4" type="video/mp4">
				</video>
				<video class="video-banner-mobile" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
					<source src="images/bannermobile.mp4" type="video/mp4">
				</video>
				<div class="container h-100">
					<div class="d-flex h-100 text-center align-items-center no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="ftco-animate d-flex align-items-center">
							<div class="text text-center">
								<p class="mb-4">VFX, 3D/2D Animation, Matte Painting, Compositing, Motion Graphics, Film Editing &amp; Film Production.</p>
							</div>  
						</div>
					</div>
				</div>
			</header>
		</section>

		<!-- End Home Section -->

		<!-- Start About Section -->
		<section class="ftco-about img ftco-section" id="about">
			<div class="container">
				<div class="row d-flex no-gutters">
					<div class="col-md-6 col-lg-6 d-flex">
						<div class="img-about img d-flex align-items-stretch">
							<div class="overlay"></div>
							<div class="img img-video d-flex align-self-stretch align-items-center">
								<video class="container" autoplay loop muted>
									<source src="images/showreel.mp4" type="video/mp4" />
								</video>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 pl-md-5 mt-3">
						<div class="heading-section ftco-animate">
							<h2 class="mb-4">About Us</h2>
							<p>Swapmotion is a Mumbai based independent animation and visual effects facility. We craft the super-awesome VFX that moves audiences to experience and believe the worlds of fantasy, fiction and reality at a new level. Our Capabilities include 3D asset modeling, 3D/2D animation, matte painting, compositing,Motion Graphics, Film Editing and visual effects.</p>
							<p>For more than a decade, Swapmotion has been supporting the visual impact work of clients around the world for movies, TV episodes, commercials and special events projects. Our team is as frantic by shot turnover as it is tomorrow. Having served hundreds of clients on numerous events, Swapmotion's talented team has delivered a huge distribution of VFX work.</p>
							<p>Our simple but effective pipeline will help you understand and blend the work structure. We've made it easier to work with us. All you have to do is send your queries and give us your need. We will get back to you.</p>
							<div class="d-flex w-100">
								<div class="img img-about-2" style="background-image: url(images/about-3.jpg);"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Section -->

		<!-- Start Services Section -->
		<section id="services" class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12 heading-section ftco-animate pb-5">
								<h2 class="mb-4">Services</h2>
								<p>We provide wide range of services like - <br><span style="font-weight: 800">VFX, 3D/2D Animation, Matte Painting, Compositing, Motion Graphics, Film Editing &amp; Film Production.</span></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="media block-6 services d-block ftco-animate">
									<div class="icon"><span><img src="images/vfx.png" height="65px" width="65px"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">VFX</h3>
										<p>We do Rotoscoping, cleanup/paint, Keying, Match Move, 3D Camera Tracking, Partical Animation, Simulation & Dynamics.</p>
									</div>
								</div> 
							</div>
							<div class="col-md-4">
								<div class="media block-6 services d-block ftco-animate">
									<div class="icon"><span><img src="images/3d-graphics.png" height="50px" width="50px"></span></div><!--<span class="flaticon-video-player"></span>-->
									<div class="media-body">
										<h3 class="heading mb-3">3D/2D Animation</h3>
										<p>We do charactor modeling,texturing,lighting & rendering.</p>
									</div>
								</div> 
							</div>
							<div class="col-md-4">
								<div class="media block-6 services d-block ftco-animate">
									<div class="icon"><span><img src="images/mattepainting.png" height="65px" width="65px"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Matte Painting</h3>
										<p>We do Super class matte painting for Movies,games and design.</p>
									</div>
								</div> 
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="media block-6 services d-block ftco-animate">
									<div class="icon"><span><img src="images/compositing.png" height="50px" width="50px"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Compositing</h3>
										<p>We do super realistic compositing For movies.</p>
									</div>
								</div> 
							</div>
							<div class="col-md-4">
								<div class="media block-6 services d-block ftco-animate">
									<div class="icon"><span><img src="images/animation.png" height="50px" width="50px"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Motion Graphics</h3>
										<p>We do high class motion graphics for Product and services.</p>
									</div>
								</div> 
							</div>
							<div class="col-md-4">
								<div class="media block-6 services d-block ftco-animate">
									<div class="icon"><span><img src="images/film-editing.png" height="50px" width="50px"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Film Editing</h3>
										<p>We do Film Editing on Adobe Premiere pro, FCP, Davinci Resolve.</p>
									</div>
								</div> 
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="media block-6 services d-block ftco-animate">
									<div class="icon"><span><img src="images/video.png" height="50px" width="50px"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Film Production</h3>
										<p>From script to screen all in one roof.</p>
									</div>
								</div> 
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex align-items-stretch">
						<div class="img w-100" style="background-image: url(images/img3.jpg);"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services Section -->

		<!-- Start Work Section -->
		<section id="work" class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4 heading-section text-center ftco-animate pb-5">
						<h2 class="mb-4">Our Projects</h2>
						<p>The work we have done so far.</p>
					</div>
				</div>
			</div> 
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
					<div class="col-md-4 ftco-animate">
						<div class="model img d-flex align-items-end" style="background-image: url(images/img1.jpg);">
							<a href="images/img1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="icon-expand"></span>
							</a>
							<div class="desc w-100 px-4">
								<div class="text w-100 mb-3">
									<span>Client</span>
									<h2><a>3D Modeling</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="model img d-flex align-items-end" style="background-image: url(images/img2.jpg);">
							<a href="images/img2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="icon-expand"></span>
							</a>
							<div class="desc w-100 px-4">
								<div class="text w-100 mb-3">
									<span>Client</span>
									<h2><a>VFX Production</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="model img d-flex align-items-end" style="background-image: url(images/img3.jpg);">
							<a href="images/img3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="icon-expand"></span>
							</a>
							<div class="desc w-100 px-4">
								<div class="text w-100 mb-3">
									<span>Client</span>
									<h2><a>3D Modeling</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="model img d-flex align-items-end" style="background-image: url(images/img4.jpg);">
							<a href="images/img4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="icon-expand"></span>
							</a>
							<div class="desc w-100 px-4">
								<div class="text w-100 mb-3">
									<span>Client</span>
									<h2><a>Animation</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="model img d-flex align-items-end" style="background-image: url(images/img6.jpg);">
							<a href="images/img6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="icon-expand"></span>
							</a>
							<div class="desc w-100 px-4">
								<div class="text w-100 mb-3">
									<span>Client</span>
									<h2><a>Product Advertising</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="model img d-flex align-items-end" style="background-image: url(images/img7.jpg);">
							<a href="images/img7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="icon-expand"></span>
							</a>
							<div class="desc w-100 px-4">
								<div class="text w-100 mb-3">
									<span>Client</span>
									<h2><a>Motion Graphics</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</section>
		<!-- End Work Section -->
		
		<!-- Start Contact Section -->
		<section class="ftco-section contact-section" id="contact">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-4 heading-section text-center ftco-animate">
						<h2 class="mb-4">Contact Us</h2>
						<p>Reach out to us with your queries and requirments. We will get back back to you.</p>
					</div>
				</div>
				<div class="row justify-content-center mb-5">
					<div class="col-md-6 d-flex ftco-animate">
						<div class="align-self-stretch box text-center p-4">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="icon-map-signs"></span>
							</div>
							<div>
								<h3 class="mb-">Address</h3>
								<p>Unit No.308, 3rd Floor, Metro Avenue, Near Western Express highway metro Station, Off. Andheri-kurla road, Chakala, Andheri East, Mumbai- 400069</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex ftco-animate">
						<div class="align-self-stretch box text-center p-4">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="icon-paper-plane"></span>
							</div>
							<div>
								<h3 class="mb-4">Email Address</h3>
								<p><a href="mailto:ask@swapmotion.com?cc=swapmedia2015@gmail.com">ask@swapmotion.com</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row block-9">
					<div class="col-md-6 ftco-animate mx-auto">
						<form action="index.php" method="post" role="form" id="contactForm" class="contact-form p-4 p-md-5 py-md-5 needs-validation" enctype="multipart/form-data" novalidate>
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please Enter Your Name.</div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please Enter valid Email Id.</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please Enter Subject.</div>
							</div>
							<div class="form-group">
								<textarea id="message" name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please Enter Your Message.</div>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" id="cfsubmit" value="Send Message" class="btn btn-primary py-3 px-5">
							</div>
						</form>
						<?php echo $result; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Section -->

		<!-- Start Footer Section -->
		<footer class="ftco-footer py-5">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="ftco-footer-social p-0">
							<li class="ftco-animate"><a href="https://www.youtube.com/channel/UCMLvhUh0lWKlyRoYNAxpy0w" target="_blank"><span class="icon-youtube"></span></a></li>
							<li class="ftco-animate"><a href="https://www.facebook.com/swapmotion24" target="_blank"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/swapmotion_studios" target="_blank"><span class="icon-instagram"></span></a></li>
						</ul>
						<p> GROUP OF JAYMITH DMME PVT LTD. </p>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Section -->
   

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<script>
			// Disable form submissions if there are invalid fields
			(function() {
			'use strict';
			window.addEventListener('load', function() {
				// Get the forms we want to add validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
				});
			}, false);
			})();
		</script>

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
<?php
?>