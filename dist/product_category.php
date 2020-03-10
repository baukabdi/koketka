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
					

								<div class="select_item select_manufacturer">
									<label for="manufacturer">Производитель</label>
									<select id="manufacturer" class="multi_select" multiple>
										<option value=''>Doggy Dolly</option>
										<option value=''>H&M</option>
										<option value=''>LC Waikiki</option>
										<option value=''>Adidas</option>
										<option value=''>Nike</option>
									</select>
								</div>

								<div class="price_item">
									<label>Цена</label>
									<div class="price_range">
										<!-- Range Script -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<ul class="products_row products columns-4">
						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-1.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">ТЕНИСКА С ЯКА</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-4.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">ТЕНИСКА РИБКА</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-5.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">РИЗА ДОБАЗ</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-5.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">РИЗА ЛАНДМАРК</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-8.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">РОКЛЯ СУПЕРСТАР</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-1.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">ТЕНИСКА ДОБАЗ</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						
						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-7.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">ЛЯТНА БЛУЗА</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-1.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">АНОРАК ЗВЕЗДА</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
						</li>

						<li class="products_item product type-product status-publish first instock product_cat-posters has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
							<a href="product_single.php">
								<span class="favourite onsale">
									<img src="assets/images/favourite.png" alt="Koketka">
								</span>
								<img src="assets/images/product-5.png" class="woocommerce-placeholder wp-post-image" alt="Koketka">
								<h2 class="woocommerce-loop-product__title">АНОРАК ЗВЕЗДА</h2>
								<span class="currency price">
									<span class="woocommerce-Price-currencySymbol">51.00 лв.</span>
									<del class="woocommerce-Price-amount">51.00 лв.</del>
								</span>
							</a>
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