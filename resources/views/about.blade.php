 <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>True Church</title>

		<!-- Loading third party fonts -->
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		<div class="site-content">
			<header class="site-header">
				<div class="container">
					<a href="#" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<h1 class="site-title">True Church</h1>
					</a>

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item "><a href="{{url('/home')}}">Homepage <small>Lorem ipsum</small></a></li>
							<li class="menu-item"><a href="{{url('/pastor')}}">Pastors <small>Cupidatat non proident</small></a></li>
							<li class="menu-item"><a href="{{ url('/sermon')}}">Sermons <small>Laboris nisi aliquip</small></a></li>
							<li class="menu-item"><a href="{{ url('/events')}}">Events <small>Sunt in culpa</small></a></li>
							<li class="menu-item current-menu-item"><a href="{{ url('/about') }}">About<small>Aute irure</small></a></li>
							<li class="menu-item"><a href="{{url('/contact')}}">Contact <small>lorem ipsum</small></a></li>
						</ul>
					</div>

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

            <main>
                <section class="about-us">
                    <h2>About Us</h2>
                    <p>
                      Write a compelling description about your church, its mission, values, and what makes it unique.
                      Highlight your ministries, activities, and how the church serves the community.
                    </p>
                  </section>

                  <section class="social-media">
                    <h2>Connect With Us</h2>
                    <ul>
                      <li><a href="https://www.instagram.com/your_church_instagram/"><i class="fab fa-instagram"></i> Instagram</a></li>
                      <li><a href="https://www.facebook.com/your_church_facebook/"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                      <li><a href="https://wa.me/your_church_whatsapp_number"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
                      </ul>
                  </section>
                </main>


			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Our address</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi perspiciatis magnam, ab ipsa laboriosam tempore tenetur, aliquid repellat, ex cum dicta reiciendis accusamus. Omnis repudiandae quasi mollitia, iusto odio dignissimos.</p>
								<ul class="address">
									<li><i class="fa fa-map-marker"></i> 329 Church St, Garland, TX 75042</li>
									<li><i class="fa fa-phone"></i> (425) 853 442 552</li>
									<li><i class="fa fa-envelope"></i> info@yourchurch.com</li>
								</ul>
							</div>
						</div>


					</div> <!-- .row -->

					<p class="colophon">Copyright 2014 True Church. All right reserved</p>
				</div><!-- .container -->
			</footer> <!-- .site-footer -->

		</div>


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
