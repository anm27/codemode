<?php include("includes/header.php") ?>

<?php include("includes/rightmenu.php") ?>

<div class="content-wrapper">

	<!-- Stunning header -->

	<div class="stunning-header stunning-header-bg-blue">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title">Contact Information</h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="index.html">Home</a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span href="#">Contact Information</span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>

	<!-- End Stunning header -->


	<!-- Contacts -->


	<div class="container-fluid">
		<div class="row medium-padding80 bg-border-color contacts-shadow">
			<div class="container">
				<div class="row">
					<div class="contacts">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="contacts-item">
								<img loading="lazy" src="img/contact7.png" alt="phone">
								<div class="content">
									<a href="#" class="title">Hisar, India</a>
									<p class="sub-title">Office no. 7, 4th floor, Metropolis mall, Near jindal chowk, Hisar</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="contacts-item">
								<img loading="lazy" src="img/contact8.png" alt="phone">
								<div class="content">
									<a href="#" class="title">globalprobes@gmail.com</a>
									<p class="sub-title">online support</p>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="contacts-item">
								<img loading="lazy" src="img/contact9.png" alt="phone">
								<div class="content">
									<a href="#" class="title">+91-946-672-9081</a>
									<a href="#" class="title">+44-744-879-6501</a>
									<p class="sub-title">Mon-Fri 9am-6pm</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Contacts -->

	<!-- Leaflet map -->


	<iframe style="width: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1789.708431195418!2d88.51303656157499!3d22.56781458838683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a020ba73fd29cfd%3A0x871b9d1e0d33f979!2sK34%20sapoorji%20SHUKHOBRISTI!5e0!3m2!1sen!2sin!4v1674942095777!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

	<!-- End Leaflet map -->

	<!-- Contact form -->


	<div class="container">
		<div class="contact-form medium-padding120">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="heading">
						<h4 class="heading-title">Have You Any Questions?</h4>
						<div class="heading-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div>
						<p class="heading-text">Please contact us using the form and we’ll get back to you as soon as possible.</p>
					</div>
				</div>
			</div>

			<form class="contact-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="modules/forms/submit.php">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<input class="input-standard-grey" name="website" type="text" placeholder="Website URL" required>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<input name="name" class="input-standard-grey" placeholder="Your Name" type="text" required>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<input name="email" class="input-standard-grey" placeholder="Email Address" type="email" required>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<input name="phone" class="input-standard-grey" placeholder="Phone" type="tel" required>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<textarea name="message" class="input-standard-grey" placeholder="Details"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="submit-block table">
						<div class="col-lg-3 table-cell">
							<button class="btn btn-small btn--primary">
								<span class="text">Submit Now</span>
							</button>
						</div>

						<div class="col-lg-5 table-cell">
							<div class="submit-block-text">
								Please, let us know any particular things to check and the best time
								to contact you by phone (if provided).
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>

	<!-- End Contact form -->

<?php include("includes/essentialpopups.php") ?>

<?php include("includes/footer.php") ?>