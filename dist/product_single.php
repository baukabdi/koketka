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
					<div class="left woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images">
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
						<h1 class="product_title entry-title">НАГРЪДНИКЪ ПТАУН В</h1>
						<p class="price">49.00 лв</p>
						<form>
							<div class="select_wrap">
								<div class="select_item">
									<label for="size">Размер</label>
									<select id="size">
										<option value="None">None</option>
										<option value="XS">XS</option>
										<option value="S">S</option>
										<option value="SM">SM</option>
										<option value="M">M</option>
										<option value="ML">ML</option>
										<option value="L">L</option>
										<option value="XL">XL</option>
										<option value="2XL">2XL</option>
										<option value="3XL">3XL</option>
										<option value="5XL">5XL</option>
									</select>
								</div>

								<div class="select_item">
									<label for="color">Цвет</label>
									<select id="color">
										<option value="">None</option>
										<option value="Красный">Красный</option>
										<option value="Черный">Черный</option>
										<option value="Голубой">Голубой</option>
										<option value="Зелёный">Зелёный</option>
									</select>
								</div>

								<div class="quantity">
									<label class="screen-reader-text" for="quantity_5e6727cf4139c">Количество</label>
									<div class="quantity_item">
										<span class="spin_down">-</span>
										<input id="quantity_5e6727cf4139c" class="input-text qty text" type="number" value="1" min="0" max="20">
										<span class="spin_up">+</span>
									</div>

									<div class="in_stock">
										14 в наличии
									</div>
								</div>

								<button class="button_custom single_add_to_cart_button button alt">Купить</button>
							</div>
						</form>

						<ul class="nav nav-tabs tabs wc-tabs" role="tablist">
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
					<ul class="products_row products columns-4 related_products_slider">

						<li class="products_item product type-product post-24 status-publish first instock product_cat-clothing product_cat-t-shirts has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
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

						<li class="products_item product type-product post-24 status-publish first instock product_cat-clothing product_cat-t-shirts has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
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

						<li class="products_item product type-product post-24 status-publish first instock product_cat-clothing product_cat-t-shirts has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
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

						<li class="products_item product type-product post-24 status-publish first instock product_cat-clothing product_cat-t-shirts has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
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
