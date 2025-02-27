<?php
	
	require_once("Model/RoadSymbol.php");
	$road_symbol = new RoadSymbol();
	$arr = $road_symbol->selectJoin();
	//print_r($arr);

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="Index_CSS/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Road Symbol Voice Alert System</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="Index_CSS/css/linearicons.css">
		<link rel="stylesheet" href="Index_CSS/css/owl.carousel.css">
		<link rel="stylesheet" href="Index_CSS/css/font-awesome.min.css">
		<link rel="stylesheet" href="Index_CSS/css/animate.css">
		<link rel="stylesheet" href="Index_CSS/css/bootstrap.css">
		<link rel="stylesheet" href="Index_CSS/css/main.css">
	</head>
	<body>
		<div id="top"></div>
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="sticky-header">
				<div class="container">
					<div class="header-content d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="#top" class="smooth"><img src="img/logo.png" alt=""></a>
						</div>
						<div class="right-bar d-flex align-items-center">
							<nav class="d-flex align-items-center">
								<ul class="main-menu">
									<li><a href="#top">Home</a></li>
									<li><a href="#services">Services</a></li>
									<li><a href="#protfolio">Portfolio</a></li>
									<li><a href="#team">Team</a></li>
									<li><a href="#blog">Blog</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul>
								<a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>
							</nav>
							<div class="search relative">
								<span class="lnr lnr-magnifier"></span>
								<form action="#" class="search-field">
									<input type="text" placeholder="Search here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search here'">
									<button class="search-submit"><span class="lnr lnr-magnifier"></span></button>
								</form>
							</div>
							<div class="header-social d-flex align-items-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
		<!-- Start Banner Area -->
		<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen justify-content-center align-items-center">
					<div class="col-lg-8">
						<div class="banner-content text-center">
							<p class="text-uppercase text-white">We Build the real Value, we work hard, we result perfect</p>
							<h1 class="text-uppercase text-white">Road Symbol Voice Alert System</h1>
							<a href="login.php" class="primary-btn banner-btn">Explore Us</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->
		<!-- Start About Area -->
		<section class="section-full gray-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-title text-center">
							<p class="text-uppercase">About Our Digital Agency</p>
							<h3>Plantronics with its GN Netcom <b>wireless headset</b> creates the next generation of wireless headset and other products such as wireless amplifiers, and <b>wireless headset</b> telephone.</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<figure class="signle-service">
							<img src="Index_CSS/img/s1.jpg" class="img-fluid" alt="">
							<figcaption class="text-center">
								<h5 class="text-uppercase">Addiction Whit Gambling</h5>
								<p>It is a good idea to think of your PC as an office. It stores files, programs, pictures. This can be compared to an actual office’s files</p>
								<a href="#" class="primary-btn d-inline-flex align-items-center">Explore<span class="lnr lnr-arrow-right"></span></a>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-4">
						<figure class="signle-service">
							<img src="Index_CSS/img/s2.jpg" class="img-fluid" alt="">
							<figcaption class="text-center">
								<h5 class="text-uppercase">Headset No Longer Wired</h5>
								<p>If you are in the market for a computer, there are a number of factors to consider. Will it be used for your home, your office or perhaps </p>
								<a href="#" class="primary-btn d-inline-flex align-items-center">Explore<span class="lnr lnr-arrow-right"></span></a>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-4">
						<figure class="signle-service">
							<img src="Index_CSS/img/s3.jpg" class="img-fluid" alt="">
							<figcaption class="text-center">
								<h5 class="text-uppercase">Life Advice Looking At Window</h5>
								<p>Having a baby can be a nerve wrackingexp erience for new parents – not the nine months of pregnancy, I’m talking</p>
								<a href="#" class="primary-btn d-inline-flex align-items-center">Explore<span class="lnr lnr-arrow-right"></span></a>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Area -->
		<!-- Start Product Area -->
		<section id="services" class="title-bg section-full">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="product-area-title text-center">
							<p class="text-white text-uppercase">Why Choose Us</p>
							<h2 class="text-white h1">We ensure perfect quality Digital <br> products for you</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-product">
							<div class="icon">
								<span class="lnr lnr-star"></span>
							</div>
							<div class="desc">
								<h4>Unique Design</h4>
								<p>Most people who work in an office environment, buy computer products, or have </p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-product">
							<div class="icon">
								<span class="lnr lnr-magic-wand"></span>
							</div>
							<div class="desc">
								<h4>Appropriate UX</h4>
								<p>Today, many people rely on computers to do homework, work, and create or store useful</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-product">
							<div class="icon">
								<span class="lnr lnr-sun"></span>
							</div>
							<div class="desc">
								<h4>Perfect Visual</h4>
								<p>Having a baby can be a nerve wracking experience for new parents – not the nine months </p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-product">
							<div class="icon">
								<span class="lnr lnr-layers"></span>
							</div>
							<div class="desc">
								<h4>Different Layout</h4>
								<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Product Area -->
		<!-- Start Progress Bar Area -->
		<div class="container pt-150">
			<div class="row">
				<div class="col-lg-3 col-sm-6 d-flex justify-content-center">
					<div class="list text-center">
						<div class="list-item">
							<div class="progressBar progressBar--animateNone" data-progress="80">
								<svg class="progressBar-contentCircle"  viewBox="0 0 200 200">
									<circle transform="rotate(-90, 100, 100)" class="progressBar-background" cx="100" cy="100" r="95" />
									<circle transform="rotate(-90, 100, 100)" class="progressBar-circle" cx="100" cy="100" r="95" />
								</svg>
								<span class="progressBar-percentage progressBar-percentage-count"></span>
							</div>
						</div>
						<p class="text-uppercase">Web Design</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 d-flex justify-content-center">
					<div class="list text-center">
						<div class="list-item">
							<div class="progressBar progressBar--animateText" data-progress="75">
								<svg class="progressBar-contentCircle"  viewBox="0 0 200 200">
									<circle transform="rotate(-90, 100, 100)" class="progressBar-background" cx="100" cy="100" r="95" />
									<circle transform="rotate(-90, 100, 100)" class="progressBar-circle" cx="100" cy="100" r="95" />
								</svg>
								<span class="progressBar-percentage progressBar-percentage-count"></span>
							</div>
						</div>
						<p class="text-uppercase">UI/UX Design</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 d-flex justify-content-center">
					<div class="list text-center">
						<div class="list-item">
							<div class="progressBar progressBar--animateCircle" data-progress="60">
								<svg class="progressBar-contentCircle"  viewBox="0 0 200 200">
									<circle transform="rotate(-90, 100, 100)" class="progressBar-background" cx="100" cy="100" r="95" />
									<circle transform="rotate(-90, 100, 100)" class="progressBar-circle" cx="100" cy="100" r="95" />
								</svg>
								<span class="progressBar-percentage progressBar-percentage-count"></span>
							</div>
						</div>
						<p class="text-uppercase">Mobile App</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 d-flex justify-content-center">
					<div class="list text-center">
						<div class="list-item">
							<div class="progressBar progressBar--animateAll" data-progress="90">
								<svg class="progressBar-contentCircle"  viewBox="0 0 200 200">
									<!-- on défini le l'angle et le centre de rotation du cercle -->
									<circle transform="rotate(-90, 100, 100)" class="progressBar-background" cx="100" cy="100" r="95" />
									<circle transform="rotate(-90, 100, 100)" class="progressBar-circle" cx="100" cy="100" r="95" />
								</svg>
								<span class="progressBar-percentage progressBar-percentage-count"></span>
							</div>
						</div>
						<p class="text-uppercase">Web Development</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Progress Bar Area -->
		<!-- Start shuffle Area -->
		<section id="protfolio" class="section-full">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="product-area-title text-center">
							<p class="text-uppercase">Remarkable Works</p>
							<h2 class="h1">We have gained reliability <br> to serve you best</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="controls d-flex flex-wrap justify-content-center">
					<a class="filter active" data-filter="all">All</a>
					<a class="filter" data-filter=".category-1">Mandatory Signs</a>
					<a class="filter" data-filter=".category-2">Cautionary Signs</a>
					<a class="filter" data-filter=".category-3">Information Signs</a>
					<a class="filter" data-filter=".category-4">Additional Signs</a>
					
				</div>
			</div>



			<div id="filter-content" class="row no-gutters mt-70">


			<?php	foreach ($arr as $row)
					{  $x = 1;?>

				<div style="background: url(Index_CSS/symbol/<?php echo $row['road_symbol_image'].".jpg"; ?>) no-repeat center center/cover;" class="mix category-<?php echo $row['fk_category_id']; ?> col-lg-3 col-md-4 col-sm-6 single-filter-content content-<?php echo $x; ?>" data-myorder="1">
					<div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
						<p class="text-white"><?php echo $row['category_name']; ?></p>
						<div class="line"></div>
						<h5 class="text-white text-uppercase"><?php echo $row['road_symbol_name']; ?></h5>
					</div>
				</div>

				
			<?php $x++;} ?>


				<!--<div  class="mix category-1  col-lg-3 col-md-4 col-sm-6 single-filter-content content-2" data-myorder="2">
					<div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
						<p class="text-white">Image Manipulation</p>
						<div class="line"></div>
						<h5 class="text-white text-uppercase">Creative Tangerine</h5>
					</div>
				</div>
				<div class="mix category-1  col-lg-3 col-md-4 col-sm-6 single-filter-content content-3" data-myorder="3">
					<div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
						<p class="text-white">Image Manipulation</p>
						<div class="line"></div>
						<h5 class="text-white text-uppercase">Creative Tangerine</h5>
					</div>
				</div>
				<div class="mix category-2  col-lg-3 col-md-4 col-sm-6 single-filter-content content-4" data-myorder="4">
					<div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
						<p class="text-white">Image Manipulation</p>
						<div class="line"></div>
						<h5 class="text-white text-uppercase">Creative Tangerine</h5>
					</div>
				</div>
				<div class="mix category-1  col-lg-3 col-md-4 col-sm-6 single-filter-content content-5" data-myorder="5">
					<div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
						<p class="text-white">Image Manipulation</p>
						<div class="line"></div>
						<h5 class="text-white text-uppercase">Creative Tangerine</h5>
					</div>
				</div>
				<div class="mix category-1  col-lg-3 col-md-4 col-sm-6 single-filter-content content-6" data-myorder="6">
					<div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
						<p class="text-white">Image Manipulation</p>
						<div class="line"></div>
						<h5 class="text-white text-uppercase">Creative Tangerine</h5>
					</div>
				</div>
				<div class="mix category-2  col-lg-3 col-md-4 col-sm-6 single-filter-content content-7" data-myorder="7">
					<div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
						<p class="text-white">Image Manipulation</p>
						<div class="line"></div>
						<h5 class="text-white text-uppercase">Creative </h5>
					</div>
				</div>
				<div class="mix category-2  col-lg-3 col-md-4 col-sm-6 single-filter-content content-8" data-myorder="8">
					<div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
						<p class="text-white">Image Manipulation</p>
						<div class="line"></div>
						<h5 class="text-white text-uppercase">Creative Tangerine</h5>
					</div>
				</div>-->
			</div>
		</section>
		<!-- End shuffle Area -->
		<!-- Start Team member Area -->
		<section id="team" class="pb-150">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="product-area-title text-center">
							<p class="text-uppercase">Creative People</p>
							<h2 class="h1">Team work builds trust and <br> trust builds growth</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-member">
							<div class="thumb relative" style="background: url(Index_CSS/img/t1.jpg);">
								<div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
									<p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
									<div class="line"></div>
									<div class="social d-flex align-items-center justify-content-center">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="desc text-center">
								<h5 class="text-uppercase"><a href="#">Ethel Davis</a></h5>
								<p>Managing Director (Sales)</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-member">
							<div class="thumb relative" style="background: url(Index_CSS/img/t2.jpg);">
								<div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
									<p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
									<div class="line"></div>
									<div class="social d-flex align-items-center justify-content-center">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="desc text-center">
								<h5 class="text-uppercase"><a href="#">Rodney Cooper</a></h5>
								<p>Creative Art Director</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-member">
							<div class="thumb relative" style="background: url(Index_CSS/img/t3.jpg);">
								<div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
									<p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
									<div class="line"></div>
									<div class="social d-flex align-items-center justify-content-center">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="desc text-center">
								<h5 class="text-uppercase"><a href="#">Dora Walker</a></h5>
								<p>Senior Core Developer</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-member">
							<div class="thumb relative" style="background: url(Index_CSS/img/t4.jpg);">
								<div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
									<p class="text-white">This article is floated online with an aim to help you find the best dvd printing solution. Dvd</p>
									<div class="line"></div>
									<div class="social d-flex align-items-center justify-content-center">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="desc text-center">
								<h5 class="text-uppercase"><a href="#">Lena Keller</a></h5>
								<p>Creative Content Developer</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team member Area -->

		<!-- Start Digital Studio -->
		<section class="section-full studio-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="studio-content">
							<p class="text-uppercase text-white">We create top class designs</p>
							<h2 class="h1 text-white text-uppercase mb-20">A Digital Studio Crafting <br> Tech Business</h2>
							<p class="text-white mb-30">Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical interface of the versions, therefore it has remained Microsoft’s product. Although, Lycoris, Red Hat, Mandrake,</p>
							<a href="#" class="primary-btn text-white d-inline-flex align-items-center">Start Business<span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Digital Studio -->

		<!-- Start Testimonial Area -->
		<section class="section-full gray-bg">
			<div class="container">
				<div class="active-testimonial-carousel">
					<div class="single-testimonial">
						<img src="Index_CSS/img/ts1.png" class="img-circle" alt="">
						<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory </p>
						<div class="author text-center">
							<h6 class="text-uppercase"><a href="#">Mark Alviro Wiens</a></h6>
							<span>CEO at Google</span>
						</div>
					</div>
					<div class="single-testimonial">
						<img src="Index_CSS/img/ts2.png" class="img-circle" alt="">
						<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory </p>
						<div class="author text-center">
							<h6 class="text-uppercase"><a href="#">Mark Alviro Wiens</a></h6>
							<span>CEO at Google</span>
						</div>
					</div>
					<div class="single-testimonial">
						<img src="Index_CSS/img/ts3.png" class="img-circle" alt="">
						<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory </p>
						<div class="author text-center">
							<h6 class="text-uppercase"><a href="#">Mark Alviro Wiens</a></h6>
							<span>CEO at Google</span>
						</div>
					</div>
					<div class="single-testimonial">
						<img src="Index_CSS/img/ts3.png" class="img-circle" alt="">
						<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory </p>
						<div class="author text-center">
							<h6 class="text-uppercase"><a href="#">Mark Alviro Wiens</a></h6>
							<span>CEO at Google</span>
						</div>
					</div>
					<div class="single-testimonial">
						<img src="Index_CSS/img/ts3.png" class="img-circle" alt="">
						<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory </p>
						<div class="author text-center">
							<h6 class="text-uppercase"><a href="#">Mark Alviro Wiens</a></h6>
							<span>CEO at Google</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonial Area -->
		<!-- Start Publish Area -->
		<section id="blog" class="section-full">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="product-area-title text-center">
							<p class="text-uppercase">Latest From Blog</p>
							<h2 class="h1">Publish what you want to <br> not requires social</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-publish">
							<img src="Index_CSS/img/p1.jpg" class="img-fluid" alt="">
							<div class="top">
								<div class="mb-15 d-flex">
									<a href="#">25 October, 2017</a>
									<span class="line">|</span>
									<a href="#">By Mark Wiens</a>
								</div>
								<h6 class="text-uppercase"><a href="#">Addiction When Gambling Becomes A Problem</a></h6>
							</div>
							<p class="mb-30">Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their </p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-publish">
							<img src="Index_CSS/img/p2.jpg" class="img-fluid" alt="">
							<div class="top">
								<div class="mb-15 d-flex">
									<a href="#">25 October, 2017</a>
									<span class="line">|</span>
									<a href="#">By Mark Wiens</a>
								</div>
								<h6 class="text-uppercase"><a href="#">Computer Hardware Desktops And Notebooks </a></h6>
							</div>
							<p class="mb-30">Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons. </p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-publish">
							<img src="Index_CSS/img/p3.jpg" class="img-fluid" alt="">
							<div class="top">
								<div class="mb-15 d-flex">
									<a href="#">25 October, 2017</a>
									<span class="line">|</span>
									<a href="#">By Mark Wiens</a>
								</div>
								<h6 class="text-uppercase"><a href="#">Make Myspace Your Best Designed Space</a></h6>
							</div>
							<p class="mb-30">Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless </p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-publish">
							<img src="Index_CSS/img/p4.jpg" class="img-fluid" alt="">
							<div class="top">
								<div class="mb-15 d-flex">
									<a href="#">25 October, 2017</a>
									<span class="line">|</span>
									<a href="#">By Mark Wiens</a>
								</div>
								<h6 class="text-uppercase"><a href="#">Video Games Playing With Imagination</a></h6>
							</div>
							<p class="mb-30">About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet </p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Publish Area -->
		<!-- Start Contact Area -->
		<section id="contact" class="section-full gray-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="product-area-title text-center">
							<p class="text-uppercase">Latest From Blog</p>
							<h2 class="h1">Publish what you want to <br> not requires social</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mt-30">
						<p>Dramatically reintermediate effective applications after high-payoff core competencies. Authoritatively optimize collaborative benefits for error-free communities. Dramatically reintermediate effective applications after high-payoff core competencies. Authoritatively optimize collaborative benefits for error-free communities.</p>
						<div class="row">
							<div class="col-sm-6">
								<div class="address mt-20">
									<h6 class="text-uppercase mb-15">Physical Address</h6>
									<p>Emperor Publishing,<br> 56/8, bir uttam qazi nuruzzaman <br> road, Dhaka - 1205</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="address mt-20">
									<h6 class="text-uppercase mb-15">WEb Contact</h6>
									<a href="tel:0000">012 (88) 017 25 656 565</a> <br>
									<a href="tel:0000">012 (88) 017 25 656 565</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mt-30">
						<form id="myForm" action="mail.php" method="post" class="contact-form">
							<div class="single-input color-2 mb-10">
								<input type="text" name="fname" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required>
							</div>
							<div class="single-input color-2 mb-10">
								<input type="email" name="email" placeholder="Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required>
							</div>
							<div class="single-input color-2 mb-10">
								<input type="text" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" required>
							</div>

							<div class="single-input color-2 mb-10">
								<textarea name="message" placeholder="Type your message here..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type your message here...'" required></textarea>
							</div>
							<div class="d-flex justify-content-end"><button class="mt-10 primary-btn d-inline-flex text-uppercase align-items-center">Send Message<span class="lnr lnr-arrow-right"></span></button></div>
							<div class="alert"></div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->
		<!-- Start Cta Area -->
		<section class="cta-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 d-flex no-flex-xs justify-content-between align-items-center">
						<h5 class="text-uppercase text-white">Not yet convinced with our quality?</h5>
						<a href="#" class="primary-btn d-inline-flex text-uppercase text-white align-items-center">Explore Services<span class="lnr lnr-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Cta Area -->
		<footer class="section-full">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">About Agency</h6>
							<p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Navigation Links</h6>
							<div class="d-flex">
								<ul class="footer-nav">
									<li><a href="#">Home</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Portfolio</a></li>
								</ul>
								<ul class="ml-30 footer-nav">
									<li><a href="#">Team</a></li>
									<li><a href="#">Pricing</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Newsletter</h6>
							<p>For business professionals caught between high OEM price and mediocre print and graphic output,</p>
							<div id="mc_embed_signup">
								<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative d-flex justify-content-center">
									<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
									<div style="position: absolute; left: -5000px;">
										<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
									</div>
									<button type="submit" class="newsletter-btn" name="subscribe"><span class="lnr lnr-location"></span></button>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Instafeed</h6>
							<ul class="instafeed d-flex flex-wrap">
								<li><img src="Index_CSS/img/i1.jpg" alt=""></li>
								<li><img src="Index_CSS/img/i2.jpg" alt=""></li>
								<li><img src="Index_CSS/img/i3.jpg" alt=""></li>
								<li><img src="Index_CSS/img/i4.jpg" alt=""></li>
								<li><img src="Index_CSS/img/i5.jpg" alt=""></li>
								<li><img src="Index_CSS/img/i6.jpg" alt=""></li>
								<li><img src="Index_CSS/img/i7.jpg" alt=""></li>
								<li><img src="Index_CSS/img/i8.jpg" alt=""></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-bottom d-flex justify-content-between align-items-center">
					<p class="footer-text m-0">Copyright &copy; 2017  |  All rights reserved to <a href="#">Datarc inc.</a> Designed by <a href="https://colorlib.com/wp">Colorlib</a>.</p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>

		<script src="Index_CSS/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="Index_CSS/js/vendor/bootstrap.min.js"></script>
		<script src="Index_CSS/js/jquery.ajaxchimp.min.js"></script>
		<script src="Index_CSS/js/jquery.sticky.js"></script>
		<script src="Index_CSS/js/owl.carousel.min.js"></script>
		<script src="Index_CSS/js/mixitup.min.js"></script>
		<script src="Index_CSS/js/main.js"></script>
	</body>
</html>
