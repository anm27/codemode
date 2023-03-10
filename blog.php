<?php include("includes/dbcon.php") ?>

<?php include("includes/header.php") ?>

<?php include("includes/rightmenu.php") ?>

<div class="content-wrapper">

	<!-- Stunning header -->


	<div class="stunning-header stunning-header-bg-lightviolet">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title">Blog</h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="index.html">Home</a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span href="#">Blog</span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>

	<!-- End Stunning header -->

	<!-- Overlay Search-->

	<div class="overlay_search">
		<div class="container">
			<div class="row">
				<div class="form_search-wrap">
					<form>
						<input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
						<a href="#" class="overlay_search-close">
							<span></span>
							<span></span>
						</a>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- End Overlay Search-->

	<!-- Blog posts-->

	<div class="container">
		<div class="row medium-padding120">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

			<?php 
			
				$query= "SELECT * from blogs";
				$result = mysqli_query($con, $query);

				while($row = mysqli_fetch_assoc($result)) {
					$title = $row['title'];
                    $description = $row['description'];
				
			?>
<main class="main">

<article class="hentry post post-standard has-post-thumbnail sticky">

	<div class="post-thumb">
		<img loading="lazy" src="img/post1.jpg" alt="seo">
		<div class="overlay"></div>
		<a href="img/post1.jpg" class="link-image js-zoom-image">
			<i class="seoicon-zoom"></i>
		</a>
		<a href="#" class="link-post">
			<i class="seoicon-link-bold"></i>
		</a>
	</div>

	<div class="post__content">

		<div class="post__author author vcard">
			<img loading="lazy" src="img/avatar6.png" alt="author">
			Posted by

			<div class="post__author-name fn">
				<a href="#" class="post__author-link">Admin</a>
			</div>

		</div>

		<div class="post__content-info">

			<h2 class="post__title entry-title ">
				<a id="blogtitle" href="#">
					<?php echo $title ?>
				</a>
			</h2>

			<div class="post-additional-info">

				<span class="post__date">

					<i class="seoicon-clock"></i>

					<time id="posted_on" class="published" datetime="2016-04-17 12:00:00">
						Date goes here...
					</time>

				</span>

				<!-- <span class="category">
					<i class="seoicon-tags"></i>
					<a href="#">Video</a>
				</span> -->

				<span class="post__comments">
					<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
					6
				</span>

			</div>

			<p id="post_description" class="post__text">
			<?php echo $description ?>
			</p>

			<a href="15_blog_details.html" class="btn btn-small btn--dark btn-hover-shadow">
				<span class="text">Continue Reading</span>
				<i class="seoicon-right-arrow"></i>
			</a>
		</div>
	</div>

</article>


</main>
			<?php

				}
			
			?>




				

				<div class="row">
					<div class="col-lg-12">
						<nav class="navigation">

							<a href="#" class="page-numbers current bg-border-color"><span>1</span></a>
							<a href="#" class="page-numbers bg-border-color"><span>2</span></a>
							<a href="#" class="page-numbers bg-border-color"><span>3</span></a>
							<a href="#" class="page-numbers bg-border-color"><span>4</span></a>
							<a href="#" class="page-numbers next">
								<svg class="btn-next">
									<use xlink:href="#arrow-right"></use>
								</svg>
							</a>

						</nav>
					</div>
				</div>
			</div>


			<!-- Sidebar-->

			<div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12 col-xs-12">
				<aside aria-label="sidebar" class="sidebar sidebar-right">
					<!-- <div class="widget">
						<form class="w-search">
							<input class="search input-standard-grey" required="required" placeholder="Search" type="search">
							<button class="icon">
								<i class="seoicon-loupe"></i>
							</button>
						</form>
					</div> -->

					

					<div class="widget w-about">
						<div class="heading">
							<h4 class="heading-title">About Us and
								This Blog</h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
							<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
								litterarum formas humanitatis per seacula quarta decima quinta.
							</p>
						</div>

						<a href="02_abouts.html" class="btn btn-small btn-border c-primary">
							<span class="text">Learn More</span>
							<i class="seoicon-right-arrow"></i>
						</a>
					</div>

					<div class="widget w-request bg-boxed-red">
						<div class="w-request-content">
							<img loading="lazy" src="img/request.png" alt="request">
							<h4 class="w-request-content-title">Request
								a Free Quote</h4>
							<p class="w-request-content-text">Gothica, quam nunc putamus parum claram, anteposuerit
								litterarum formas humanitatis.
							</p>

							<a href="22_contacts.html" class="btn btn-small btn--dark btn-hover-shadow">
								<span class="text">Contact Now</span>
							</a>
						</div>
					</div>

					

					<div class="widget w-follow">
						<div class="heading">
							<h4 class="heading-title">Follow Us</h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
						</div>

						<div class="w-follow-wrap">
							<div class="w-follow-item facebook-bg-color">
								<a href="#" class="w-follow-social__item table-cell">
									<i class="seoicon-social-facebook"></i>
								</a>
								<a href="#" class="w-follow-title table-cell">Facebook
									<span class="w-follow-add">
									<i class="seoicon-cross plus"></i>
									<i class="seoicon-check-bold check"></i>
								</span>
								</a>
							</div>
							<div class="w-follow-item twitter-bg-color">
								<a href="#" class="w-follow-social__item table-cell">
									<i class=" seoicon-social-twitter"></i>
								</a>
								<a href="#" class="w-follow-title table-cell">Twitter
									<span class="w-follow-add active">
									<i class="seoicon-cross plus"></i>
									<i class="seoicon-check-bold check"></i>
								</span>
								</a>
							</div>
							<div class="w-follow-item linkedin-bg-color">
								<a href="#" class="w-follow-social__item table-cell">
									<i class="seoicon-social-linkedin"></i>
								</a>
								<a href="#" class="w-follow-title table-cell">Linkedin
									<span class="w-follow-add">
									<i class="seoicon-cross plus"></i>
									<i class="seoicon-check-bold check"></i>
								</span>
								</a>
							</div>
							<div class="w-follow-item google-bg-color">
								<a href="#" class="w-follow-social__item table-cell">
									<i class="seoicon-social-google-plus"></i>
								</a>
								<a href="#" class="w-follow-title table-cell">Google+
									<span class="w-follow-add">
									<i class="seoicon-cross plus"></i>
									<i class="seoicon-check-bold check"></i>
								</span>
								</a>
							</div>
							<div class="w-follow-item pinterest-bg-color">
								<a href="#" class="w-follow-social__item table-cell">
									<i class="seoicon-social-pinterest"></i>
								</a>
								<a href="#" class="w-follow-title table-cell">Pinterest
									<span class="w-follow-add">
									<i class="seoicon-cross plus"></i>
									<i class="seoicon-check-bold check"></i>
								</span>
								</a>
							</div>
						</div>

					</div>

					
				</aside>
			</div>

			<!-- End Sidebar-->


		</div>
	</div>

	<!-- End Blog posts-->
	

	<!-- Getting data from sanity -->

	

<?php include("includes/footer.php") ?>