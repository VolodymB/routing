<!-- header -->
<?=$data['header']?>
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
										<img src="<?=$data['main_image']?>" alt="Диван «Карат»" class="item-photo-image">
									</div>
									<?php if($data['images']): ?>
									<ul class="item-photo-list popup-gallery">
										<?php foreach($data['images'] as $image): ?>
										<li class="item-photo-item">
											<a href="<?=$image?>" class="item-photo-link_min">
												<img src="<?=$image?>" alt="one" class="item-photo-image_min">
											</a>
										</li>
											<?php endforeach; ?>
									</ul>
									<?php endif; ?>
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
											<select name="unit_id" >											
											<?php foreach($data['units'] as $unit): ?>
												<option value="<?=$unit['unit_id']?>"><?=$unit['name']?> - <?=$unit['price']?> грн.</option>
											<?php endforeach; ?>
											</select>
											<!-- <p class="purchase-price-sale">
												<span class="purchase-price-sale_old">6467 грн</span>
												<span class="purchase-price-sale_date">до 17.09.2018</span>
											</p>
											<p class="purchase-price-active">
												<span>16467 грн</span>
											</p> -->
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
							<!-- <div class="col-md-6 col-sm-6">
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
							</div> -->
							<!-- item comments -->
							<div class="col-md-12 col-sm-12">
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
    <?=$data['footer']?>
