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
						<li class="bread_crumb_currency"><a href="#0">Оформление заказа</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->


				<section class="s-checkout">

					<h1>Оформление заказа</h1>

					<form class="checkout woocommerce-checkout">

						<div id="customer_details" class="col2-set">
							<div class="checkout_row">

								<div class="left_center">
									<div class="form-row">
										<div class="left">
											<div class="woocommerce-billing-fields">
												<h3>Адрес за фактуриране</h3>
												<div class="woocommerce-billing-fields__field-wrapper">
													<p class="validate-required checkout_fullname h-gutter" id="billing_first_name_field">
														<label for="billing_full_name" class="required">
															ФИО
														</label>
														<span class="woocommerce-input-wrapper">
															<input type="text" class="input-text" id="billing_full_name">
														</span>
													</p>

													<p class="validate-required validate-email h-gutter">
														<label for="billing_email" class="required">
															Е-майл
														</label>
														<span class="woocommerce-input-wrapper">
															<input type="text" class="input-text" id="billing_email">
														</span>
													</p>

													<p class="validate-required validate-email h-gutter" id="billing_phone_field">
														<label for="billing_phone" class="required">
															Телефон
														</label>
														<span class="woocommerce-input-wrapper">
															<input type="text" class="input-text" id="billing_phone">
														</span>
													</p>

													<p class="create-account woocommerce-validated h-gutter">
														<label for="createaccount" class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
															<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" type="checkbox">
															<span>Зарегистрироваться на <br> сайте</span>
														</label>
													</p>
												</div>
											</div>
										</div>

										<div class="center">
											<div class="woocommerce-info not_our_client">
												Ещё не наш клиент?
												<a href="#" class="register_client">кликните тут для регистрации</a>
											</div>

											<p class="country_wrap h-gutter">
												<label class="required" for="billing_country">Страна</label>
												<select class="select_custom bootstrap-select" id="billing_country">
													<option>Россия</option>
													<option>Беларусь</option>
													<option>Болгария</option>
													<option>Украина</option>
												</select>
											</p>

											<p class="validate-required h-gutter">
												<label for="billing_city" class="required">
													Город
												</label>
												<span class="woocommerce-input-wrapper">
													<input type="text" class="input-text" id="billing_city">
												</span>
											</p>

											<p class="validate-required h-gutter">
												<div class="street_home">
													<div class="street h-gutter">
														<label for="billing_address_1" class="required">Улица</label>
														<span class="woocommerce-input-wrapper">
															<input type="text" class="input-text" id="billing_address_1">
														</span>
													</div>

													<div class="home">
														<label for="billing_address_2" class="required">Дом</label>
														<span class="woocommerce-input-wrapper">
															<input type="text" class="input-text" id="billing_address_2">
														</span>
													</div>
												</div>

												<p id="ship-to-new-address" class="ship-to-new-address">
													<a href="#" class="add_new_address">
														<span class="circle_plus">
															<img src="assets/images/plus.svg" alt="">
														</span>
														<span class="add_link">
															Добавить новый <br> адрес доставки
														</span>
													</a>
												</p>
										</div>
									</div>

									<div class="woocommerce-additional-fields">
										<div class="woocommerce-additional-fields__field-wrapper">
											<p class="notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Комментарии к заказу</label>
												<span class="woocommerce-input-wrapper">
													<textarea name="order_comments" class="input-text " id="order_comments" rows="10" cols="20"></textarea>
												</span>
											</p>
										</div>
									</div>
								</div>

								<div class="right">
									<div id="order_review" class="woocommerce-checkout-review-order">
										<p class="validate-required validate-email h-gutter">
											<label>
												Имеете промокод?
											</label>
											<span class="woocommerce-input-wrapper">
												<a href="#" class="showcoupon">Ввеси промокод</a>
											</span>
										</p>

										<p class="validate-required validate-email h-gutter" id="billing_email_field">
											<label>
												У вас есть <span class="dark_bold">56 бонусных баллов</span>
											</label>
											<span class="woocommerce-input-wrapper">
												<a href="#" class="showcoupon">Оплатить баллами</a>
											</span>
										</p>

										<table class="shop_table woocommerce-checkout-review-order-table">
											<thead>
												<tr>
													<th class="product-name order_title">Вашата поръчка</th>
													<th class="product-total">Общо</th>
												</tr>
											</thead>
											<tbody>
												<tr class="cart_item">
													<td class="product-name">
														<a href="#0">Happy Ninja &nbsp; <strong class="product-quantity">×&nbsp;1</strong></a>
													</td>
													<td class="product-total">
														<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>18.00</span>
													</td>
												</tr>
												<tr class="cart_item">
													<td class="product-name">
														<a href="#">Ship yor idea</a>
													</td>
													<td class="product-total">
														<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">лв.</span>35.00
														</span>
													</td>
												</tr>
											</tbody>
											<tfoot>
												<tr class="cart-subtotal">
													<th>Меджина сумма</th>
													<td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>33.00</span></td>
												</tr>

												<tr class="woocommerce-shipping-totals shipping">
													<th>Доставка</th>
													<td data-title="Доставка">лв. 10.00 через EMS</td>
												</tr>

												<tr class="tax-rate tax-rate-nds-1">
													<th><span class="dark_bold">Оплата баллами</span></th>
													<td><span class="dark_bold">15</span></td>
												</tr>

												<tr class="woocommerce-shipping-totals payment_method_bacs_list">
													<th>Начин на плащане</th>
													<td data-title="Доставка">Банков перевод</td>
												</tr>

												<tr class="order-total">
													<th>Общо</th>
													<td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>43.60</span></strong> </td>
												</tr>
											</tfoot>
										</table>
									</div>

									<div id="payment" class="woocommerce-checkout-payment">
										<ul class="wc_payment_methods payment_methods methods">
											<li class="wc_payment_method payment_method_bacs">
												<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
												<label for="payment_method_bacs">
													Банковский перевод
												</label>
											</li>

											<li class="wc_payment_method payment_method_cheque">
												<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
												<label for="payment_method_cheque">
													Плащане с чек
												</label>
											</li>

											<li class="wc_payment_method payment_method_cod">
												<input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
												<label for="payment_method_cod">
													Наличными курьеру
												</label>
											</li>
										</ul>

										<button type="submit" class="button alt button_custom" name="woocommerce_checkout_place_order" id="place_order" value="Поръчване" data-value="Поръчване">оформить заказ</button>
									</div>
								</div>
							</div>
						</div>

					</form>

				</section>
			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>