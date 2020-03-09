<?php include('header.php'); ?>

<!-- quos ego BEGIN -->
<main>
	<!-- Main Top BEGIN  -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-2">
				<?php include('sidebar_category.php'); ?>
			</div>

			<div class="col-sm-12 col-md-9 col-lg-10">
				<?php include('menu.php'); ?>

				<!-- Bread Crumbs START -->
				<nav class="bread_crumbs">
					<ul>
						<li><a href="index.php">Начало</a></li>
						<li>/</li>
						<li class="bread_crumb_currency"><a href="#0">Корзина</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->


				<section class="s-shopping_cart">

					<h1 class="entry-title">Корзина</h1>
					<form class="woocommerce-cart-form">
						<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
							<tbody>
								<tr class="woocommerce-cart-form__cart-item cart_item">
									<td class="product-thumbnail">
										<a href="#0" data-fancybox data-src="assets/images/fotorama-1.png">
											<img src="assets/images/fotorama-1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Koketka">
										</a>
										<span class="magnify">
											<img src="assets/images/magnify.svg" alt="">
										</span>
										<span class="ball">
											+10 баллов
										</span>
									</td>

									<td class="product-name">
										<a href="#0">ЛУКСОЗНА ЧАНТА 2</a>
										<div class="product-price">
											<span class="woocommerce-Price-amount amount">
												<span class="woocommerce-Price-currencySymbol">лв.</span>49.00 лв.
											</span>
										</div>
									</td>

									<td class="product-quantity">
										<div class="quantity">
											<label class="screen-reader-text">Количество</label>
											<div class="quantity_item">
												<span class="spin_down">-</span>
												<input type="number" class="input-text qty text" step="1" min="0" max="50" value="1">
												<span class="spin_up">+</span>
											</div>
										</div>
									</td>

									<td class="product-subtotal">
										<label class="screen-reader-text">Итого</label>
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">лв.</span>
											98.00 лв.
											<a href="#0" class="remove">Удалить товар</a>
										</span>
									</td>
								</tr>

								<tr class="woocommerce-cart-form__cart-item cart_item">
									<td class="product-thumbnail">
										<a href="#0" data-fancybox data-src="assets/images/fotorama-1.png">
											<img src="assets/images/fotorama-1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Koketka">
										</a>
										<span class="magnify">
											<img src="assets/images/magnify.svg" alt="">
										</span>
										<span class="ball">
											+10 баллов
										</span>
									</td>

									<td class="product-name">
										<a href="#0">ЛУКСОЗНА ЧАНТА 2</a>
										<div class="product-price">
											<span class="woocommerce-Price-amount amount">
												<span class="woocommerce-Price-currencySymbol">лв.</span>49.00 лв.
											</span>
										</div>
									</td>

									<td class="product-quantity">
										<div class="quantity">
											<label class="screen-reader-text">Количество</label>
											<div class="quantity_item">
												<span class="spin_down">-</span>
												<input type="number" class="input-text qty text" step="1" min="0" max="50" value="1">
												<span class="spin_up">+</span>
											</div>
										</div>
									</td>

									<td class="product-subtotal">
										<label class="screen-reader-text">Итого</label>
										<span class="woocommerce-Price-amount amount">
											49.00 лв.
										</span>
										<a href="#0" class="remove">Удалить товар</a>
									</td>
								</tr>
							</tbody>
						</table>
					</form>

					<div class="cart_totals">
						<table class="shop_table shop_table_responsive">
							<tbody>
								<tr class="cart-subtotal">
									<td>
										<h3 class="delivery_title">Доставка с M&BM Express</h3>
										<p class="delivery_p">бул. „Чаталджа“ 19, 9002 Варна Център, <br> Варна, Болгария</p>
										<a class="delivery_edit_address" href="#0" data-fancybox data-src="#address_edit_popup">Редактировать адрес доставки</a>

										<!-- Popup Adress BEGIN -->
										<div class="address_edit_popup" style="display: none;" id="address_edit_popup">
											<div class="popup_row">
												<div class="left">
													<div class="country_wrap h-gutter">
														<label class="required" for="select-country">Страна</label>
														<select class="select_custom bootstrap-select" id="select-country">
															<option>Россия</option>
															<option>Беларусь</option>
															<option>Болгария</option>
															<option>Украина</option>
														</select>
													</div>

													<div class="street_home">
														<div class="input_custom h-gutter">
															<label for="street" class="required">Улица</label>
															<input type="text" id="street">
														</div>
														<div class="input_custom h-gutter">
															<label for="home" class="required">Дом</label>
															<input type="text" id="home">
														</div>
													</div>
												</div>


												<div class="right">
													<div class="city_phone">
														<div class="input_custom h-gutter">
															<label for="city" class="required">Город</label>
															<input type="text" id="city">
														</div>
														<div class="input_custom h-gutter">
															<label for="phone" class="required">Телефон</label>
															<input type="text" id="phone" class="phone__custom">
														</div>
													</div>
												</div>
											</div>
											<a href="#0" class="button_custom">Изменить адрес</a>
										</div>
										<!-- Popup Address END -->
									</td>

									<td>
										<label class="screen-reader-text">ДОСТАВКА</label>
										<span class="woocommerce-Price-amount amount">49.00 лв.</span>
									</td>

									<td class="order-total">
										<label class="screen-reader-text">ИТОГО</label>
										<span class="woocommerce-Price-amount amount">151.00 лв.</span>
										<div class="wc-proceed-to-checkout">
											<a href="checkout_page.php" class="checkout-button button alt wc-forward button_custom">
												Оформить товар
											</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

				</section>
			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>