<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">

</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">

							<div class="top_bar_content ml-auto">
								<div class="top_bar_menu">
									<ul class="standard_dropdown top_bar_dropdown">


									</ul>
								</div>
								<div class="top_bar_user">
									<div class="user_icon"><img src="images/user.svg" alt=""></div>
									<?php
	                  include("php/config.php");
	                  session_start();
	                  if( isset($_SESSION["login_user"]) ){
	                    echo '<div><a href="#"> '.$_SESSION["login_user"].'</a></div>';
	                    echo '<div><a href="php/logout.php">Logout</a></div>';
	                  }
	                  else{
									            echo '<div><a href="register.html">Register</a></div>';
									            echo '<div><a href="signin.html">Sign in</a></div>';
	                  }
	                ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Main -->

			<div class="header_main">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<div class="col-lg-2 col-sm-3 col-3 order-1">
							<div class="logo_container">
								<div class="logo"><a href="index.php">BookTickZ</a></div>
							</div>
						</div>

						<!-- Search -->


						<!-- Wishlist -->

					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="main_nav_content d-flex flex-row">

								<!-- Categories Menu -->


								<!-- Main Nav Menu -->

								<div class="main_nav_menu ml-auto">
									<ul class="standard_dropdown main_nav_dropdown">
										<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="movies.php">Movies<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="blog.php">About Us<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</div>

								<!-- Menu Trigger -->

								<div class="menu_trigger_container ml-auto">
									<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
										<div class="menu_burger">
											<div class="menu_trigger_text">menu</div>
											<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</nav>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->


					<!-- Search -->
					<!-- Wishlist -->

							<!-- Main Nav Menu -->


							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>

		<!-- Menu -->

	</header>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Team</h2>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

						<div class="container1">
						<!-- Blog post -->
						<div class="blog_post">
							<img src="images/varshini.jpg" alt="Avatar" class="image">
  							<div class="overlay">
    								<div class="text">Hima Varshini <br>Developer</div>
  							</div>
						</div>
						</div>

						<div class="container1">
						<div class="blog_post">
							<img src="images/sarath.jpeg" alt="Avatar" class="image">
  							<div class="overlay">
    								<div class="text">Sarath Chandrika<br>Developer</div>

  							</div>
						</div>
						</div>

						<div class="container1">
						<div class="blog_post">
							<img src="images/mounica.jpeg" alt="Avatar" class="image">
  							<div class="overlay">
    								<div class="text">Mounica Revuru<br>Developer</div>

  							</div>
						</div>
						</div>

						<div class="container1">
						<div class="blog_post">
							<img src="images/usha.jpg" alt="Avatar" class="image">
  							<div class="overlay">
    								<div class="text">Usha Mundra<br>Tester</div>

  							</div>
						</div>
						</div>

						<div class="container1">
						<div class="blog_post">
							<img src="images/anitha.png" alt="Avatar" class="image">
  							<div class="overlay">
    								<div class="text">Anitha Sai Saranya<br>Tester</div>

  							</div>
						</div>
						</div>

						<!-- Blog post -->

						<!-- Blog post -->

						<!-- Blog post -->


						<!-- Blog post -->

						<!-- Blog post -->


					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->
	<div class="panel"></div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="index.html">Book TickZ</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+91 7356402732</div>
						<div class="footer_contact_text">
							<p>Amrita School of Engineering, Amritapuri</p>

						</div>
						<div class="footer_contact_text">
						</div>

					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">

						<div class="logos ml-sm-auto">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/blog_custom.js"></script>
</body>

</html>
