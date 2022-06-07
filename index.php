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
	<title>Home | Loya</title>
	<!-- css -->
	<link rel="stylesheet" href="css/null.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/home.css">
	<!-- jQuery -->
	<script src="libs/jQuery.js"></script>
	<!-- Slick Slider -->
	<script src="libs/slick.min.js"></script>
	<!-- Inputmask -->
	<script src="libs/jquery.inputmask.bundle.min.js"></script>
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
			<section class="welcome _home">
				<div class="welcome__container _container">
					<div class="welcome__content">
						<div class="welcome__text-block">
							<h1 class="welcome__title _anim-items _anim-fadeInLeft" style="--delay: 0.5s;">Мы - Loya.</h1>
							<h2 class="welcome__subtitle _anim-items _anim-fadeInLeft" style="--delay: 0.6s;">Студия озвучания</h2>
							<p class="welcome__text text _anim-items _anim-fadeInLeft" style="--delay: 0.7s;">Наш голос можно услышать в таких популярных сериалах как «Киберсталкер», «Доктор Хаус», «Пищеблок», «Голяк» и многих других!</p>
						</div>
						<a href="#about-us" class="welcome__button button button_fill _anim-items _anim-scaleIn" style="--delay: 0.1s;">Подробнее</a>
					</div>
				</div>
				<div class="welcome__background">
					<div class="welcome__fade" data-speed="0.6"></div>
					<div class="welcome__overlay"></div>
				</div>
				<a href="#about-us" class="welcome__next _anim-items _anim-fadeInTop" style="--delay: 0.9s;">
					<img src="img/icons/arrow_down.svg">
				</a>
			</section>
			<!-- about us screen -->
			<section class="about-us" id="about-us">
				<div class="about-us__container _container">
					<div class="about-us__top caption-container">
						<div class="about-us__title title _anim-items _anim-fadeInBottom" style="--delay: 0.2s;">Пару слов</div>
						<div class="about-us__subtite subtitle _anim-items _anim-fadeInBottom" style="--delay: 0.3s;">о нас</div>
					</div>
					<div class="about-us__content">
						<div class="about-us__picture picture _anim-items _anim-scaleIn" style="--delay: 0.4s;">
							<img src="img/picture_1.png">
						</div>
						<div class="about-us__text-block">
							<p class="about-us__text text _anim-items _anim-fadeInLeft" style="--delay: 0.5s;">Наша студия радует поклонников профессионального дубляжа и озвучки с 2016 года. Наш путь начался с озвучивания малоизвестных сериалов, а на данный момент наши голоса вы можете услышать в одних из популярных сериалах!</p>
							<p class="about-us__text text _anim-items _anim-fadeInLeft" style="--delay: 0.6s;">Наши голоса одни из самых узнаваемых в нашем направлении. Мы работали с такими компаниями, как: Sony Entertainment, ufotable, Wit Studio и многими другими.</p>
							<p class="about-us__text text _anim-items _anim-fadeInLeft" style="--delay: 0.7s;">Наша команда состоит из 7 человек: 4 актёров озвучки мужских голосов и 3 актрис озвучки женских голосов. </p>
							<a href="about-us" class="about-us__button button button_border _anim-items _anim-scaleIn" style="--delay: 0.1s;">Больше о нас</a>
						</div>
					</div>
				</div>
			</section>
			<!-- our projects screen -->
			<section class="portfolio">
				<div class="portfolio__container _container">
					<div class="portfolio__top caption-container">
						<div class="portfolio__title title _anim-items _anim-fadeInBottom" style="--delay: 0.2s;">Наши проекты</div>
						<div class="portfolio__subtitle subtitle _anim-items _anim-fadeInBottom" style="--delay: 0.3s;">Портфолио</div>
					</div>
					<div class="portfolio__content">
						<div class="portfolio__slider">
							<?php $projects = get_projects(); ?>
							<?php foreach($projects as $project): ?>
								<?php if ($project["animated"] == 0): ?>
									<div class="portfolio-slide">
										<div class="portfolio-slide__picture">
											<img src="img/anime/<?= $project["alt_picture"] ?>">
										</div>
										<div class="portfolio-slide__content">
											<div class="portfolio-slide__title"><?= $project["name"] ?></div>
											<div class="portfolio-slide__info">
												<p class="portfolio-slide__info-item">Производитель: <span><?= $project["studio"] ?></span></p>
												<p class="portfolio-slide__info-item">Озвучка: <span><?= $project["type"] ?></span></p>
												<p class="portfolio-slide__info-item">Год выпуска: <span><?= $project["year"] ?></span></p>
											</div>
										</div>
									</div>
								<?php else: ?>
									<div class="portfolio-slide">
										<div class="portfolio-slide__picture _anim-items _anim-scaleIn" style="--delay: 0.3s;">
											<img src="img/anime/<?= $project["alt_picture"] ?>">
										</div>
										<div class="portfolio-slide__content">
											<div class="portfolio-slide__title _anim-items _anim-scaleIn" style="--delay: 0.35s;"><?= $project["name"] ?></div>
											<div class="portfolio-slide__info">
												<p class="portfolio-slide__info-item _anim-items _anim-fadeInRight" style="--delay: 0.4s;">Производитель: <span><?= $project["studio"] ?></span></p>
												<p class="portfolio-slide__info-item _anim-items _anim-fadeInRight" style="--delay: 0.45s;">Озвучка: <span><?= $project["type"] ?></span></p>
												<p class="portfolio-slide__info-item _anim-items _anim-fadeInRight" style="--delay: 0.5s;">Год выпуска: <span><?= $project["year"] ?></span></p>
											</div>
										</div>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="portfolio__bottom">
						<a href="portfolio" class="portfolio__button button button_fill _anim-items _anim-scaleIn" style="--delay: 0.3s;">Все наши проекты</a>
					</div>
				</div>
			</section>
			<!-- our partners screen -->
			<section class="partners">
				<div class="partners__container _container">
					<div class="partners__top caption-container">
						<div class="partners__title title _anim-items _anim-fadeInBottom" style="--delay: 0.2s;">С кем мы работаем</div>
						<div class="partners__subtitle subtitle _anim-items _anim-fadeInBottom" style="--delay: 0.3s;">наши партнёры</div>
					</div>
					<div class="partners__content _anim-items _anim-scaleIn" style="--delay: 0.4s;">
						<div class="partners__wrapper">
							<div class="partners__row">
								<div class="partners__item">
									<img src="img/partners/2x2.png">
								</div>
								<div class="partners__item">
									<img src="img/partners/aniplex.svg">
								</div>
								<div class="partners__item">
									<img src="img/partners/clover_works.svg">
								</div>
								<div class="partners__item">
									<img src="img/partners/madhouse.png">
								</div>
								<div class="partners__item">
									<img src="img/partners/mappa.svg">
								</div>
								<div class="partners__item">
									<img src="img/partners/studio_bones.png">
								</div>
								<div class="partners__item">
									<img src="img/partners/studio_pierro.svg">
								</div>
							</div>
							<div class="partners__row">
								<div class="partners__item">
									<img src="img/partners/2x2.png">
								</div>
								<div class="partners__item">
									<img src="img/partners/aniplex.svg">
								</div>
								<div class="partners__item">
									<img src="img/partners/clover_works.svg">
								</div>
								<div class="partners__item">
									<img src="img/partners/madhouse.png">
								</div>
								<div class="partners__item">
									<img src="img/partners/mappa.svg">
								</div>
								<div class="partners__item">
									<img src="img/partners/studio_bones.png">
								</div>
								<div class="partners__item">
									<img src="img/partners/studio_pierro.svg">
								</div>
							</div>
						</div>
					</div>
					<div class="partners__bottom">
						<a href="partners" class="partners__button button button_border _anim-items _anim-scaleIn" style="--delay: 0.1s;">Все партнёры</a>
					</div>
				</div>
			</section>
			<!-- contacts -->
			<section class="contacts">
				<div class="contacts__container _container">
					<div class="contacts__top caption-container">
						<div class="contacts__title title _anim-items _anim-fadeInBottom" style="--delay: 0.2s;">Связаться с нами</div>
						<div class="contacts__subtitle subtitle _anim-items _anim-fadeInBottom" style="--delay: 0.3s;">Заполнить форму</div>
					</div>
					<div class="contacts__content">
						<form action="inc/mail.php" method="post" class="contacts-form">
							<input type="text" name="location" style="display: none;" disabled value="/">
							<p class="contacts-form__text text _anim-items _anim-fadeInLeft" style="--delay: 0.4s;">Для сотрудничества и если у вас остались какие-либо вопросы следует заполнить форму ниже</p>
							<div class="contacts-form__content">
								<label class="contacts-form__field">
									<p class="contacts-form__label _anim-items _anim-fadeInLeft" style="--delay: 0.5s;">Ваше имя:</p>
									<input class="_anim-items _anim-widthIn" style="--delay: 0.6s;" type="text" placeholder="Денис" name="firstname" id="firstname">
								</label>
								<label class="contacts-form__field">
									<p class="contacts-form__label _anim-items _anim-fadeInLeft" style="--delay: 0.6s;">Ваш номер телефона:</p>
									<input class="_anim-items _anim-widthIn" style="--delay: 0.7s;" type="tel" placeholder="+38 (___) ___-__-__" name="phone" id="phone">
								</label>
								<label class="contacts-form__field">
									<p class="contacts-form__label _anim-items _anim-fadeInLeft" style="--delay: 0.7s;">Ваша почта:</p>
									<input class="_anim-items _anim-widthIn" style="--delay: 0.8s;" type="email" placeholder="mail@nure.ua" name="email" id="email">
								</label>
								<label class="contacts-form__field">
									<p class="contacts-form__label _anim-items _anim-fadeInLeft" style="--delay: 0.8s;">Ваше сообщения:</p>
									<textarea class="_anim-items _anim-widthIn" style="--delay: 0.9s;" placeholder="Будете ли вы дублировать..." maxlength="250" name="message" id="message"></textarea>
								</label>
							</div>
							<div class="contacts__bottom">
								<button class="contacts__submit button button_fill _anim-items _anim-scaleIn" style="--delay: 0.5s;" type="submit">Отправить</button>
								<a href="contacts" class="contacts__button button button_border _anim-items _anim-scaleIn" style="--delay: 0.6s;">Контакты</a>
							</div>
						</form>
						<div class="contacts__picture picture _anim-items _anim-scaleIn" style="--delay: 0.5s;">
							<img src="img/picture_2.png">
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
	<script src="js/home.js"></script>
	<script src="js/script.js"></script>
	<!-- Animation on Scroll -->
	<script src="libs/animOnScroll.js"></script>
</body>
</html>