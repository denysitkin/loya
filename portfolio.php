<?php

require_once('inc/connect.php');
require_once('inc/functions.php');

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="icon" href="img/favicon/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="img/favicon/favicon.png" sizes="128x128">
	<link rel="icon" href="img/favicon/favicon.ico" sizes="16x16 32x32 64x64 128x128" type="image/vnd.microsoft.icon">
	<!-- title -->
	<title>Our projects | Loya</title>
	<!-- css -->
	<link rel="stylesheet" href="css/null.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/portfolio.css">
	<!-- jQuery -->
	<script src="libs/jQuery.js"></script>
	<!-- Pictures grid -->
	<script src="libs/imagesloaded.pkgd.min.js"></script>
	<script src="libs/isotope.pkgd.min.js"></script>
	<script src="libs/packery-mode.pkgd.min.js"></script>
	<!-- Gsap -->
	<script src="libs/gsap.min.js"></script>
</head>
<body class="_lock">
	<div class="preloader">
		<div class="clock"></div>
	</div>
	<!-- page content -->
	<div class="wrapper">
		<div id="cursor"></div>
		<div id="aura"></div>
		<header class="header _anim-items _anim-fadeInTop" style="--delay: 0.4s;">
			<div class="header__container _container">
				<a href="/" class="header__logo">
					<img src="img/logo.svg">
				</a>
				<nav class="header-menu">
					<ul class="header-menu__list">
						<li class="header-menu__item">
							<a href="/" class="header-menu__link">Главная</a>
						</li>
						<li class="header-menu__item">
							<a href="about-us" class="header-menu__link">О нас</a>
						</li>
						<li class="header-menu__item">
							<a href="portfolio" class="header-menu__link">Портфолио</a>
						</li>
						<li class="header-menu__item">
							<a href="our-partners" class="header-menu__link">Наши партнёры</a>
						</li>
						<li class="header-menu__item">
							<a href="contacts" class="header-menu__link">Контакты</a>
						</li>
					</ul>
				</nav>
				<div class="header-socials">
					<div class="header-socials__item">
						<a href="#" class="header-socials__link">
							<img src="img/icons/vkontakte.svg">
						</a>
					</div>
					<div class="header-socials__item">
						<a href="#" class="header-socials__link">
							<img src="img/icons/facebook.svg">
						</a>
					</div>
					<div class="header-socials__item">
						<a href="#" class="header-socials__link">
							<img src="img/icons/twitter.svg">
						</a>
					</div>
				</div>
			</div>
		</header>
		<main class="page">
			<!-- welcome screen -->
			<section class="welcome">
				<div class="welcome__container _container">
					<div class="welcome__content">
						<div class="welcome__text-block">
							<h1 class="welcome__title _anim-items _anim-scaleIn" style="--delay: 0.8s;">Наши проекты</h1>
						</div>
					</div>
				</div>
				<div class="welcome__background _portfolio">
					<div class="welcome__fade" data-speed="0.6"></div>
					<div class="welcome__overlay"></div>
				</div>
			</section>
			<!-- portfolio screen -->
			<section class="our-projects">
				<div class="our-projects__container _container">
					<div class="our-projects__top caption-container">
						<div class="our-projects__title title title_border _anim-items _anim-fadeInBottom" style="--delay: 0.3s;">Наш дубляж вы можете услышать в</div>
					</div>
					<div class="our-projects__content">
						<?php $projects = get_projects_portfolio(); ?>
						<?php foreach($projects as $project): ?>
							<?php if($project["portfolio_visible"] == 1): ?>
								<div class="our-project _anim-items _anim-scaleIn" style="--delay: 0s;">
									<img src="img/projects/<?= $project["picture"] ?>">
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
		</main>
		<footer class="footer _anim-items _anim-fadeInTop" style="--delay: 0.2s;">
			<div class="footer__top">
				<div class="footer__container _container">
					<a href="/" class="footer__logo">
						<img src="img/logo.svg">
					</a>
					<nav class="header-menu">
						<ul class="header-menu__list">
							<li class="header-menu__item">
								<a href="/" class="header-menu__link">Главная</a>
							</li>
							<li class="header-menu__item">
								<a href="about-us" class="header-menu__link">О нас</a>
							</li>
							<li class="header-menu__item">
								<a href="portfolio" class="header-menu__link">Портфолио</a>
							</li>
						</ul>
						<ul class="header-menu__list">
							<li class="header-menu__item">
								<a href="our-partners" class="header-menu__link">Наши партнёры</a>
							</li>
							<li class="header-menu__item">
								<a href="contacts" class="header-menu__link">Контакты</a>
							</li>
						</ul>
					</nav>
					<div class="footer-contacts">
						<div class="footer-contacts__phone">
							<a href="tel:+380500001515" class="footer-contacts__item">+38 (050) 000-15-15</a>
							<a href="tel:+380666551520" class="footer-contacts__item">+38 (066) 655-15-20</a>
						</div>
						<div class="footer-contacts__email">
							<a href="mailto:loya@gmail.com" class="footer-contacts__item">loya@gmail.com</a>
						</div>
					</div>
					<div class="header-socials">
						<div class="header-socials__item">
							<a href="#" class="header-socials__link">
								<img src="img/icons/vkontakte.svg">
							</a>
						</div>
						<div class="header-socials__item">
							<a href="#" class="header-socials__link">
								<img src="img/icons/facebook.svg">
							</a>
						</div>
						<div class="header-socials__item">
							<a href="#" class="header-socials__link">
								<img src="img/icons/twitter.svg">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<div class="footer__container _container">
					<div class="footer__content">
						<div class="footer__copywrite">Loya &copy; 2022. Все права защищены.</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- scripts -->
	<script src="js/script.js"></script>
	<script src="js/portfolio.js"></script>
	<!-- Animation on Scroll -->
	<script src="libs/animOnScroll.js"></script>
</body>
</html>