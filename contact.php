<!DOCTYPE html>
<html lang="en">
<head>
	<title>Test | Contact</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Barlow:400,600%7COpen+Sans:400,400i,700' rel='stylesheet'>

	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-icons.css" />
	<link rel="stylesheet" href="revolution/css/settings.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body>

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			"Loading..."
		</div>
	</div>

	<main class="main-wrapper">

		<!-- Navigation -->
		<?php include 'includes/header.php'; ?>
		 <!-- end navigation -->


		<div class="content-wrapper content-wrapper--boxed oh">

      <!-- Page Title -->
      <section class="page-title bg-dark-overlay text-center" style="background-image: url(img/page-title/contact-breadcrumbs.jpg);">
        <div class="container">
          <div class="page-title__holder">
            <h1 class="page-title__title">Contact</h1>
            <ul class="breadcrumbs">
              <li class="breadcrumbs__item">
                <a href="index.php" class="breadcrumbs__url">Home</a>
              </li>
              <li class="breadcrumbs__item breadcrumbs__item--current">
                Contact
              </li>
            </ul>
          </div>
        </div>
      </section> 
      <!-- end page title -->

			<!-- Contact -->
      <section class="section-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="contact">
				<h5 class="contact__title">India Office</h5>
                <ul class="contact__items">
                  <li class="contact__item">
										<span class="contact__item-label">Address:</span>
                    <address>Sumit Sawant <br> 1st Floor, Kesariya, Vallabh Baugh Lane, Opp. Ratna Super Market, Chembur (East), Mumbai - 400071, India.</address>
                  </li>
                  <li class="contact__item">
                    <span class="contact__item-label">Phone: </span>
                    <a href="tel:7977175695">7977175695</a>
                  </li>
                  <li class="contact__item">
                    <span class="contact__item-label">Email: </span>
                    <a href="mailto:sumitsawant25@gmail.com">sumitsawant25@gmail.com</a>
                  </li>
								</ul>
								
								<h5 class="contact__title mt-40">Follow Us</h5>
								<div class="socials">
									<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
									<a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
									<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
									<a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
								</div>

              </div>
						</div>
						<div class="col-lg-7 offset-lg-1">
							<h2 class="section-title">Get a Free Quote</h2>
							<p class="mb-40">If you have any question about project cost, get in touch.</p>
							<!-- Contact Form -->
							<form id="contact-form" class="contact-form material" method="post" action="#">

								<div class="row">
									<div class="col-lg-6">
										<!-- Name -->
										<div class="material__form-group form-group">
											<input type="text" name="name" id="name" class="form-input material__input" required="">
											<label for="name" class="material__label">Name
												<abbr title="required" class="required">*</abbr>
											</label>
											<span class="material__underline"></span>
										</div>
									</div>
									<div class="col-lg-6">
										<!-- Email -->
										<div class="material__form-group form-group">
											<input type="email" name="email" id="email" class="form-input material__input" required="">
											<label for="email" class="material__label">Email
												<abbr title="required" class="required">*</abbr>
											</label>
											<span class="material__underline"></span>
										</div>
									</div>
								</div>

								<!-- Subject -->
								<div class="material__form-group form-group">
									<input type="text" name="subject" id="subject" class="form-input material__input">
									<label for="subject" class="material__label">Subject
									</label>
									<span class="material__underline"></span>
								</div>							

								<div class="material__form-group form-group">
									<textarea id="message" name="message" rows="7" class="form-input material__input" required=""></textarea>
									<label for="message" class="material__label">Message
										<abbr title="required" class="required">*</abbr>
									</label>
									<span class="material__underline"></span>
								</div>								

								<input type="submit" class="btn btn--lg btn--color btn--button" value="Send Message" id="submit-message">
								<div id="msg" class="message"></div>
							</form>
						</div>
          </div>
        </div>
      </section> <!-- end contact -->


      <!-- Google Map -->
      <div class="container-fluid">
      	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30171.02298377629!2d72.88367191162222!3d19.04711669083741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c5ede708d39d%3A0xd81ae764fa3f136d!2sChembur+East%2C+Mumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1537683211784" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>


			<!-- Footer -->
			<?php include 'includes/footer.php'; ?>
			 <!-- end footer -->

			<div id="back-to-top">
				<a href="#top"><i class="ui-arrow-up"></i></a>
			</div>

		</div> <!-- end content wrapper -->
	</main> <!-- end main wrapper -->


	<!-- jQuery Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<!-- 
		1. Generate your key here - https://developers.google.com/maps/documentation/javascript/get-api-key
		2. Paste your key in the script below.
	-->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoQ3_zzRfW-hYspkwr5kvwCwLPGZsN4nw"></script> -->
	<script src="js/gmap3.min.js"></script>
	<script src="js/google-map.js"></script>
	<script src="js/scripts.js"></script>

</body>
</html>