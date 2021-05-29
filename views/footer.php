
	
	<footer>
		<p class="footer-text">&copy; 2018 Меблева фабрика "Руслан" </p>
	</footer>
    

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
						<a href="/basket" class="navbar-shopping-link">
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