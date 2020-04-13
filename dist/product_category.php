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

				<section class="s-products">
					<div class="products_filter">
						<a href="#0" class="filter_button">
							<img src="assets/images/filter.svg" alt="Filter">
							филтър
						</a>

						<div class="filter_show">
							<div class="select_wrap">
								<div class="select_item select_size">
									<label for="size">Размер</label>
									<select id="size" multiple="multiple">
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


								<div class="select_item select_manufacturer">
									<label for="manufacturer">Производитель</label>
									<select id="manufacturer" multiple="multiple">
										<option value="Doggy Dolly">Doggy Dolly</option>
										<option value="H&M">H&M</option>
										<option value="LC Waikiki">LC Waikiki</option>
										<option value="Adidas">Adidas</option>
										<option value="Nike">Nike</option>
									</select>
								</div>

								<div class="price_item">
									<label>Цена</label>
									<div class="price_range">
										<input type="hidden" class="slider-input" value="23">
									</div>
								</div>
							</div>
						</div>
					</div>

				<ul class="products_row">
						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php" class="product-type_top">
								<div class="favourite">
									<img src="assets/images/favourite.png" alt="">
								</div>
								<img src="assets/images/product-1.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
							</a>

							<div class="product-type_bottom">
								<div class="left">
									<h2 class="woocommerce-loop-product__title">Дрехи</h2>
									<span class="currency price">
										<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
										<del class="woocommerce-Price-amount">51.00 лв.</del>
									</span>
								</div>
							</div>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php" class="product-type_top">
								<div class="favourite">
									<img src="assets/images/favourite.png" alt="">
								</div>
								<img src="assets/images/product-9.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
							</a>

							<div class="product-type_bottom">
								<div class="left">
									<h2 class="woocommerce-loop-product__title">Тениска Рибка</h2>
									<span class="currency price">
										<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
										<del class="woocommerce-Price-amount">51.00 лв.</del>
									</span>
								</div>
							</div>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php" class="product-type_top">
								<div class="favourite">
									<img src="assets/images/favourite.png" alt="">
								</div>
								<img src="assets/images/product-3.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
							</a>

							<div class="product-type_bottom">
								<div class="left">
									<h2 class="woocommerce-loop-product__title">Козметика PURE PAWS</h2>
									<span class="currency price">
										<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
										<del class="woocommerce-Price-amount">51.00 лв.</del>
									</span>
								</div>
							</div>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php" class="product-type_top">
								<div class="favourite">
									<img src="assets/images/favourite.png" alt="">
								</div>
								<img src="assets/images/product-4.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
							</a>

							<div class="product-type_bottom">
								<div class="left">
									<h2 class="woocommerce-loop-product__title">Легла</h2>
									<span class="currency price">
										<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
										<del class="woocommerce-Price-amount">51.00 лв.</del>
									</span>
								</div>
							</div>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php" class="product-type_top">
								<div class="favourite">
									<img src="assets/images/favourite.png" alt="">
								</div>
								<img src="assets/images/product-5.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
							</a>

							<div class="product-type_bottom">
								<div class="left">
									<h2 class="woocommerce-loop-product__title">Легла</h2>
									<span class="currency price">
										<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
										<del class="woocommerce-Price-amount">51.00 лв.</del>
									</span>
								</div>
							</div>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php" class="product-type_top">
								<div class="favourite">
									<img src="assets/images/favourite.png" alt="">
								</div>
								<img src="assets/images/product-6.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
							</a>

							<div class="product-type_bottom">
								<div class="left">
									<h2 class="woocommerce-loop-product__title">Легла</h2>
									<span class="currency price">
										<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
										<del class="woocommerce-Price-amount">51.00 лв.</del>
									</span>
								</div>
							</div>
						</li>
					</ul>

					<nav class="navigation pagination" role="navigation">
						<div class="nav-links">
							<a class="prev page-numbers" href="#0">←</a>

							<span class='page-numbers current'>1</span>
							<a class='page-numbers' href='#'>2</a>
							<a class='page-numbers' href='#'>3</a>
							<a class='page-numbers' href='#'>4</a>
							<a class='page-numbers' href='#'>5</a>

							<a class="next page-numbers" href="#0">→</a>
						</div>
					</nav>
				</section>

			</div>
		</div>
	</div>
	<!-- Main Top END -->
</main>
<!-- quos ego END -->

<?php include('footer.php'); ?>
