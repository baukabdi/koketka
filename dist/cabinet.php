<?php include('header.php'); ?>

<!-- quos ego BEGIN -->
<main>
	<!-- Main Top BEGIN  -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-2">
				<div class="active_sidebar">
					<nav class="sidebar_category">
						<ul>
							<li>
								<a href="#c-tablo" class="active_link">
									<span class="sidebar_image"><img src="assets/images/calendar.svg" alt="Koketka"></span>
									<span class="sidebar_text">Табло</span>
								</a>
							</li>

							<li>
								<a href="#c-orders">
									<span class="sidebar_image"><img src="assets/images/gift.svg" alt="Koketka"></span>
									<span class="sidebar_text">Поръчки</span>
								</a>
							</li>

							<li>
								<a href="#c-addresses">
									<span class="sidebar_image"><img src="assets/images/home.svg" alt="Koketka"></span>
									<span class="sidebar_text">Адреси</span>
								</a>
							</li>

							<li>
								<a href="#c-details">
									<span class="sidebar_image"><img src="assets/images/pasport.svg" alt="Koketka"></span>
									<span class="sidebar_text">Детали на профайла</span>
								</a>
							</li>

							<li>
								<a href="#c-exit">
									<span class="sidebar_image"><img src="assets/images/exit.svg" alt="Koketka"></span>
									<span class="sidebar_text">Изход</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-sm-12 col-md-9 col-lg-10">
				<?php include('menu.php'); ?>

				<!-- Bread Crumbs START -->
				<nav class="bread_crumbs">
					<ul>
						<li><a href="index.php">Начало</a></li>
						<li>/</li>
						<li class="bread_crumb_currency"><a href="#0">Личный кабинет</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->

				
				<!-- Tablo BEGIN -->
				<section class="s-cabinet c-cabinet" id="c-tablo">
					<h1>Личный кабинет</h1>

					<p>Здраствуйте, <strong>Иван Иванович</strong> (не <strong>Иван Иванович?</strong> <a href="#0">Выйти</a>)</p>
					<p>От вашия профил да преглеждате <a href="#0">последните си поръчки</a>, да управлявате вашите <a href="#0">адреси за плащане и доставка</a> и <a href="#0">да променяте паролата и манните на прифила си</a></p>
				</section>
				<!-- Tablo END -->

				<!-- Orders START -->
				<section class="s-orders hidden c-cabinet" id="c-orders">
					<h1>Поръчки</h1>

					<table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
						<thead>
							<tr>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number"><span class="nobr">Поръчка</span></th>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date"><span class="nobr">Дата</span></th>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status"><span class="nobr">Статут</span></th>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total"><span class="nobr">Общо</span></th>
								<th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions"><span class="nobr">Действия</span></th>
							</tr>
						</thead>

						<tbody>
							<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Поръчка">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144">
										№90
									</a>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Дата">
									<time datetime="2020-03-09T13:19:33+00:00">20.02.2020</time>
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status order_delayed" data-title="Статут">
									Задържана
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Общо">
									<span class="woocommerce-Price-amount amount">лв. 43.00 за 2 продукта</span>
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Действия">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144" class="woocommerce-button button view">преглед</a>
								</td>
							</tr>

							<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Поръчка">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144">
										№91								
									</a>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Дата">
									<time datetime="2020-03-09T13:19:33+00:00">09.03.2020</time>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status order_sent">
									Отправлена
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Общо">
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>204.00</span> за 2 продукта
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Действия">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144" class="woocommerce-button button view">преглед</a>
								</td>
							</tr>

							<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Поръчка">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144">
										№92								
									</a>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Дата">
									<time datetime="2020-03-09T13:19:33+00:00">09.03.2020</time>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status waiting_payment">
									Ждет оплаты
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Общо">
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>204.00</span> за 2 продукта
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Действия">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144" class="woocommerce-button button view">преглед</a>
								</td>
							</tr>

							<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Поръчка">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144">
										№93							
									</a>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Дата">
									<time datetime="2020-03-09T13:19:33+00:00">09.03.2020</time>

								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status order_delayed">
									Задържана
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Общо">
									<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">лв.</span>204.00</span> за 2 продукта
								</td>
								<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Действия">
									<a href="http://coder-dojo.ru/test2/?page_id=9&amp;view-order=144" class="woocommerce-button button view">преглед</a>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
				<!-- Orders END -->

				<!-- Addresses BEGIN -->
				<section class="s-addresses active_sidebar hidden c-cabinet" id="c-addresses">
					<h1>Адреси</h1>

					<div class="u-columns woocommerce-Addresses col2-set addresses">
						<div class="u-column1 col-1 woocommerce-Address">
							<header class="woocommerce-Address-title title">
								<h3>Адрес за фактуриране</h3>
							</header>
							<address>
								<strong>Доставка с M&BM Express</strong> <br>
								бул. „Чаталджа“ 19, 9002 Варна Център, Варна, Болгария
							</address>
							<a href="#0" data-src="#address_edit_popup" data-fancybox class="edit">Редактировать адрес фактуриране</a>
						</div>


						<div class="u-column2 col-2 woocommerce-Address">
							<header class="woocommerce-Address-title title">
								<h3>Адрес за доставка</h3>
							</header>
							<address>
								<strong>Доставка с M&BM Express</strong> <br>
								бул. „Чаталджа“ 19, 9002 Варна Център, Варна, Болгария
							</address>
							<a href="#0" data-src="#address_edit_popup" data-fancybox class="edit">Редактировать адрес фактуриране</a>
						</div>

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
					</div>
				</section>
				<!-- Addresses END -->


				<!-- Profile Details BEGIN -->
				<section class="s-profile-details active_sidebar hidden c-cabinet" id="c-details">
					<h1>Детали на профа</h1>

					
					<div class="woocommerce-MyAccount-content">

						<div class="bonus_balls">
							Бонусные баллы:
							<span class="bonus_item">
								250
							</span>
						</div>
						<div class="woocommerce-notices-wrapper"></div>

						<form class="woocommerce-EditAccountForm edit-account">
							<div class="left">
								<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
									<label for="account_full_name" class="required">ФИО</label>
									<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_full_name" autocomplete="given-name" value="Иван Иванович">
								</p>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label for="account_email" class="required">Имейл адрес</label>
									<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="ivan@yandex.ru">
								</p>

								<p class="validate-required validate-email h-gutter" id="billing_phone_field">
									<label for="billing_phone" class="required">Телефон</label>
									<span class="woocommerce-input-wrapper">
										<input type="text" class="input-text" id="billing_phone" value="89099097979">
									</span>
								</p>
							</div>

							<div class="right">
								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label class="required" for="billing_country">Страна</label>
									<select id="billing_country">
										<option>Болгария</option>
										<option>Россия</option>
										<option>Беларусь</option>
										<option>Украина</option>
									</select>
								</p>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label for="city" class="required">Город</label>
									<input type="text" id="city1" value="Варна">
								</p>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide i-block">
									<label for="street" class="required">Улица</label>
									<span class="woocommerce-input-wrapper">
										<input type="text" id="street1" value="Гоголя">
									</span>
								</p>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide i-block">
									<label for="home" class="required">Дом</label>
									<span class="woocommerce-input-wrapper">
										<input type="text" id="home1" value="90">
									</span>
								</p>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide i-block">
									<label for="apartment" class="required">Квартира</label>
									<span class="woocommerce-input-wrapper">
										<input type="text" id="apartment" value="90">
									</span>
								</p>
							</div>
						</form>

						<fieldset>
							<legend>Промяна на парола</legend>

							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="password_current">Текуща парола</label>
								<span class="password-input">
									<input type="text" class="woocommerce-Input woocommerce-Input--password input-text" id="password_current" value="admin">
								</span>
							</p>
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="password_1">Нова парола</label>
								<span class="password-input">
									<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" id="password_1" value="password">
								</span>
							</p>
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="password_2">Потвърждение на новата парола</label>
								<span class="password-input">
									<input type="password" value="qwerty" class="woocommerce-Input woocommerce-Input--password input-text" id="password_2">
								</span>
							</p>
						</fieldset>
					</div>
				</section>
				<!-- Profile Details END -->

			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>