<!DOCTYPE html>
<html lang="en">
<head>
	<title>Test | Blog</title>

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
		<?php include 'includes/header.php';?>
		 <!-- end navigation -->


		<div class="content-wrapper content-wrapper--boxed oh">

      <!-- Page Title -->
      <section class="page-title bg-dark-overlay text-center" style="background-image: url(img/page-title/contact-breadcrumbs.jpg);">
        <div class="container">
          <div class="page-title__holder">
            <h1 class="page-title__title">Blog</h1>
            <ul class="breadcrumbs">
              <li class="breadcrumbs__item">
                <a href="index.php" class="breadcrumbs__url">Home</a>
              </li>
              <li class="breadcrumbs__item breadcrumbs__item--current">
                Blog
              </li>
            </ul>
          </div>
        </div>
      </section> 
      <!-- end page title -->

      <!-- Blog -->
      <section class="section-wrap">
        <div class="container">

          <article class="entry">
            <div class="entry__img-holder">
              <a href="#">
                <img src="img/blog/plan1.jpg" class="entry__img" alt="">
              </a>
            </div>
            <div class="entry__body text-center">
              <ul class="entry__meta">
                <li class="entry__meta-date">
                  <span>13 June 2018</span>
                </li>
                <li class="entry__meta-author">
                  <a href="#">DeoThemes</a>
                </li>
                <li class="entry__meta-category">
                  <a href="#">Marketing</a>
                </li>
              </ul>
              <h2 class="entry__title">
                <a href="#">Glass House is big on efficiency, not so big on privacy.</a>
              </h2>
              <div class="entry__excerpt">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
              </div>
              <a href="#" class="read-more">
                <span class="read-more__text">Read More</span>
                <i class="ui-arrow-right read-more__icon"></i>
              </a>
            </div>
          </article>

          <article class="entry">
            <div class="entry__img-holder">
              <a href="#">
                <img src="img/blog/plan2.jpg" class="entry__img" alt="">
              </a>
            </div>
            <div class="entry__body text-center">
              <ul class="entry__meta">
                <li class="entry__meta-date">
                  <span>13 June 2018</span>
                </li>
                <li class="entry__meta-author">
                  <a href="#">DeoThemes</a>
                </li>
                <li class="entry__meta-category">
                  <a href="#">Marketing</a>
                </li>
              </ul>
              <h2 class="entry__title">
                <a href="#">Rome may not have been built in a day, but this shipping container media lab was.</a>
              </h2>
              <div class="entry__excerpt">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
              </div>
              <a href="#" class="read-more">
                <span class="read-more__text">Read More</span>
                <i class="ui-arrow-right read-more__icon"></i>
              </a>
            </div>
          </article>


          <!-- Pagination -->
          <nav class="pagination">
            <span aria-current="page" class="page-numbers current">1</span>
            <a href="#" class="page-numbers">2</a>
            <a href="#" class="page-numbers">3</a>
            <a href="#" class="page-numbers">4</a>
            <a href="#" class="next page-numbers"><i class="ui-arrow-right"></i></a>
          </nav>

        </div>
      </section> <!-- end blog -->


			<!-- Footer -->
			<?php include 'includes/footer.php' ?>
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
	<script src="js/scripts.js"></script>

</body>
</html>