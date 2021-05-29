<?$data['header']?>
	<!-- main-wrap -->
	<div class="wrapper">
		<div class="page-content">
			<div class="container">
				<!-- main content -->
				<main class="content">
					<h1 class="title title_center title_main">Кошик</h1>
					<!-- cart is full -->
					<div class="row">
						<div class="col-md-8">
							<!-- in cart -->
							<?php if($data['products']): ?>
							<div class="cart-list">
								<?php foreach($data['products'] as $product):  ?>
								<!-- product item -->
								<div class="product-item-cart">
									<figure class="product-item">
										<div class="product-image">
											<a href="<?=$product['link']?>" class="product-image-link">
												<img src="<?=$product['image']?>" alt="Диван «Карат»">
											</a>
										</div>
										<figcaption class="product-text-wrap">
											<div class="product-info-row">
												<div class="product-name">
													<h3 class="product-title">
														<a href="<?=$product['link']?>" class="product-title-link"><?=$product['product_name']?></a>
													</h3>
													<span class="product-category"><?=$product['unit_name'].' - '.$product['price'].' грн'?></span>
												</div>
												<div class="product-price">
													<!-- <p class="product-price-sale">
														<span class="price-sale_old">6467 грн</span>
														<span class="price-sale_date">до 17.09.2018</span>
													</p> -->
													<p class="product-price-active">
														<span><?=$product['total_sum'].' грн.'?></span>
													</p>
												</div>
											</div>
											<div class="product-count">
												<div class="product-count-quantity">
													<button class="input_control input_minus">
														<span class="icon icon-remove_circle_outline"></span>
													</button>
													<input type="text" class="input_count" value="<?=$product['quantity'] ?>" maxlength="3">
													<button class="input_control input_plus">
														<span class="icon  icon-add_circle_outline"></span>
													</button>
												</div>
												<a href="<?=$product['link_remove']?>" class="delete-item">
													<span class="icon icon-highlight_off"></span>
													<span>Видалити</span>
												</a>
											</div>
										</figcaption>
									</figure>
								</div>
								<?php endforeach; ?>	
							</div>
							<?php else: ?>
								<p>Ваш кошик порожній</p>
							<?php endif; ?>
						</div>
						<div class="col-md-4 cart-sticky">
							<!-- cart actions -->
							<div class="cart-total">
								<div class="cart-total-head">
									<span class="cart-total-text">Всього:</span>
									<span class="cart-total-summ"><?=$data['total'].' грн.' ?></span>
								</div>
								<div class="cart-total-act">
									<a href="javascript:void(0);" class="bttn bttn_order-add">
										<span class="icon icon-add_shopping_cart"></span>
										<span>Оформити замовлення</span>
									</a>
									<a href="/products" class="bttn bttn_secondary">Продовжити покупки</a>
								</div>
							</div>

							<!-- order form -->
							<div class="popup-modal order-form">
								<form id="order" class="form">
									<h3 class="title title_modal-small">Оформлення замовлення</h3>
									<div class="form-group-wrap">

										<div class="form-item">
											<input type="text" name="order_name" class="input_modal" maxlength="30" tabindex="0" required>
											<label class="input_label-modal">Ваше ім’я</label>
										</div>
								
										<div class="form-item">
											<input type="email" name="order_email" class="input_modal" maxlength="40" required>
											<label class="input_label-modal">E-mail</label>
										</div>


										<div class="form-item">
											<input type="tel" name="order_phone" class="input_modal" maxlength="20" required>
											<label class="input_label-modal">Номер телефону</label>
										</div>


										<div class="form-item">
											<input type="text" name="order_city" class="input_modal" maxlength="30" required>
											<label class="input_label-modal">Місто</label>
										</div>

										<div class="row">
											<div class="col-md-7 col-sm-7">
												<div class="form-item">
													<input type="text" name="order_street" class="input_modal" maxlength="30" required>
													<label class="input_label-modal">Вулиця</label>
												</div>
											</div>
											<div class="col-md-5 col-sm-5">
												<div class="form-item">
													<input type="text" name="order_apartments" class="input_modal" maxlength="10" required>
													<label class="input_label-modal">Будинок</label>
												</div>
											</div>
										</div>
									</div>

									<div class="form-item form-item_send">
										<input type="submit" name="coment_btn" value="Замовити" class="bttn bttn_send">
									</div>

								</form>
							</div>

						</div>
					</div>
					<!-- cart is empty -->
					<div class="empty-state hidden">
						<div class="empty-state-icon">
							<img src="img/ic_shopping-cart.svg" alt="Ваш кошик порожній">
						</div>
						<p class="empty-state-text">Ваш кошик порожній</p>
						<a href="#" class="bttn">Переглянути товари</a>
					</div>
					<!-- succsessfull order -->
					<div class="empty-state hidden">
						<div class="empty-state-icon">
							<img src="img/ic_done.svg" alt="Ваша покупка пройшла успішно">
						</div>
						<p class="empty-state-text">Ваша покупка пройшла успішно</p>
						<a href="#" class="bttn">Головна сторінка</a>
					</div>
				</main>
			</div>
		</div>
	</div>
	<!-- footer -->
	<?=$data['footer']?>