<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Меблевий магазин "Руслан"</title>
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="favicon.png"/>
	<!--[if IE]>
		<link rel="shortcut icon" href="favicon.ico">
	<![endif]-->
	<!-- Styles -->
	<link rel="stylesheet" href="./web/js/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="./web/js/slick-slider/slick.css">
	<link rel="stylesheet" href="./web/js/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="./web/css/style.css">
	<!--[if lte IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!-- header -->
	<header class="header">
		<!-- header-top -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="header-logo">
							<a href="/" title="Руслан меблевий магазин" class="header-logo-link">
								<picture>
									<img src="./web/img/logo.svg" alt="Руслан меблевий магазин" class="header-logo-image">
								</picture>
							</a>
						</div>
					</div>
					<div class="col-md-5">
						<div class="header-search">
							<div class="search-form">
								<input id="search" type="text" name="search" class="input search-form__input" placeholder="Пошук товару">
								<button type="submit" class="search-form__submit">
									<span class="icon icon-search"></span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="header-phone-wrap">
							<div class="header-phone">
								<a href="tel:+380973666613" class="phone-link">+38 (097) 366-66-13
									<span class="icon icon-phone"></span>
								</a>
								<p class="phone-time">з 9:00 до 18:00 без вихідних</p>
							</div>
							<a href="#callback" class="bttn bttn-cta bttn-cta__header popup-bttn">
								<span class="icon icon-phone"></span>
								<span>Передзвоніть мені</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header-bottom -->
		<div class="header-bottom">
			<div class="container">
				<!-- header-menu -->
				<nav class="menu-nav">
					<ul class="menu-nav-list">
						<li class="menu-nav-item">
							<a href="#" class="menu-nav-link">Про нас</a>
						</li>
						<li class="menu-nav-item">
							<a href="/user_log_in" class="menu-nav-link" >Авторизація</a>
						</li>
						<li class="menu-nav-item ">
							<a href="/products" class="menu-nav-link">Товари</a>
							<ul class="menu-nav-list_sub">
								<?php foreach($data['menu'] as $item_menu): ?>
								<li class="menu-nav-item_sub">
									<a href="/products?category=<?=$item_menu['id']?>" class="menu-nav-link_sub"><?=$item_menu['name']?></a>
								</li>
								<?php endforeach;  ?>								
							</ul>
						</li>
						<li class="menu-nav-item">
							<a href="#" class="menu-nav-link">Партнерам</a>
						</li>
						<li class="menu-nav-item">
							<a href="#" class="menu-nav-link">Доставка</a>
						</li>
						<li class="menu-nav-item">
							<a href="#" class="menu-nav-link">Контакти</a>
						</li>
					</ul>
				</nav>
				<!-- header-shop-user -->
				<div class="shopping-wrap">
					<ul class="shopping-list">
						<li class="shopping-item">
							<a href="#" class="shopping-link">
								<span class="icon icon-favorite"></span>
								<span class="shopping-counter is-added">19</span>
							</a>
						</li>
						<li class="shopping-item">
							<a href="/basket" class="shopping-link">
								<span class="icon icon-shopping_cart"></span>
								<span class="shopping-counter"><?=$data['total_count']?></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>

<!-- /header -->