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
						<li><a href="#0">Козметика PURE PAWS</a></li>
						<li>/</li>
						<li><a href="#0">Изложбена козметика</a></li>
						<li>/</li>
						<li class="bread_crumb_currency"><a href="#">ХИДРАТИРАЩ СПРЕЙ СКРЕЖ И СНЕЖИНКИ</a></li>
					</ul>
				</nav>
				<!-- Bread Crumbs END -->



				<section class="s-product_single">
					<div class="left">
						<div class="product_single_fotorama fotorama" data-nav="thumbs">
							<img data-test="123" src="assets/images/fotorama-1.png" alt="Koketka">
							<img data-test="123" src="assets/images/fotorama-2.png" alt="Koketka">
							<img data-test="123" src="assets/images/fotorama-3.png" alt="Koketka">
							<img data-test="123" src="assets/images/fotorama-4.png" alt="Koketka">
						</div>
						<div class="ball">
							+10 баллов
						</div>
					</div>

					<div class="right">
						<h2>НАГРЪДНИКЪ ПТАУН В</h2>
						<p class="price">49.00 лв</p>

						<div class="select_wrap">
							<div class="select_item">
								<label for="size">Размер</label>
								<select id="size" class="multi_select" multiple>
									<option value=''>None</option>
									<option value=''>XS</option>
									<option value=''>S</option>
									<option value=''>SM</option>
									<option value=''>M</option>
									<option value=''>ML</option>
									<option value=''>L</option>
									<option value=''>XL</option>
									<option value=''>2XL</option>
									<option value=''>3XL</option>
									<option value=''>5XL</option>
								</select>
							</div>

							<div class="select_item">
								<label for="color">Цвет</label>
								<select id="color" class="multi_select" multiple>
									<option value=''>None</option>
									<option value=''>Красный</option>
									<option value=''>Черный</option>
									<option value=''>Голубой</option>
									<option value=''>Зелёный</option>
								</select>
							</div>

							<div class="quantity">
								<label for="quantity">Количество</label>
								<div class="quantity_number">
									<span class="spin_down">-</span>
									<input id="quantity" type="number" value="1" min="0" max="20">
									<span class="spin_up">+</span>
								</div>

								<div class="in_stock">
									14 в наличии
								</div>
							</div>

							<a href="#0" class="button_custom button_buy">Купить</a>
						</div>

						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="description-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Описание</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="add-info-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Дополнительная информация</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="testimonials-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Отзывы</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="description-tab">
								<p>Спрей „Снежинки” се използва като допълнителна грижа след къпане, като се нанася на влажна козина.</p>
								<p> Подходящ и за ежедневна употреба, нанасяйки се на суха козина като допълнителна грижа между къпанията.</p>
								<p>Не замества балсама.</p>
								<p><strong>Обем: 236,5 мл</strong></p>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="add-info-tab">
								<p>Тегло 0.240 kg</p>
							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="testimonials-tab">...</div>
						</div>
					</div>
				</section>

				<section class="s-products related_products">
					<h2>Свързани продукти</h2>
					<ul class="products_row related_products_slider">

						<li class="products_item">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-3.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">КОПРИНЕН КРЕМ БАЛСАМ</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-4.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">ПАКЕТ ЗА ОБЕМ 2</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-1.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">ПАКЕТ ЗА ОБЕМ 2</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-1.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">ПАКЕТ ЗА ОБЕМ 2</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

					</ul>
				</section>
			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>