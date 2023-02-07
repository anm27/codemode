<!DOCTYPE html>
<html lang="en">
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>CodeMode</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/crumina-fonts.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/blocks.css">
	<link rel="stylesheet" type="text/css" href="css/layouts.css">
	<link rel="stylesheet" type="text/css" href="css/modules.css">
	<link rel="stylesheet" type="text/css" href="css/widgets-styles.css">
	<link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.css">


	<!--Plugins styles-->

	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/primary-menu.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

	<!--External fonts-->
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">
<!-- <button id="myBtn">Open Modal</button> -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php include("includes/form.php") ?>
  </div>

</div>

<div class="top-bar top-bar-dark">
	<div class="container">
		<div class="top-bar-contact">

			<div class="contact-item">
				987-543-7382
			</div>

			<div class="contact-item">
				<a href="#">codemodebharat@gmail.com</a>
			</div>

			<div class="contact-item">
				<span>Mon. - Fri.</span> 10:00 - 21:00
			</div>
		</div>

		<div class="follow_us">
			<span>Follow us:</span>
			<div class="socials">

				<a href="" class="social__item">
					<img loading="lazy" src="svg/circle-facebook.svg" alt="facebook">
				</a>

				<a href="" class="social__item">
					<img loading="lazy" src="svg/twitter.svg" alt="twitter">
				</a>

				<a href="" class="social__item">
					<img loading="lazy" src="svg/google.svg" alt="google">
				</a>

				<a href="" class="social__item">
					<img loading="lazy" src="svg/youtube.svg" alt="youtube">
				</a>

			</div>
		</div>

		<a href="#" class="top-bar-close" id="top-bar-close-js">
			<span></span>
			<span></span>
		</a>

	</div>
</div>

<header class="header" id="site-header">
	<a href="#" id="top-bar-js" class="top-bar-link">
		<i class="seosight-icon seoicon-arrow-to-bottom"></i>
	</a>

	<div class="container">

		<div class="header-content-wrapper">

			<div class="logo">
				<a href="index.html" class="full-block-link"></a>
				<img loading="lazy" src="img/logo-eye.png" alt="Seosight">
				<div class="logo-text">
					<div class="logo-title">Codemode</div>
				</div>
			</div>

			<nav id="primary-menu" class="primary-menu">

				<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
					<span class="mob-menu--title">Menu</span>
					<span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                            <svg width="1000px" height="1000px">
                                <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                        </span>
				</a>

				<!-- menu-icon-wrapper -->

				<ul class="primary-menu-menu">
					<li class="menu-item-has-children">
						<a href="index.php">Home</a>
					</li>

					<li class="">
						<a href="03_services.html">Courses</a>
						<ul class="dropdown">
							<li class="megamenu-item-info">
								<h5 class="megamenu-item-info-title">List of Courses</h5>
								<p class="megamenu-item-info-text">Choose a Course</p>
							</li>
							<li class="hover-ver2">
								<a href="web-development.php"><i class="seoicon-pin-map"></i>
									Web Development
								</a>
							</li>
							<li class="hover-ver2">
								<a href="app-development.php"><i class="seoicon-mail-send"></i>
									App Development
								</a>
							</li>
							
						</ul>
					</li>

                    <li class="">
						<a href="pricing.php">Pricing</a>
					</li>
					
					<li class="">
						<a href="14_blog.html">Hire Talent</a>
					</li>

					<li class="">
						<a href="contact.php">Contacts</a>
					</li>
				</ul>
			</nav>

			<ul class="nav-add">

				<li class="search search_main">
					<a href="#" class="js-open-search">
						<i class="seoicon-loupe"></i>
					</a>
				</li>
			</ul>

			<div class="user-menu open-overlay">
				<a href="#" class="user-menu-content  js-open-aside">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>
		</div>

	</div>

</header>