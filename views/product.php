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
<div>
<?php include('header.php') ?>
</div>
<!-- /header -->
	<!-- main-wrap -->
	<div class="wrapper">
		<div class="page-content">
			<div class="container">
				<!-- breadcrumbs -->
				<div class="breadcrumbs-wrap">
					<div class="breadcrumbs">
						<ul class="breadcrumbs-list">
							<li class="breadcrumbs-item">
								<a href="/" class="breadcrumbs-item-link">Головна</a>
								<span class="icon icon-keyboard_arrow_right"></span>
							</li>
							<li class="breadcrumbs-item">
								<a href="#" class="breadcrumbs-item-link">Товари</a>
								<span class="icon icon-keyboard_arrow_right"></span>
							</li>
							<li class="breadcrumbs-item">
								<a href="#" class="breadcrumbs-item-link">Дивани</a>
								<span class="icon icon-keyboard_arrow_right"></span>
							</li>
							<li class="breadcrumbs-item">
								<span>Диван «Карат»</span>
							</li>
						</ul>
					</div>
				</div>
				<!-- main content -->
				<main class="content">
					<!-- item-top -->
					<div class="item-top">
						<div class="row">
							<!-- item photo -->
							<div class="col-lg-8 col-md-7 col-sm-7">
								<div class="item-photo-wrap">
									<div class="item-photo">
										<img src="img/item.jpg" alt="Диван «Карат»" class="item-photo-image">
									</div>
									<ul class="item-photo-list popup-gallery">
										<li class="item-photo-item">
											<a href="img/item.jpg" class="item-photo-link_min">
												<img src="img/item_min.jpg" alt="one" class="item-photo-image_min">
											</a>
										</li>
										<li class="item-photo-item">
											<a href="img/item.jpg" class="item-photo-link_min">
												<img src="img/item_min.jpg" alt="two" class="item-photo-image_min">
											</a>
										</li>
										<li class="item-photo-item">
											<a href="img/item.jpg" class="item-photo-link_min">
												<img src="img/item_min.jpg" alt="three" class="item-photo-image_min">
											</a>
										</li>
										<li class="item-photo-item">
											<a href="img/item.jpg" class="item-photo-link_min">
												<img src="img/item_min.jpg" alt="four" class="item-photo-image_min">
											</a>
										</li>
										<li class="item-photo-item">
											<a href="img/item.jpg" class="item-photo-link_min">
												<img src="img/item_min.jpg" alt="five" class="item-photo-image_min">
											</a>
										</li>
									</ul>
								</div>
							</div>
							
							<!-- item-info -->
							<div class="col-lg-4 col-md-5 col-sm-5">
								<div class="item-info">
									<div class="item-title-wrap">
										<h1 class="title title_main"><?=$data['product']['name']?></h1>
									</div>
									<div class="item-descr">
										<p class="item-descr-text">Диван «Карат» — це одна з найбільш затребуваних моделей. Вона компактна, зручна і красива. А її мініатюрні розміри не залишать вас байдужими (1.9 м х 0.75 м). Така софа стане ідеальним рішенням як для малогабаритної квартири так і для заміського будинку.</p>
									</div>
									<!-- item-purchase -->
									<div class="item-info-purchase">
										<!-- price -->
										<div class="purchase-price">
											<p class="purchase-price-sale">
												<span class="purchase-price-sale_old">6467 грн</span>
												<span class="purchase-price-sale_date">до 17.09.2018</span>
											</p>
											<p class="purchase-price-active">
												<span>16467 грн</span>
											</p>
										</div>

										<!-- button -->
										<div class="item-info-buy">
											<div class="row min">
												<div class="col-md-9 col-sm-9 col-xs-9">
													<a href="" class="bttn">
														<span class="icon icon-add_shopping_cart"></span>
														<span>Придбати</span>
													</a>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<a href="" class="item-add-fav">
														<!-- when add to favourites add class "is-added"-->
														<span class="icon icon-favorite_border"></span>
													</a>
												</div>
											</div>
										</div>

									</div>
									<!-- item-reference -->
									<div class="item-info-reference clearfix">
										<!-- reference state -->
										<div class="reference-state">
											<!-- add/remove "is-active" -->
											<span class="reference-state_point is-active"></span>
											<span class="reference-state_text">Є в наявності</span>
										</div>
										<!-- reference delivery -->
										<ul class="reference-delivery-list">
											<li class="reference-delivery-item">
												<span class="icon icon-local_mall"></span>
												<span class="reference-delivery-text">Самовивіз</span>
											</li>
											<li class="reference-delivery-item">
												<span class="icon icon-local_shipping"></span>
												<span class="reference-delivery-text">Доставка</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- item-bottom -->
					<div class="item-bottom">
						<div class="row">
							<!-- panel description -->
							<div class="col-md-6 col-sm-6">
								<div class="panel-descr">
									<p class="panel-descr-title title_block">Характерисктика товару</p>
									<div class="panel-descr-table-wrap">
										<table class="descr-table">
											<tbody class="descr-table-body">
												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Кількість місць:</span>
														<span class="table-property_value">3-х місний диван-ліжко</span>
													</td>
												</tr>
												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Матеріал:</span>
														<span class="table-property_value">Шкірозамінник, ППУ, Метал, Масив сосни, фанера</span>
													</td>
												</tr>
												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Висота сидіння:</span>
														<span class="table-property_value">45 см</span>
													</td>
												</tr>
												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Глибина сидіння:</span>
														<span class="table-property_value">75 см</span>
													</td>
												</tr>
												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Довжина:</span>
														<span class="table-property_value">230 см</span>
													</td>
												</tr>
												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Ширина:</span>
														<span class="table-property_value">95 см</span>
													</td>
												</tr>
												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Ширина спального місця:</span>
														<span class="table-property_value">135 см</span>
													</td>
												</tr>
												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Довжина спального місця:</span>
														<span class="table-property_value">190 см</span>
													</td>
												</tr>
												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Інструкція по збірці:</span>
														<span class="table-property_value">Самостійна збірка</span>
													</td>
												</tr>

												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Тканина:</span>
														<span class="table-property_value">Шеніл, вілюр</span>
														<ul class="value-cloth cloth-gallery">
															<li class="value-cloth-item">
																<a href="img/cloth/shenil.png" title="Шеніл" class="value-cloth-item-link">
																	<img src="img/cloth/shenil.png" alt="Шеніл" class="value-cloth-item-image_min">
																</a>
															</li>
															<li class="value-cloth-item">
																<a href="img/cloth/velur.png" title="Вілюр" class="value-cloth-item-link">
																	<img src="img/cloth/velur.png" alt="Вілюр" class="value-cloth-item-image_min">
																</a>
															</li>
															<li class="value-cloth-item">
																<a href="img/cloth/shenil2.jpg" title="Test" class="value-cloth-item-link">
																	<img src="img/cloth/shenil2.jpg" alt="test" class="value-cloth-item-image_min">
																</a>
															</li>
														</ul>
													</td>
												</tr>

												<tr class="descr-table-row">
													<td class="descr-table-property">
														<span class="table-property_title">Комплектація:</span>
														<span class="table-property_value">Опис комплекту</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- item comments -->
							<div class="col-md-6 col-sm-6">
								<div class="coments-wrap">
									<div class="coments-title-wrap title_block">
										<p class="coments-title">Відгуки</p>
										<button class="bttn bttn_small bttn_coment bttn_coment-add">
											<span class="icon icon-add_comment"></span>
											<span>Написати відгук</span>
										</button>
										<button class="bttn bttn_small bttn_coment bttn_coment-back">
											<span class="icon icon-arrow_back"></span>
											<span>Назад</span>
										</button>
									</div>
									<!-- coments content -->
									<div class="coments-content">
										<!-- IF NO COMMENTS -->
										<p class="coments-empty hidden">Для цього товару не залишили відгук</p>

										<div class="coments-item">
											<div class="coments-item-title">
												<span class="coments-item-title_name">Ірина</span>
												<span class="coments-item-title_date">29.05.18</span>
											</div>
											<p class="coments-item-text">Диван полностью соответствует фото. Порадовала цена со скидкой. Раскладывается легко. Надеемся, что и в использовании будет качественным.</p>
										</div>
										<div class="coments-item">
											<div class="coments-item-title">
												<span class="coments-item-title_name">Ірина</span>
												<span class="coments-item-title_date">29.05.18</span>
											</div>
											<p class="coments-item-text">Диван полностью соответствует фото. Порадовала цена со скидкой. Раскладывается легко. Надеемся, что и в использовании будет качественным.</p>
										</div>
										<div class="coments-item">
											<div class="coments-item-title">
												<span class="coments-item-title_name">Ірина</span>
												<span class="coments-item-title_date">29.05.18</span>
											</div>
											<p class="coments-item-text">Диван полностью соответствует фото. Порадовала цена со скидкой. Раскладывается легко. Надеемся, что и в использовании будет качественным.</p>
										</div>
										<div class="coments-show-more">
											<a href="#" class="show-more-link bttn_small">Показати ще</a>
										</div>
									</div>
									<!-- coments form -->
									<div class="popup-modal coments-form">
										<form id="add-coment" class="form">
											<h3 class="title title_center title_modal-small">Залишити відгук</h3>
											<div class="form-group-wrap">

												<div class="form-item">
													<input type="text" name="coment_name" class="input_modal" maxlength="30" tabindex="0" required>
													<label class="input_label-modal">Ваше ім’я *</label>
												</div>

												<div class="form-item">
													<input type="email" name="coment_email" class="input_modal" required>
													<label class="input_label-modal">E-mail</label>
												</div>

												<div class="form-item">
													<textarea id="input_textarea" name="coment_msg" rows="1" class="input_modal input_modal-textarea"></textarea>
													<label class="input_label-modal">Текст відгуку</label>
												</div>
											</div>

											<div class="form-item form-item_send">
												<input type="submit" name="coment_btn" value="Відправити" class="bttn bttn_send bttn_send-small ">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>

			<!-- Viewed items -->
			<section class="viewed-items">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="section-title">
								<h2 class="title">Переглянуті раніше&nbsp;</h2>
								<p class="section-text">Товари, які Ви відкривали нещодавно</p>
							</div>
							<div class="slider-controls">
								<button class="control-item control-item_prev">
									<span class="icon icon-arrow_back"></span>
								</button>
								<button class="control-item control-item_next">
									<span class="icon icon-arrow_forward"></span>
								</button>
							</div>
						</div>
						<div class="col-md-9">
							<div class="slick-slider-wrap">
								<div class="row">
									<!-- popular slider items -->
									<div class="slider-items">

										<div class="col-md-4 col-sm-6 col-xs-12">
											<figure class="product-item">
												<div class="product-image">
													<a href="#" class="product-image-link">
														<img src="img/item.jpg" alt="Диван «Карат»">
													</a>
												</div>
												<figcaption class="product-text-wrap">
													<div class="product-name">
														<h3 class="product-title">
															<a href="#" class="product-title-link">Диван «Карат»</a>
														</h3>
														<span class="product-category">Дивани</span>
													</div>
													<div class="product-price">
														<p class="product-price-sale">
															<span class="price-sale_old">6467 грн</span>
															<span class="price-sale_date">до 17.09.2018</span>
														</p>
														<p class="product-price-active">
															<span>16467 грн</span>
														</p>
													</div>
													<div class="product-buy">
														<a href="#" class="bttn">
															<span class="icon icon-add_shopping_cart"></span>
															<span>Придбати</span>
														</a>
														<a href="#" class="product-add-fav">
															<span class="icon icon-favorite_border is-active"></span>
														</a>
													</div>
												</figcaption>
											</figure>
										</div>

										<div class="col-md-4 col-sm-6 col-xs-12">
											<figure class="product-item">
												<div class="product-image">
													<a href="#" class="product-image-link">
														<img src="img/item.jpg" alt="Диван «Карат»">
													</a>
												</div>
												<figcaption class="product-text-wrap">
													<div class="product-name">
														<h3 class="product-title">
															<a href="#" class="product-title-link">Диван «Карат»</a>
														</h3>
														<span class="product-category">Дивани</span>
													</div>
													<div class="product-price">
														<p class="product-price-sale">
															<span class="price-sale_old">6467 грн</span>
															<span class="price-sale_date">до 17.09.2018</span>
														</p>
														<p class="product-price-active">
															<span>16467 грн</span>
														</p>
													</div>
													<div class="product-buy">
														<a href="#" class="bttn">
															<span class="icon icon-add_shopping_cart"></span>
															<span>Придбати</span>
														</a>
														<a href="#" class="product-add-fav">
															<span class="icon icon-favorite_border"></span>
														</a>
													</div>
												</figcaption>
											</figure>
										</div>

										<div class="col-md-4 col-sm-6 col-xs-12">
											<figure class="product-item">
												<div class="product-image">
													<a href="#" class="product-image-link">
														<img src="img/item.jpg" alt="Диван «Карат»">
													</a>
												</div>
												<figcaption class="product-text-wrap">
													<div class="product-name">
														<h3 class="product-title">
															<a href="#" class="product-title-link">Диван «Карат»</a>
														</h3>
														<span class="product-category">Дивани</span>
													</div>
													<div class="product-price">
														<p class="product-price-sale">
															<span class="price-sale_old">6467 грн</span>
															<span class="price-sale_date">до 17.09.2018</span>
														</p>
														<p class="product-price-active">
															<span>16467 грн</span>
														</p>
													</div>
													<div class="product-buy">
														<a href="#" class="bttn">
															<span class="icon icon-add_shopping_cart"></span>
															<span>Придбати</span>
														</a>
														<a href="#" class="product-add-fav">
															<span class="icon icon-favorite_border is-active"></span>
														</a>
													</div>
												</figcaption>
											</figure>
										</div>

										<div class="col-md-4 col-sm-6 col-xs-12">
											<figure class="product-item">
												<div class="product-image">
													<a href="#" class="product-image-link">
														<img src="img/item.jpg" alt="Диван «Карат»">
													</a>
												</div>
												<figcaption class="product-text-wrap">
													<div class="product-name">
														<h3 class="product-title">
															<a href="#" class="product-title-link">Диван «Карат»</a>
														</h3>
														<span class="product-category">Дивани</span>
													</div>
													<div class="product-price">
														<p class="product-price-sale">
															<span class="price-sale_old">6467 грн</span>
															<span class="price-sale_date">до 17.09.2018</span>
														</p>
														<p class="product-price-active">
															<span>16467 грн</span>
														</p>
													</div>
													<div class="product-buy">
														<a href="#" class="bttn">
															<span class="icon icon-add_shopping_cart"></span>
															<span>Придбати</span>
														</a>
														<a href="#" class="product-add-fav">
															<span class="icon icon-favorite_border"></span>
														</a>
													</div>
												</figcaption>
											</figure>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="show-more">
						<a href="#" class="show-more-link bttn_small">Показати всі</a>
					</div>
				</div>
			</section>
		</div>
	</div>
	<!-- footer -->
	<div>
    <?php include('footer.php') ?>
    </div>

	<!-- Popups -->
	<section class="popup" style="display: none;">

		<!-- Callback -->
		<div id="callback" class="popup-modal mfp-hide">
			<form id="callback-form" class="form">
				<h3 class="title title_center title_modal">Замовити дзвінок</h3>
				<div class="form-group-wrap">

					<div class="form-item">
						<input type="text" name="callback_name" class="input_modal" maxlength="30" tabindex="0" required>
						<label class="input_label-modal">Ваше ім’я *</label>
					</div>

					<div class="form-item">
						<input type="tel" name="callback_phone" class="input_modal" maxlength="20" required>
						<label class="input_label-modal">Номер телефону *</label>
					</div>
				</div>

				<p class="modal-text_small">* обов’язкові поля для заповнення</p>
				<div class="form-item form-item_send">
					<input type="submit" name="callback_btn" value="Відправити" class="bttn bttn_send">
				</div>
				
			</form>
			<button title="Закрити" class="popup-close mfp-close"></button>
		</div>
	</section>

	<!-- Navbar Fixed Menu -->
	<div id="navbar" class="navbar-fix">
		<div class="container-fluid clearfix">
			<div class="navbar-logo">
				<a href="/" title="Руслан меблевий магазин" class="navbar-logo-link">
					<picture>
						<img src="img/logo.svg" alt="Руслан меблевий магазин" class="navbar-logo-image">
					</picture>
				</a>
			</div>
			<div class="burger">
				<span></span>
			</div>
			<div class="navbar-nav-wrap">
				<nav class="navbar-nav">
					<ul class="navbar-nav-list">
						<li class="navbar-nav-item">
							<a href="#" class="navbar-nav-link">Про нас</a>
						</li>
						<li class="navbar-nav-item">
							<a href="#" class="navbar-nav-link">Виробництво</a>
						</li>
						<li class="navbar-nav-item is-active">
							<a href="#" class="navbar-nav-link">Товари</a>
							<ul class="navbar-nav-list-sub">
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">Кути</a>
								</li>
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">Дивани</a>
								</li>
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">М’які частини</a>
								</li>
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">Софа</a>
								</li>
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">Тахта</a>
								</li>
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">Крісла</a>
								</li>
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">Дитячі меблі</a>
								</li>
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">Кухонні кути</a>
								</li>
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">Ліжка</a>
								</li>
								<li class="navbar-item_sub">
									<a href="#" class="navbar-link_sub">Матеріали</a>
								</li>
								<li class="navbar-item_sub navbar-item_sub--sales">
									<a href="#" class="navbar-link_sub">Знижки</a>
								</li>
							</ul>
						</li>
						<li class="navbar-nav-item">
							<a href="#" class="navbar-nav-link">Партнерам</a>
						</li>
						<li class="navbar-nav-item">
							<a href="#" class="navbar-nav-link">Доставка</a>
						</li>
						<li class="navbar-nav-item">
							<a href="#" class="navbar-nav-link">Контакти</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="navbar-shopping-wrap">
				<ul class="navar-shopping-list">
					<li class="navbar-shopping-item">
						<a href="#" class="navbar-shopping-link">
							<span class="icon icon-favorite"></span>
							<span class="shopping-counter is-added">19</span>
						</a>
					</li>
					<li class="navbar-shopping-item">
						<a href="#" class="navbar-shopping-link">
							<span class="icon icon-shopping_cart"></span>
							<span class="shopping-counter">0</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="./web/js/owl-carousel/owl.carousel.min.js"></script>
	<script src="./web/js/slick-slider/slick.min.js"></script>
	<script src="./web/js/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="./web/js/main.js"></script>
</body>
</html>