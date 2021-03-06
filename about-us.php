<?php

require_once 'inc/connect.php';
require_once 'inc/functions.php';

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
	<title>About us | Loya</title>
	<!-- css -->
	<link rel="stylesheet" href="css/null.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/about-us.css">
	<!-- jQuery -->
	<script src="libs/jQuery.js"></script>
	<!-- Slick Slider -->
	<script src="libs/slick.min.js"></script>
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
							<h1 class="welcome__title _anim-items _anim-scaleIn" style="--delay: 0.8s;">О нас</h1>
						</div>
					</div>
				</div>
				<div class="welcome__background _about-us">
					<div class="welcome__fade" data-speed="0.6"></div>
					<div class="welcome__overlay"></div>
				</div>
			</section>
			<!-- about us screen -->
			<section class="about-us">
				<div class="about-us__container _container">
					<div class="about-us__content about-us__content_1">
						<div class="about-us__text-block">
							<h2 class="about-us__title _anim-items _anim-fadeInTop" style="--delay: 0.3s;">Кто мы?</h2>
							<p class="about-us__text text _anim-items _anim-fadeInLeft" style="--delay: 0.4s;">Loya - это студия, которая занимается профессиональным дубляжом сериалов и аниме с 2016 года.</p>
							<p class="about-us__text text _anim-items _anim-fadeInLeft" style="--delay: 0.5s;">Целых 6 лет мы радуем наших поклоников качественным дубляжом. Наш принцип - это искренние эмоции. К каждому проекту мы подходим ответственно и с душой всё для того, чтобы донести до каждого настоящие эмоции.</p>
						</div>
						<div class="about-us__picture picture _anim-items _anim-scaleIn" style="--delay: 0.6s;">
							<img src="img/picture_3.png">
						</div>
					</div>
					<div class="about-us__content about-us__content_2">
						<div class="about-us__picture picture _anim-items _anim-scaleIn" style="--delay: 0.3s;">
							<img src="img/picture_4.png">
						</div>
						<div class="about-us__text-block">
							<h2 class="about-us__title _anim-items _anim-fadeInTop" style="--delay: 0.4s;">Где вы нас слышали?</h2>
							<p class="about-us__text text _anim-items _anim-fadeInLeft" style="--delay: 0.5s;">Наши голоса одни из самых узнаваемых!</p>
							<p class="about-us__text text _anim-items _anim-fadeInLeft" style="--delay: 0.6s;">Вы могли нас услышать в таких сериалах, как: «Доктор Хаус», «Пищеблок», «Триггер», «Эйфория», «Конец ***ного мира», «Отбросы», «Академия смерти».</p>
							<p class="about-us__text text _anim-items _anim-fadeInLeft" style="--delay: 0.7s;">А так же аниме: «Атака Титанов», «Доктор Стоун», «Ковбой Бибоп», «Эхо террора», «Re:Zero», «Пламенный отряд», «Проза бродячих псов», «Чёрный Клевер».</p>
						</div>
					</div>
				</div>
			</section>
			<!-- our team -->
			<section class="our-team">
				<div class="our-team__container _container">
					<div class="our-team__top caption-container">
						<div class="our-team__title title _anim-items _anim-fadeInBottom" style="--delay: 0.2s;">Наши актёры дубляжа</div>
					</div>
					<div class="our-team__content">
						<div class="our-team__slider">
							<?php $artists = get_artist(); ?>
							<?php foreach($artists as $artist): ?>
								<?php if ($artist["animated"] == 0): ?>
									<div class="our-team-slide">
										<div class="our-team-slide__picture">
											<img src="img/our_team/members/<?= $artist["photo"] ?>">
										</div>
										<div class="our-team-slide__content">
											<div class="our-team-slide__name"><?= $artist["name"] ?></div>
											<div class="our-team-slide__characters">
												<div class="our-team-slide-character">
													<div class="our-team-slide-character__picture">
														<img src="img/our_team/characters/<?= $artist["character1_picture"] ?>">
													</div>
													<div class="our-team-slide-character__body">
														<div class="our-team-slide-character__name"><?= $artist["character1_name"] ?></div>
														<div class="our-team-slide-character__anime"><?= $artist["character1_anime"] ?></div>
													</div>
												</div>
												<div class="our-team-slide-character">
													<div class="our-team-slide-character__picture">
														<img src="img/our_team/characters/<?= $artist["character2_picture"] ?>">
													</div>
													<div class="our-team-slide-character__body">
														<div class="our-team-slide-character__name"><?= $artist["character2_name"] ?></div>
														<div class="our-team-slide-character__anime"><?= $artist["character2_anime"] ?></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php else: ?>
									<div class="our-team-slide">
										<div class="our-team-slide__picture _anim-items _anim-scaleIn" style="--delay: 0.5s;">
											<img src="img/our_team/members/<?= $artist["photo"] ?>">
										</div>
										<div class="our-team-slide__content">
											<div class="our-team-slide__name _anim-items _anim-scaleIn" style="--delay: 0.55s;"><?= $artist["name"] ?></div>
											<div class="our-team-slide__characters">
												<div class="our-team-slide-character">
													<div class="our-team-slide-character__picture _anim-items _anim-scaleIn" style="--delay: 0.6s;">
														<img src="img/our_team/characters/<?= $artist["character1_picture"] ?>">
													</div>
													<div class="our-team-slide-character__body">
														<div class="our-team-slide-character__name _anim-items _anim-fadeInRight" style="--delay: 0.65s;"><?= $artist["character1_name"] ?></div>
														<div class="our-team-slide-character__anime _anim-items _anim-fadeInRight" style="--delay: 0.7s;"><?= $artist["character1_anime"] ?></div>
													</div>
												</div>
												<div class="our-team-slide-character">
													<div class="our-team-slide-character__picture _anim-items _anim-scaleIn" style="--delay: 0.75s;">
														<img src="img/our_team/characters/<?= $artist["character2_picture"] ?>">
													</div>
													<div class="our-team-slide-character__body">
														<div class="our-team-slide-character__name _anim-items _anim-fadeInRight" style="--delay: 0.8s;"><?= $artist["character2_name"] ?></div>
														<div class="our-team-slide-character__anime _anim-items _anim-fadeInRight" style="--delay: 0.85s;"><?= $artist["character2_anime"] ?></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
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
	<script src="js/about-us.js"></script>
	<script src="js/script.js"></script>
	<!-- Animation on Scroll -->
	<script src="libs/animOnScroll.js"></script>
</body>
</html>