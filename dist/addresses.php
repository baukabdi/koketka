<?php include('header.php'); ?>

<!-- quos ego BEGIN -->
<main>
	<!-- Main Top BEGIN  -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-2">
				<?php include('active_sidebar.php');?>
			</div>

			<div class="col-sm-12 col-md-9 col-lg-10">
				<?php include('menu.php'); ?>

				<!-- Bread Crumbs START -->
				<nav class="bread_crumbs">
					<ul>
						<li><a href="index.php">Начало</a></li>
						<li>/</li>
						<li class="bread_crumb_currency"><a href="#0">Адреси</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->


				<section class="s-addresses">

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
			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>
