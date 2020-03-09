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
						<li class="bread_crumb_currency"><a href="#0">Детали на профайла</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->


				<section class="s-profile-details">
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
									<input type="text" id="city" value="Варна">
								</p>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide i-block">
									<label for="street" class="required">Улица</label>
									<span class="woocommerce-input-wrapper">
										<input type="text" id="street" value="Гоголя">
									</span>
								</p>

								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide i-block">
									<label for="home" class="required">Дом</label>
									<span class="woocommerce-input-wrapper">
										<input type="text" id="home" value="90">
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
		</div>
	</div>
</div>
<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>
