	
	<!-- main-wrap -->
	<div class="wrapper">
		<div class="page-content">
			<div class="container">
				<div class="row">
					<!-- filter -->
					<div class="col-md-3 col-sm-4">
						<aside class="filter-wrap">
							<div id="main-filter" class="filter">
								<!-- add here checked labels -->

								<!-- end checked labels -->
								<div class="filter-list">
									<!-- filter item -->
									<div class="filter-item">
										<div class="filter-item-head">
											<p class="filter-item-title">Тип меблів</p>
										</div>
										<!-- type furniture -->
										<form action="/products" method='GET' id='filter_form'>
										<div class="filter-item-content">
											<ul class="check-box">
											<?php $i=1; ?>
											<?php foreach($data['categories'] as $category): ?>
												<li>
													<input type="checkbox" name="category[]" value='<?=$category['category_id']?>' id="category<?=$i ?>" class="input_checkbox" <?=(in_array($category['category_id'],$data['category_active']))?'checked':false ?> >
													<label for="category<?=$i ?>" class="input_label-checkbox"><?=$category['name'] ?>&nbsp;<span class="filter-parameter">(<?=$category['count_products']?>)</span></label>
												</li>
												<?php $i++; ?>
												<?php endforeach; ?>											
											</ul>
										</div>
										</form>										
									</div>
									<button type='submit' class='bttn' form='filter_form'>Фільтр</button>
									<!-- filter item -->
									<!-- <div class="filter-item">
										<div class="filter-item-head">
											<p class="filter-item-title">Механізми трансформації</p>
										</div> -->
										<!-- type mechanism -->
										<!-- <div class="filter-item-content">
											<ul class="check-box">
												<li>
													<input type="checkbox" name="mechanism" id="delfin" class="input_checkbox">
													<label for="delfin" class="input_label-checkbox">Дельфін&nbsp;<span class="filter-parameter">(+7)</span></label>
												</li>
												<li>
													<input type="checkbox" name="mechanism" id="euroknyzka" class="input_checkbox">
													<label for="euroknyzka" class="input_label-checkbox">Єврокнижка&nbsp;<span class="filter-parameter"></span></label>
												</li>
												<li>
													<input type="checkbox" name="mechanism" id="dyvanknyzka" class="input_checkbox">
													<label for="dyvanknyzka" class="input_label-checkbox">Диван-книжка&nbsp;<span class="filter-parameter">(+12)</span></label>
												</li>
												<li>
													<input type="checkbox" name="mechanism" id="akordeon" class="input_checkbox">
													<label for="akordeon" class="input_label-checkbox">Акордеон&nbsp;<span class="filter-parameter">(+3)</span></label>
												</li>
												<li>
													<input type="checkbox" name="mechanism" id="rozkladushky" class="input_checkbox">
													<label for="rozkladushky" class="input_label-checkbox">Розкладушки&nbsp;<span class="filter-parameter">(+37)</span></label>
												</li>
												<li>
													<input type="checkbox" name="mechanism" id="klasictahta" class="input_checkbox">
													<label for="klasictahta" class="input_label-checkbox">Класична тахта&nbsp;<span class="filter-parameter">(+9)</span></label>
												</li>
												<li>
													<input type="checkbox" name="mechanism" id="nozyci" class="input_checkbox">
													<label for="nozyci" class="input_label-checkbox">Ножиці&nbsp;<span class="filter-parameter">(+5)</span></label>
												</li>
												<li>
													<input type="checkbox" name="mechanism" id="sablya" class="input_checkbox">
													<label for="sablya" class="input_label-checkbox">Сабля&nbsp;<span class="filter-parameter">(+21)</span></label>
												</li>
												<li>
													<input type="checkbox" name="mechanism" id="aleko" class="input_checkbox">
													<label for="aleko" class="input_label-checkbox">Алеко&nbsp;<span class="filter-parameter">(+4)</span></label>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div> -->
							<button class="bttn_small bttn_filter">
								<span>Показати фільтр</span>
								<span class="hidden">Сховати фільтр</span>
							</button>
						</aside>
					</div>
					<!-- content -->
					<div class="col-md-9 col-sm-8">
						<main class="content">
							<!-- title -->
							<div class="title-wrap">
								<h1 class="title title_main">Дивани</h1>
							</div>
							<!-- product-list -->
							<div class="product-sort-wrap">
								<div class="row">
									<div class="col-md-8">
										<div class="breadcrumbs">
											<ul class="breadcrumbs-list">
												<li class="breadcrumbs-item">
													<a href="/" class="breadcrumbs-item-link">Головна</a>
													<span class="icon icon-keyboard_arrow_right"></span>
												</li>
												<li class="breadcrumbs-item">
													<a href="" class="breadcrumbs-item-link">Товари</a>
													<span class="icon icon-keyboard_arrow_right"></span>
												</li>
												<li class="breadcrumbs-item">
													<span>Дивани</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-4">
										<div class="select-wrap">
											<select id="catalog-sort-by" name="order" class="input input_select">
													<option value="popular">Сортування за популярністю</option>
													<option value="low_price">Від дешевших до дорогих</option>
													<option value="sales">Акційні</option>
												</select>
										</div>
									</div>
								</div>
							</div>
							<div class="product-list-wrap">
								<div class="row">
									<?php if(!empty($data['products'])): ?>
                                    <?php foreach($data['products'] as $product): ?>
									<!-- product item -->
									<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
										<figure class="product-item">
											<div class="product-image">
												<a href="#" class="product-image-link">
													<img src="<?=$product['image']?>" alt="<?=$product['name']?>">
												</a>
											</div>
											<figcaption class="product-text-wrap">
												<div class="product-name">
													<h3 class="product-title">
														<a href="product?id=<?=$product['product_id']?>" class="product-title-link"><?=$product['name']?></a>
													</h3>
													<!-- категорія товару  -->
													<?php foreach($product['categories'] as $category): ?>
													<span class="product-category"><?=$category?></span><br>
													<?php endforeach; ?>
												</div>
												<div class="product-price">
													<!-- <p class="product-price-sale">
														<span class="price-sale_old">6467 грн</span>
														<span class="price-sale_date">до 17.09.2018</span>
													</p> -->
													<p class="product-price-active">
														<span>від <?=$product['price']?> грн</span>
													</p>
												</div>
												<div class="product-buy">
													<a href="product?id=<?=$product['product_id']?>" class="bttn">
														<span class="icon icon-add_shopping_cart"></span>
														<span>Придбати</span>
													</a>
													<a href="" class="product-add-fav">
														<span class="icon icon-favorite_border is-active"></span>
													</a>
												</div>
											</figcaption>
										</figure>
									</div>
                                        <?php endforeach; ?>
										<?php else: ?>
										<p>Не має товару</p>
										<?php endif; ?>
									


								</div>
							</div>
							<!-- paginator -->
							<div class="tab-paginator">
								<div class="paginator control-prev">
									<a href="#">Попередня</a>
								</div>
								<ul class="control-list">
									<li><span class="is-active">1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
								</ul>
								<div class="paginator control-next">
									<a href="#">Наступна</a>
								</div>
							</div>
						</main>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	