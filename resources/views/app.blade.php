<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<title>The Drive Lab</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="TemplatesJungle">
	<meta name="keywords" content="Free HTML Template">
	<meta name="description" content="Free HTML Template">


	<link rel="stylesheet" type="text/css" href="{{  asset('icomoon/icomoon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{  asset('css/vendor.css') }}" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap"
		rel="stylesheet">
</head>

<body>

	<div class="preloader"></div>

	<div class="nav nav-overlay">
		<div class="nav__content">
			<div class="container">
				<div class="row p-4 p-md-0 flex-column-reverse flex-md-row g-md-5 nav__block">
					<div class="col-md-5">
						<ul class="nav__list d-none d-md-block">
							<li class="nav__list-item active-nav"><a href="index.html" class="hover-target">Home</a>
							</li>
							<li class="nav__list-item"><a href="index.html" class="hover-target">Onepage</a></li>
							<li class="nav__list-item"><a href="index.html" class="hover-target">Styles</a></li>
							<li class="nav__list-item"><a href="index.html" class="hover-target">Blog</a></li>
							<li class="nav__list-item"><a href="single-post.html" class="hover-target">Single Post</a>
							</li>
							<li class="nav__list-item"><a href="contact.html" class="hover-target">Contact us</a></li>
						</ul>
					</div>
					<div class="col-md-4 text-white">
						<h3 class="text-white fw-bold nav__block-item">Contact info</h3>
						<ul class="list-unstyled text-light nav__block-item">
							<li class="menu-item">
								<i class="icon icon-location me-2"></i>38878 Rimbo Kedui, Seluma Selatan
							</li>
							<li class="menu-item">
								<i class="icon icon-location2 me-2"></i>38227 Kebun Tebeng, Bengkulu
							</li>
							<li class="menu-item">
								<i class="icon icon-phone me-2"></i>+62 8011 5532
							</li>
							<li class="menu-item">
								<i class="icon icon-envelope-o me-2"></i><a href="#"
									class="text-white">contact@TheDriveLab.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 text-white">
						<h3 class="text-white fw-bold nav__block-item">Pages</h3>
						<ul class="list-unstyled nav__block-item">
							<li><a href="index.html" class="text-white">Onepage </a></li>
							<li><a href="index.html" class="text-white">Styles </a></li>
							<li><a href="index.html" class="text-white">Blog </a></li>
							<li><a href="index.html" class="text-white">Single Post </a></li>
							<li><a href="index.html" class="text-white">Contact us </a></li>
							<li><a href="index.html" class="text-white">About Us </a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="side-nav-bar">
		<input id="menu-toggle" type="checkbox" />
		<label class="menu-btn" for="menu-toggle">
			<span></span>
		</label>
	</div>

    @yield('content')
	@yield('about')
	<section id="about" class="scrollspy-section padding-xlarge">
		<div class="container">
			<div class="row">

				<div class="col-md-12">

					<div class="section-header">
						<div class="title">
							<span>The Drive Lab</span>
						</div>
						<h2 class="section-title">The Drive Lab</h2>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-md-6">
					<figure class="jarallax-keep-img">
						<img src="images/mobil2.png" alt="about us" class="jarallax-img single-image">
					</figure>
				</div>
				<div class="col-md-6 description text-lead">
					<p><strong>Di The Drive Lab, kami percaya bahwa memilih mobil yang tepat bukan hanya tentang spesifikasi, tetapi juga tentang pengalaman dan kebutuhan pribadi. Sebagai portal otomotif terdepan, kami menyediakan ulasan mendalam, perbandingan obyektif, serta rekomendasi yang dirancang untuk membantu setiap pengunjung menemukan mobil impian mereka. <br><br> Dengan tim ahli yang berpengalaman dan akses ke informasi terkini dalam dunia otomotif, The Drive Lab hadir sebagai panduan lengkap bagi siapa pun yang ingin membeli, menyesuaikan, atau sekadar mengeksplorasi dunia mobil. Terhubunglah dengan kami dan jelajahi perjalanan Anda menuju mobil terbaik bersama The Drive Lab!</p></br></br>

					<div class="btn-wrap">
						<a href="#" class="btn btn-accent btn-xlarge btn-rounded">View my portfolio</a>
					</div>

				</div>

			</div>

		</div>
	</section>
	@yield('contact')
	<section id="contact" class="scrollspy-section bg-dark padding-large">
		<div class="container">

			<div class="row">
				<div class="col-md-6">

					<div class="left-content">

						<div class="section-header">
							<div class="title">
								<span>The Drive Lab</span>
							</div>
							<h2 class="section-title light">Hubungi Kami</h2>
						</div>

						<p>Jika Anda memiliki pertanyaan tentang produk kami? Hubungi Kami.</p>

						<form id="form-contact" class="form-light" action="contact.php">
							<p>
								<input type="text" name="name" placeholder="Nama*" required>
							</p>
							<p>
								<input type="text" name="email" placeholder="Alamat Email" required>
							</p>
							<p>
								<textarea name="message" placeholder="Pesan Anda" required></textarea>
							</p>
							<p>
								<label for="agree">
									<input id="agree" name="agree" type="checkbox" required></input>
									<span>I agree to privacy policy</span>
								</label>
							</p>
							<button class="btn btn-accent btn-rounded btn-xlarge btn-full">Submit</button>
						</form>


					</div>

				</div><!--left-content-->

				<div class="col-md-6">
					<div class="right-content">

						<div class="iconbox">
							<i class="icon icon-location"></i>
							<div class="detail">
								<strong>Alamat:</strong>
								<p>Ds.Rimbo Kedui, Kec.Seluma Selatan, Kab. Seluma. Prov.Bengkulu</p>
							</div>
						</div>
						<div class="iconbox">
							<i class="icon icon-phone"></i>
							<div class="detail">
								<strong>Telepon:</strong>
								<p>+62 8011 5532</p>
							</div>
						</div>
						<div class="iconbox">
							<i class="icon icon-mail3"></i>
							<div class="detail">
								<strong>Email:</strong>
								<p><a href="#">contact@TheDriveLab.com</a></p>
							</div>
						</div>

					</div>
				</div><!--right-content-->

			</div>

		</div>
	</section>
	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-3">

					<div class="footer-menu menu-item-01">
						<img src="images/mobil3.png" alt="logo" class="footer-logo">
						<p>The Drive Lab</p>
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-md-2">

					<div class="footer-menu menu-item-02">
						<h5>quick links</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">home</a>
							</li>
							<li class="menu-item">
								<a href="#">about us </a>
							</li>
							<li class="menu-item">
								<a href="#">services</a>
							</li>
							<li class="menu-item">
								<a href="#">portfolios</a>
							</li>
							<li class="menu-item">
								<a href="#">blogs</a>
							</li>
							<li class="menu-item">
								<a href="#">contact us</a>
							</li>
						</ul>
					</div>

				</div>

				<div class="col-md-4">

					<div class="footer-menu menu-item-03">
						<h5>contact info</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<i class="icon icon-location"></i>Ds.Rimbo Kedui, Kec.Seluma Selatan, Kab. Seluma. Prov.Bengkulu
							</li>

							<li class="menu-item">
								<i class="icon icon-phone"></i>+62 8011 5532
							</li>
							<li class="menu-item">
								<i class="icon icon-envelope-o"></i><a href="#" class="mail-id">contact@TheDriveLab.com</a>
							</li>
						</ul>
					</div>

				</div>

				<div class="col-md-3">

					<div class="footer-menu menu-item-04">
						<h5>gallery</h5>
						<div class="gallery">
							<a href="images/mobil3.png" data-lightbox-gallery="gallery1"
								title="Calm Before The Storm (One Shoe Photography Ltd.)" class="image-link"><img
									src="images/mobil3.png" alt="house" class="gallery-image"></a>
							<a href="images/mobil4.png" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/mobil4.png" alt="house" class="gallery-image"></a>

						</div>
					</div>

				</div>

			</div>
		</div>
	</footer>



	<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
	<script src="{{ asset('js/ui-easing.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>

</body>

</html>
