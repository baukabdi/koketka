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
						<li class="bread_crumb_currency"><a href="#0">Страница подтвержденного заказа</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->


				<section class="s-checkout s-checkout-confirmed">

					<h1>Страница подтвержденного заказа</h1>

					<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Спасибо за совершение заказа!</p>

					<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">
						<li class="woocommerce-order-overview__order order">
							Номер заказа: <strong>143</strong>
						</li>
						<li class="woocommerce-order-overview__date date">
							Дата: <strong>21 февраля</strong>
						</li>
						<li class="woocommerce-order-overview__total total">
							Общо: <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>лв. 75.00</span></strong>
						</li>
						<li class="woocommerce-order-overview__payment-method method">
							Начин на плащане:
							<strong>Наложен платёж</strong>
						</li>
						<li>Плащане в брой при доставка</li>
					</ul>

					<form class="checkout woocommerce-checkout">

						<div id="customer_details" class="col2-set">

							<div class="right">
								<div id="order_review" class="woocommerce-checkout-review-order">
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
									<button type="submit" class="button alt button_custom" name="woocommerce_checkout_place_order" id="place_order" value="Поръчване" data-value="Поръчване">зваершение заказа</button>
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