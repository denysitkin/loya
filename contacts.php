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
	<title>Contacts | Loya</title>
	<!-- css -->
	<link rel="stylesheet" href="css/null.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contacts.css">
	<!-- jQuery -->
	<script src="libs/jQuery.js"></script>
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
			<section class="welcome">
				<div class="welcome__container _container">
					<div class="welcome__content">
						<div class="welcome__text-block">
							<h1 class="welcome__title _anim-items _anim-scaleIn" style="--delay: 0.8s;">Контакты</h1>
						</div>
					</div>
				</div>
				<div class="welcome__background _contacts">
					<div class="welcome__fade" data-speed="0.6"></div>
					<div class="welcome__overlay"></div>
				</div>
			</section>
			<section class="info">
				<div class="info__container _container">
					<div class="info__top caption-container">
						<div class="info__title title title_border _anim-items _anim-fadeInBottom" style="--delay: 0.3s;">Всегда на связи</div>
					</div>
					<div class="info__content">
						<div class="info__text-block">
							<div class="info__row">
								<div class="info__box">
									<div class="info__caption _anim-items _anim-fadeInLeft" style="--delay: 0.3s;">Телефон</div>
									<div class="info__line _anim-items _anim-widthIn" style="--delay: 0.4s;"></div>
								</div>
								<div class="info__stat">
									<p class="_anim-items _anim-fadeInRight" style="--delay: 0.6s;"><a href="tel:+380500001515">+38 (050) 000-15-15</a></p>
									<p class="_anim-items _anim-fadeInRight" style="--delay: 0.7s;"><a href="tel:+380666551520">+38 (066) 655-15-20</a></p>
								</div>
							</div>
							<div class="info__row">
								<div class="info__box">
									<div class="info__caption _anim-items _anim-fadeInLeft" style="--delay: 0.4s;">Электронная почта</div>
									<div class="info__line _anim-items _anim-widthIn" style="--delay: 0.5s;"></div>
								</div>
								<div class="info__stat">
									<p class="_anim-items _anim-fadeInRight" style="--delay: 0.8s;"><a href="mailto:loya@gmail.com">loya@gmail.com</a></p>
								</div>
							</div>
							<div class="info__row">
								<div class="info__box">
									<div class="info__caption _anim-items _anim-fadeInLeft" style="--delay: 0.5s;">Адрес</div>
									<div class="info__line _anim-items _anim-widthIn" style="--delay: 0.6s;"></div>
								</div>
								<div class="info__stat">
									<p class="_anim-items _anim-fadeInRight" style="--delay: 0.9s;"><a href="https://goo.gl/maps/2kV34ugqewmVzXdg6" target="_blank">проспект Науки, 14, Харьков, Харьковская область</a></p>
								</div>
							</div>
						</div>
						<div class="info__map _anim-items _anim-scaleIn" style="--delay: 1s;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10255.202784219242!2d36.2286404!3d50.0150907!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6daed05394f03251!2z0KXQsNGA0LrRltCy0YHRjNC60LjQuSDQvdCw0YbRltC-0L3QsNC70YzQvdC40Lkg0YPQvdGW0LLQtdGA0YHQuNGC0LXRgiDRgNCw0LTRltC-0LXQu9C10LrRgtGA0L7QvdGW0LrQuA!5e0!3m2!1suk!2sua!4v1654541494937!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
					<ul class="info-socials">
						<li class="info-socials__item _anim-items _anim-fadeInBottom" style="--delay: 0.3s;">
							<a href="#" class="info-socials__link">vkontakte</a>
						</li>
						<li class="info-socials__item _anim-items _anim-fadeInBottom" style="--delay: 0.4s;">
							<a href="#" class="info-socials__link">facebook</a>
						</li>
						<li class="info-socials__item _anim-items _anim-fadeInBottom" style="--delay: 0.5s;">
							<a href="#" class="info-socials__link">twitter</a>
						</li>
					</ul>
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
							<input type="text" name="location" style="display: none;" disabled value="contacts">
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
	<script src="js/script.js"></script>
	<script src="js/contacts.js"></script>
	<!-- Animation on Scroll -->
	<script src="libs/animOnScroll.js"></script>
</body>
</html>